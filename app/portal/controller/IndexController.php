<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2019 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: thinkcmf@126.com
// +----------------------------------------------------------------------
namespace app\portal\controller;

use app\admin\model\MessageModel;
use app\admin\model\SlideItemModel;
use app\admin\model\UserAccessLogModel;
use app\portal\model\PortalCategoryModel;
use app\portal\model\PortalPostModel;
use app\portal\model\ProductCategoryModel;
use app\portal\model\ProductModel;
use app\portal\validate\InquiryValidate;
use cmf\controller\HomeBaseController;
use think\facade\Db;

class IndexController extends HomeBaseController
{
    private $isMobile;
    private $category_list;

    private function normalizeSelectorItems($items)
    {
        if (!is_array($items)) {
            return [];
        }

        $result = [];
        foreach ($items as $item) {
            if (!is_array($item)) {
                continue;
            }

            $scene = trim((string)($item['scene'] ?? ''));
            $type  = trim((string)($item['type'] ?? ''));

            if ($scene === '' && $type === '') {
                continue;
            }

            $result[] = [
                'scene' => $scene,
                'type'  => $type
            ];
        }

        return $result;
    }

    public function initialize()
    {
        $productCategoryModel = new ProductCategoryModel();
        $this->category_list = $productCategoryModel->with('children')
            ->where('parent_id', 0)
            ->order('list_order asc,create_time desc')
            ->select();
        $this->assign('category_list', $this->category_list);

        $portalCategoryModel = new PortalCategoryModel();
        $news_category = $portalCategoryModel->where('type', 8)->order('list_order asc')->select();
        $this->assign('news_category', $news_category);

        $site_info = cmf_get_site_info();
        $this->assign('site_info', $site_info);
        parent::initialize();
    }

    public function index()
    {
        $slide_id = 1;
        $SlideItemModel = new SlideItemModel();
        $slides = $SlideItemModel->field('title,description,image,url,target,content')
            ->where('slide_id', $slide_id)
            ->order('list_order asc')
            ->select();
        $this->assign('slides', $slides);

        // Fetch "Why Choose Us" slide items dynamically (by name containing 'choose' or '选择', defaulting to ID 14)
        $chooseSlideId = 14;
        $slideInfo = Db::name('slide')->where('name', 'like', '%choose%')->whereOr('name', 'like', '%选择%')->find();
        if ($slideInfo) {
            $chooseSlideId = $slideInfo['id'];
        }
        $why_choose_slides = $SlideItemModel->field('title,description,image,url,target,content')
            ->where('slide_id', $chooseSlideId)
            ->where('status', 1)
            ->order('list_order asc')
            ->select();
        $this->assign('why_choose_slides', $why_choose_slides);

        $limit = 6;
        $productModel = new ProductModel();
        $productCategoryModel = new ProductCategoryModel();
        $category = $productCategoryModel->where('parent_id', 0)->where('recommend', 1)->order('list_order asc,create_time desc')->select();
        foreach ($category as $key => $value) {
            $where = [['is_recommended', '=', 1], ['category_id', '=', $value['id']]];
            $product_list = $productModel->where($where)
                ->field('id,title,thumbnail,industry')
                ->order('list_order asc')
                ->limit($limit)
                ->select();
            $category[$key]['list'] = $product_list->toArray();
        }
        $this->assign('hot_products', $category);

        $index_site = cmf_get_option('index_setting');
        $index_site = is_array($index_site) ? $index_site : [];
        $index_site += [
            'products_description' => '',
            'about_description'    => '',
            'about_img'            => '',
            'choose_description'   => '',
            'engineering'          => [],
            'choose'               => [],
            'faq'                  => []
        ];
        $this->assign('index_site', $index_site);

        $about_site = cmf_get_option('about_site');
        $this->assign('about_site', $about_site);

        $postModel = new PortalPostModel();
        $news_list = $postModel->alias('p')
            ->join('cmf_portal_category_post c', 'p.id=c.post_id')
            ->where('p.post_type', 8)
            ->field('p.id,p.post_title,p.post_excerpt,p.thumbnail,p.create_time,c.category_id')
            ->order('c.list_order asc,p.create_time desc')
            ->select();
        $this->assign('news_list', $news_list);

        $case_list = $postModel->where('post_type', 3)
            ->field('id,post_title,post_excerpt,more')
            ->order('create_time desc')
            ->select();
        $this->assign('case_list', $case_list);

        return $this->fetch(':index');
    }

    public function product()
    {
        $category_id = $this->request->param('id', 0, 'intval');

        $productCategoryModel = new ProductCategoryModel();
        $productModel = new ProductModel();
        $currentCategory = null;
        if (!empty($category_id)) {
            $currentCategory = $productCategoryModel->where('id', $category_id)->find();
        }

        $heroSettingsAll = cmf_get_option('product_category_hero_settings');
        $heroSettingsAll = is_array($heroSettingsAll) ? $heroSettingsAll : [];

        $categoryCards = $this->category_list->toArray();
        foreach ($categoryCards as $key => $categoryItem) {
            $categoryCards[$key]['product_count'] = $productModel->where('category_id', $categoryItem['id'])->count();
            
            $heroContentItem  = $heroSettingsAll[$categoryItem['id']] ?? [];
            $customHeroDescription = trim((string)($heroContentItem['description'] ?? ''));
            $categoryCards[$key]['custom_description'] = $customHeroDescription !== '' ? $customHeroDescription : 'Explore our wide range of products in this category and request a custom quotation for your project.';

            if (empty($categoryCards[$key]['thumbnail'])) {
                $firstProduct = $productModel->where('category_id', $categoryItem['id'])
                    ->where('thumbnail', '<>', '')
                    ->order('list_order asc,id desc')
                    ->find();
                if (!empty($firstProduct) && !empty($firstProduct['thumbnail'])) {
                    $categoryCards[$key]['thumbnail'] = $firstProduct['thumbnail'];
                }
            }
        }

        $where = [];
        if (!empty($category_id)) {
            $where[] = ['category_id', '=', $category_id];
        }

        $limit = 12;
        $list = $productModel->field('id,category_id,title,thumbnail,industry,overview')
            ->where($where)
            ->order('list_order asc,create_time desc')
            ->paginate($limit);

        $bannerSlideId = cmf_is_mobile() ? 7 : 2;
        $banner = $this->getBanner($bannerSlideId);
        $heroImage = !empty($banner['image']) ? cmf_get_image_url($banner['image']) : '';
        $heroTitle = !empty($banner['title']) ? $banner['title'] : 'High-quality crane manufacturers in China';
        $heroDescription = !empty($banner['description']) ? $banner['description'] : 'The company mainly produces core products such as intelligent cranes, multi-functional special cranes, port cranes, ship cranes, and metallurgical cranes.';
        $pageTitle = 'Products';
        $siteInfo = cmf_get_site_info();
        $pageKeywords = $siteInfo['site_name'] ?? '';
        $pageDescription = $heroDescription;
        $categoryHeadline = 'DESIGNED SPECIFICALLY FOR THE WORLD\'S INDUSTRY';
        $categoryIntro = 'Select a product category below to enter its dedicated landing page and browse all related product solutions.';
        $isCategoryPage = !empty($currentCategory);
        $selectorTitle = '';
        $selectorDescription = '';
        $selectorButtonText = '';
        $selectorItems = [];
        $categoryFaq = [];

        if (!empty($currentCategory)) {
            $heroSettings = cmf_get_option('product_category_hero_settings');
            $heroSettings = is_array($heroSettings) ? $heroSettings : [];
            $heroContent  = $heroSettings[$currentCategory['id']] ?? [];
            $customHeroTitle = trim((string)($heroContent['title'] ?? ''));
            $customHeroDescription = trim((string)($heroContent['description'] ?? ''));

            $heroTitle = $customHeroTitle !== '' ? $customHeroTitle : $currentCategory['name'];
            $heroDescription = $customHeroDescription !== '' ? $customHeroDescription : 'Explore our wide range of products in this category and request a custom quotation for your project.';
            if (!empty($currentCategory['thumbnail'])) {
                $heroImage = cmf_get_image_url($currentCategory['thumbnail']);
            }
            $pageTitle = !empty($currentCategory['seo_title']) ? $currentCategory['seo_title'] : $heroTitle;
            $pageKeywords = !empty($currentCategory['seo_keywords']) ? $currentCategory['seo_keywords'] : $pageKeywords;
            $pageDescription = !empty($currentCategory['seo_description']) ? $currentCategory['seo_description'] : $heroDescription;
            $categoryHeadline = 'OUR PRODUCTS';
            $categoryIntro = 'Browse all available models in this category and compare the lifting solutions that best match your application.';

            $selectorTitle = trim((string)($heroContent['selector_title'] ?? ''));
            $selectorDescription = trim((string)($heroContent['selector_description'] ?? ''));
            $selectorButtonText = trim((string)($heroContent['selector_button_text'] ?? ''));
            $selectorItems = $this->normalizeSelectorItems($heroContent['selector_items'] ?? []);

            $faqSettings = cmf_get_option('product_category_faq_settings');
            $faqSettings = is_array($faqSettings) ? $faqSettings : [];
            $faqContent = $faqSettings[$currentCategory['id']] ?? [];
            $faqItems = is_array($faqContent['faq'] ?? null) ? $faqContent['faq'] : [];
            $faqItems = array_values(array_filter($faqItems, function ($item) {
                if (!is_array($item)) {
                    return false;
                }
                $question = trim((string)($item['question'] ?? ''));
                $answer = trim((string)($item['answer'] ?? ''));
                return $question !== '' || $answer !== '';
            }));

            $categoryFaq = [
                'faq_title'            => trim((string)($faqContent['faq_title'] ?? '')),
                'faq'                  => $faqItems,
                'faq_contact_title'    => trim((string)($faqContent['faq_contact_title'] ?? '')),
                'faq_contact_desc'     => trim((string)($faqContent['faq_contact_desc'] ?? '')),
                'faq_contact_btn_text' => trim((string)($faqContent['faq_contact_btn_text'] ?? '')),
                'faq_contact_btn_link' => trim((string)($faqContent['faq_contact_btn_link'] ?? ''))
            ];
        }

        $currentCategoryName = !empty($currentCategory['name']) ? $currentCategory['name'] : 'All Products';

        $this->assign('current_category', $currentCategory);
        $this->assign('current_category_name', $currentCategoryName);
        $this->assign('category_cards', $categoryCards);
        $this->assign('is_category_page', $isCategoryPage);
        $this->assign('list', $list);
        $this->assign('page', $list->render());
        $this->assign('product_total', $list->total());
        $this->assign('hero_image', $heroImage);
        $this->assign('hero_title', $heroTitle);
        $this->assign('hero_description', $heroDescription);
        $this->assign('category_headline', $categoryHeadline);
        $this->assign('category_intro', $categoryIntro);
        $this->assign('page_title', $pageTitle);
        $this->assign('page_keywords', $pageKeywords);
        $this->assign('page_description', $pageDescription);
        $this->assign('crane_selector_title', $selectorTitle);
        $this->assign('crane_selector_desc', $selectorDescription);
        $this->assign('crane_selector_btn_text', $selectorButtonText);
        $this->assign('crane_selector_items', $selectorItems);
        $this->assign('category_faq', $categoryFaq);

        $caseList = (new PortalPostModel())
            ->where('post_type', 3)
            ->field('id,post_title,post_excerpt,more')
            ->order('create_time desc')
            ->select();
        $this->assign('case_list', $caseList);

        return $this->fetch(':product');
    }

    public function product_info()
    {
        $productModel = new ProductModel();
        $id = $this->request->param('id', 0, 'intval');
        if (empty($id)) {
            $this->error('product not exits');
        }
        $product = $productModel->where('id', $id)->find();

        if (empty($product)) {
            $this->error('product not exits');
        }

        $this->assign('product', $product);

        $productCategoryModel = new ProductCategoryModel();
        $category = $productCategoryModel->where('id', $product['category_id'])->find();
        $this->assign('category', $category);

        $product_setting = cmf_get_option('product_setting');
        $this->assign('product_setting', $product_setting);

        $recommended_common_where = [['id', '<>', $id], ['is_recommended', '=', 1]];
        $category_where = [['category_id', '=', $product['category_id']]];
        $recommended_where = array_merge($recommended_common_where, $category_where);
        $limit = 4;
        $recommended_list = $productModel->field('id,title,industry,thumbnail')->where($recommended_where)->orderRaw('RAND()')->limit($limit)->select()->toArray();
        $this->assign('recommended_list', $recommended_list);

        if (cmf_is_mobile()) {
            $this->getBanner(7);
        } else {
            $this->getBanner(2);
        }

        return $this->fetch(':product-info');
    }

    public function getBanner($slide_id)
    {
        $SlideItemModel = new SlideItemModel();
        $banner = $SlideItemModel->field('title,description,image')
            ->where('slide_id', $slide_id)
            ->where('status', 1)
            ->order('list_order asc,id desc')
            ->find();
        $this->assign('banner', $banner);
        return $banner;
    }

    public function industries()
    {
        $slide_id = 3;
        $limit = 9;
        if ($this->isMobile) {
            $slide_id = 8;
            $limit = 6;
        }
        $this->getBanner($slide_id);

        $postModel = new PortalPostModel();
        $list = $postModel->where('post_type', 3)->field('id,more,post_title,post_excerpt')->order('create_time desc')->paginate($limit);
        $this->assign('list', $list);
        $this->assign('page', $list->render());

        return $this->fetch(':industries');
    }

    public function industries_info()
    {
        $portalPostModel = new PortalPostModel();

        $articleId = $this->request->param('id', 0, 'intval');
        $categoryId = $this->request->param('cid', 0, 'intval');
        $portalCategoryModel = new PortalCategoryModel();

        $category = $portalCategoryModel->where('id', $categoryId)->where('status', 1)->find();
        $this->assign('category', $category);

        $where = [
            ['post_type', '=', 3]
        ];

        if (cmf_is_mobile()) {
            $this->getBanner(8);
        } else {
            $this->getBanner(3);
        }

        $portalPostModel->where('id', $articleId)->inc('post_hits')->update();

        $article = $portalPostModel->field('*')->where($where)->where('id', $articleId)
            ->whereRaw('delete_time IS NULL OR delete_time = 0')->find();
        $this->assign('post', $article);

        $prevArticle = $portalPostModel->field('*')->where($where)->where('id', '<', $articleId)
            ->whereRaw('delete_time IS NULL OR delete_time = 0')->order('id', 'DESC')->find();
        $nextArticle = $portalPostModel->field('*')->where($where)->where('id', '>', $articleId)
            ->whereRaw('delete_time IS NULL OR delete_time = 0')->order('id', 'ASC')->find();
        $this->assign('prev_article', $prevArticle);
        $this->assign('next_article', $nextArticle);

        return $this->fetch(':industries-info');
    }

    public function about()
    {
        if (cmf_is_mobile()) {
            $this->getBanner(9);
        } else {
            $this->getBanner(4);
        }

        $about_site = cmf_get_option('about_site');
        $this->assign('about_site', $about_site);

        return $this->fetch(':about');
    }

    public function cert()
    {
        if (cmf_is_mobile()) {
            $this->getBanner(9);
        } else {
            $this->getBanner(4);
        }

        $about_site = cmf_get_option('about_site');
        $this->assign('about_site', $about_site);

        return $this->fetch(':cert');
    }

    public function create()
    {
        if (cmf_is_mobile()) {
            $this->getBanner(9);
        } else {
            $this->getBanner(4);
        }

        $about_site = cmf_get_option('about_site');
        $this->assign('about_site', $about_site);

        return $this->fetch(':create');
    }

    public function service()
    {
        if (cmf_is_mobile()) {
            $this->getBanner(11);
        } else {
            $this->getBanner(6);
        }
        $service_site = cmf_get_option('service_site');
        $this->assign('service_site', $service_site);
        return $this->fetch(':service');
    }

    public function excellent_service()
    {
        if (cmf_is_mobile()) {
            $this->getBanner(11);
        } else {
            $this->getBanner(6);
        }
        $service_site = cmf_get_option('excellent_service_site');
        $this->assign('service_site', $service_site);
        return $this->fetch(':excellent_service');
    }

    public function download()
    {
        if (cmf_is_mobile()) {
            $this->getBanner(11);
        } else {
            $this->getBanner(6);
        }
        $portalPostModel = new PortalPostModel();
        $list = $portalPostModel->where('post_type', 4)->field('id,post_title,more')->select();
        $this->assign('list', $list);
        return $this->fetch(':download');
    }

    public function quote()
    {
        if (cmf_is_mobile()) {
            $this->getBanner(10);
        } else {
            $this->getBanner(5);
        }
        $site_info = cmf_get_option('site_info');
        $this->assign('site_info', $site_info);

        $quote_site = cmf_get_option('quote_site');
        $this->assign('quote_site', $quote_site);

        return $this->fetch(':quote');
    }

    public function news()
    {
        $slide_id = 12;
        if ($this->isMobile) {
            $slide_id = 13;
        }
        $this->getBanner($slide_id);
        $page = 6;

        $news_category_id = $this->request->param('id', 0, 'intval');
        $portalCategoryModel = new PortalCategoryModel();

        $category = $portalCategoryModel->where('id', $news_category_id)->where('status', 1)->find();
        $this->assign('category', $category);

        $portalPostModel = new PortalPostModel();
        $where = [['post_type', '=', 8]];
        if (!empty($news_category_id)) {
            $where[] = ['c.category_id', '=', $news_category_id];
        }
        $list = $portalPostModel->alias('p')
            ->join('cmf_portal_category_post c', 'p.id=c.post_id', 'left')
            ->where($where)
            ->order('c.list_order asc,p.create_time desc')
            ->field('p.id,p.post_title,p.thumbnail,p.more,c.category_id as cid,p.post_excerpt,p.create_time')
            ->paginate($page);
        $this->assign('list', $list);
        $this->assign('page', $list->render());

        return $this->fetch(':news');
    }

    public function news_info()
    {
        $portalPostModel = new PortalPostModel();

        $articleId = $this->request->param('id', 0, 'intval');
        $categoryId = $this->request->param('cid', 0, 'intval');
        
        if (empty($categoryId) && !empty($articleId)) {
            $relation = \think\facade\Db::name('portal_category_post')->where('post_id', $articleId)->find();
            if ($relation) {
                $categoryId = $relation['category_id'];
            }
        }
        
        $portalCategoryModel = new PortalCategoryModel();

        $category = $portalCategoryModel->where('id', $categoryId)->where('status', 1)->find();
        $this->assign('category', $category);

        $where = [
            ['post.post_type', '=', 8]
        ];
        if (!empty($categoryId)) {
            $where[] = ['relation.category_id', '=', $categoryId];
        }

        $article = $portalPostModel->alias('post')->field('post.*')
            ->join('portal_category_post relation', 'post.id = relation.post_id', 'left')
            ->where($where)
            ->where('post.id', $articleId)
            ->whereRaw('post.delete_time IS NULL OR post.delete_time = 0')
            ->find();
        $this->assign('post', $article);

        $slide_id = 12;
        if ($this->isMobile) {
            $slide_id = 13;
        }
        $this->getBanner($slide_id);
        $portalPostModel->where('id', $articleId)->inc('post_hits')->update();

        $prevArticle = $portalPostModel
            ->alias('post')
            ->field('post.*')
            ->join('portal_category_post relation', 'post.id = relation.post_id', 'left')
            ->where($where)
            ->where('post.id', '<', $articleId)
            ->whereRaw('post.delete_time IS NULL OR post.delete_time = 0')
            ->order('post.id', 'DESC')
            ->find();
            
        $nextArticle = $portalPostModel
            ->alias('post')
            ->field('post.*')
            ->join('portal_category_post relation', 'post.id = relation.post_id', 'left')
            ->where($where)
            ->where('post.id', '>', $articleId)
            ->whereRaw('post.delete_time IS NULL OR post.delete_time = 0')
            ->order('post.id', 'ASC')
            ->find();
            
        $this->assign('prev_article', $prevArticle);
        $this->assign('next_article', $nextArticle);

        return $this->fetch(':news-info');
    }

    public function inquiry()
    {
        if (!$this->request->isPost()) {
            $this->error('Invalid request');
        }
        $data = $this->request->param();
        $InquiryValidate = new InquiryValidate();
        if (!$InquiryValidate->check($data)) {
            $this->error($InquiryValidate->getError());
        }
        Db::startTrans();
        try {
            $messageModel = new MessageModel();
            $ip = cmf_client_ip();
            $messageModel->saveMessage($ip, $data);
            $message_id = $messageModel->id;

            $UserAccessLogModel = new UserAccessLogModel();
            $UserAccessLogModel->saveLog($ip, $message_id);

            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            $this->error($e->getMessage());
        }

        if ($data['type'] == 3) {
            session('user_download', 1);
        }
        $this->success('submit success', '', ['session' => session('user_download')]);
    }

    public function product_info_by_slug()
    {
        $slug = $this->request->param('slug');
        $productModel = new ProductModel();
        $product = $productModel->where('alias', $slug)->find();
        if ($product) {
            $this->request->withGet(['id' => $product['id']]);
            return $this->product_info();
        }
        abort(404, 'product not found');
    }

    public function industries_info_by_slug()
    {
        $slug = $this->request->param('slug');
        $postModel = new PortalPostModel();
        $post = $postModel->where('post_alias', $slug)->where('post_type', 3)->find();
        if ($post) {
            $this->request->withGet(['id' => $post['id']]);
            return $this->industries_info();
        }
        abort(404, 'case not found');
    }

    public function news_info_by_slug()
    {
        $slug = $this->request->param('slug');
        $postModel = new PortalPostModel();
        $post = $postModel->where('post_alias', $slug)->where('post_type', 8)->find();
        if ($post) {
            $relation = \think\Db::name('portal_category_post')->where('post_id', $post['id'])->find();
            $cid = $relation ? $relation['category_id'] : 1;
            $this->request->withGet(['id' => $post['id'], 'cid' => $cid]);
            return $this->news_info();
        }
        abort(404, 'news not found');
    }

    public function privacy()
    {
        return $this->fetch(':privacy');
    }
}








// old
