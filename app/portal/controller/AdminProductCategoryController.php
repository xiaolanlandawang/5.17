<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2019 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------

namespace app\portal\controller;

use app\admin\model\RouteModel;
use app\portal\model\ProductCategoryModel;
use cmf\controller\AdminBaseController;

class AdminProductCategoryController extends AdminBaseController
{
    private const HERO_OPTION_KEY = 'product_category_hero_settings';
    private const FAQ_OPTION_KEY  = 'product_category_faq_settings';

    private function getHeroSettings()
    {
        $settings = cmf_get_option(self::HERO_OPTION_KEY);
        return is_array($settings) ? $settings : [];
    }

    private function saveHeroSettings($settings)
    {
        cmf_set_option(self::HERO_OPTION_KEY, is_array($settings) ? $settings : [], true);
    }

    private function getFaqSettings()
    {
        $settings = cmf_get_option(self::FAQ_OPTION_KEY);
        return is_array($settings) ? $settings : [];
    }

    private function saveFaqSettings($settings)
    {
        cmf_set_option(self::FAQ_OPTION_KEY, is_array($settings) ? $settings : [], true);
    }

    private function normalizeFaqItems($items)
    {
        if (!is_array($items)) {
            return [];
        }

        $result = [];
        foreach ($items as $item) {
            if (!is_array($item)) {
                continue;
            }

            $question = trim((string)($item['question'] ?? ''));
            $answer   = trim((string)($item['answer'] ?? ''));

            if ($question === '' && $answer === '') {
                continue;
            }

            $result[] = [
                'question' => $question,
                'answer'   => $answer
            ];
        }

        return $result;
    }

    private function parseFaqItemsText($text)
    {
        $text = trim((string)$text);
        if ($text === '') {
            return [];
        }

        $lines = preg_split('/\r\n|\r|\n/', $text);
        $items = [];

        foreach ($lines as $line) {
            $line = trim((string)$line);
            if ($line === '') {
                continue;
            }

            $parts = preg_split('/\s*\|\s*/', $line, 2);
            $question = trim((string)($parts[0] ?? ''));
            $answer   = trim((string)($parts[1] ?? ''));

            if ($question === '' && $answer === '') {
                continue;
            }

            $items[] = [
                'question' => $question,
                'answer'   => $answer
            ];
        }

        return $this->normalizeFaqItems($items);
    }

    private function buildFaqItemsText($items)
    {
        $items = $this->normalizeFaqItems($items);
        if (empty($items)) {
            return '';
        }

        $lines = [];
        foreach ($items as $item) {
            $lines[] = trim((string)$item['question']) . ' | ' . trim((string)$item['answer']);
        }

        return implode(PHP_EOL, $lines);
    }

    private function saveCategoryFaqContent(
        $categoryId,
        $faqTitle = '',
        $faqItemsText = '',
        $faqContactTitle = '',
        $faqContactDesc = '',
        $faqContactBtnText = '',
        $faqContactBtnLink = ''
    ) {
        $categoryId = (int)$categoryId;
        if ($categoryId <= 0) {
            return;
        }

        $settings = $this->getFaqSettings();
        $settings[$categoryId] = [
            'faq_title'            => trim((string)$faqTitle),
            'faq'                  => $this->parseFaqItemsText($faqItemsText),
            'faq_contact_title'    => trim((string)$faqContactTitle),
            'faq_contact_desc'     => trim((string)$faqContactDesc),
            'faq_contact_btn_text' => trim((string)$faqContactBtnText),
            'faq_contact_btn_link' => trim((string)$faqContactBtnLink)
        ];

        $this->saveFaqSettings($settings);
    }

    private function deleteCategoryFaqContent($categoryId)
    {
        $categoryId = (int)$categoryId;
        if ($categoryId <= 0) {
            return;
        }

        $settings = $this->getFaqSettings();
        if (isset($settings[$categoryId])) {
            unset($settings[$categoryId]);
            $this->saveFaqSettings($settings);
        }
    }

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

    private function parseSelectorItemsText(
        $text
    ) {
        $text = trim((string)$text);
        if ($text === '') {
            return [];
        }

        $lines = preg_split('/\r\n|\r|\n/', $text);
        $items = [];

        foreach ($lines as $line) {
            $line = trim((string)$line);
            if ($line === '') {
                continue;
            }

            $line  = str_replace('｜', '|', $line);
            $parts = preg_split('/\s*\|\s*/', $line, 2);
            $scene = trim((string)($parts[0] ?? ''));
            $type  = trim((string)($parts[1] ?? ''));

            if ($scene === '' && $type === '') {
                continue;
            }

            $items[] = [
                'scene' => $scene,
                'type'  => $type
            ];
        }

        return $this->normalizeSelectorItems($items);
    }

    private function buildSelectorItemsText($items)
    {
        $items = $this->normalizeSelectorItems($items);
        if (empty($items)) {
            return '';
        }

        $lines = [];
        foreach ($items as $item) {
            $lines[] = trim((string)$item['scene']) . ' | ' . trim((string)$item['type']);
        }

        return implode(PHP_EOL, $lines);
    }

    private function saveCategoryHeroContent(
        $categoryId,
        $title,
        $description,
        $selectorTitle = '',
        $selectorDescription = '',
        $selectorButtonText = '',
        $selectorItemsText = ''
    )
    {
        $categoryId = (int)$categoryId;
        if ($categoryId <= 0) {
            return;
        }

        $settings = $this->getHeroSettings();
        $settings[$categoryId] = [
            'title'                => trim((string)$title),
            'description'          => trim((string)$description),
            'selector_title'       => trim((string)$selectorTitle),
            'selector_description' => trim((string)$selectorDescription),
            'selector_button_text' => trim((string)$selectorButtonText),
            'selector_items'       => $this->parseSelectorItemsText($selectorItemsText)
        ];
        $this->saveHeroSettings($settings);
    }

    private function deleteCategoryHeroContent($categoryId)
    {
        $categoryId = (int)$categoryId;
        if ($categoryId <= 0) {
            return;
        }

        $settings = $this->getHeroSettings();
        if (isset($settings[$categoryId])) {
            unset($settings[$categoryId]);
            $this->saveHeroSettings($settings);
        }
    }

    public function index()
    {
        $productCategoryModel = new ProductCategoryModel();
        $list                 = $productCategoryModel->productCategoryTableTree();
        $this->assign('list', $list);

        return $this->fetch();
    }

    public function add()
    {
        $categoryModel = new ProductCategoryModel();
        $parent_id     = $this->request->param('parent', 0, 'intval');
        $this->assign('parent_id', $parent_id);

        $oneCategory = $categoryModel->where('parent_id', 0)->select();
        $this->assign('oneCategory', $oneCategory);
        $this->assign('hero_title', '');
        $this->assign('hero_description', '');
        $this->assign('selector_title', '');
        $this->assign('selector_description', '');
        $this->assign('selector_button_text', '');
        $this->assign('selector_items_text', '');
        $this->assign('faq_title', '');
        $this->assign('faq_items_text', '');
        $this->assign('faq_contact_title', '');
        $this->assign('faq_contact_desc', '');
        $this->assign('faq_contact_btn_text', '');
        $this->assign('faq_contact_btn_link', '');

        return $this->fetch();
    }

    public function addPost()
    {
        if (!$this->request->isPost()) {
            $this->error('Request error');
        }

        $data   = $this->request->post();
        $result = $this->validate($data, 'ProductCategory');

        if ($result !== true) {
            $this->error($result);
        }
        if (empty($data['list_order'])) {
            unset($data['list_order']);
        }

        $categoryModel = new ProductCategoryModel();
        if (!empty($data['parent_id'])) {
            $parent = $categoryModel->where('id', $data['parent_id'])->find();
            if (empty($parent)) {
                $this->error('Parent category does not exist');
            }
            if ((int)$parent['parent_id'] !== 0) {
                $this->error('Parent category must be top-level');
            }
        }

        $result = $categoryModel->save($data);

        if ($result === false) {
            $this->error('Add failed');
        }

        $id = $categoryModel->id;
        $this->saveCategoryHeroContent(
            $id,
            $data['hero_title'] ?? '',
            $data['hero_description'] ?? '',
            $data['selector_title'] ?? '',
            $data['selector_description'] ?? '',
            $data['selector_button_text'] ?? '',
            $data['selector_items_text'] ?? ''
        );
        $this->saveCategoryFaqContent(
            $id,
            $data['faq_title'] ?? '',
            $data['faq_items_text'] ?? '',
            $data['faq_contact_title'] ?? '',
            $data['faq_contact_desc'] ?? '',
            $data['faq_contact_btn_text'] ?? '',
            $data['faq_contact_btn_link'] ?? ''
        );

        $routeModel = new RouteModel();
        if (!empty($data['alias']) && !empty($id)) {
            $routeModel->setRoute($data['alias'], 'portal/index/product', ['id' => $id], 2, 1);
            $routeModel->getRoutes(true);
        }

        cmf_clear_cache();
        $this->success('娣诲姞鎴愬姛!', url('AdminProductCategory/index'));
    }

    public function edit()
    {
        $id = $this->request->param('id', 0, 'intval');

        $categoryModel = new ProductCategoryModel();

        $oneCategory = $categoryModel->where('parent_id', 0)->select();
        $this->assign('oneCategory', $oneCategory);

        $category = $categoryModel->find($id)->toArray();

        $heroSettings                  = $this->getHeroSettings();
        $heroContent                   = $heroSettings[$id] ?? [];
        $category['hero_title']       = $heroContent['title'] ?? '';
        $category['hero_description'] = $heroContent['description'] ?? '';
        $category['selector_title'] = $heroContent['selector_title'] ?? '';
        $category['selector_description'] = $heroContent['selector_description'] ?? '';
        $category['selector_button_text'] = $heroContent['selector_button_text'] ?? '';
        $category['selector_items_text'] = $this->buildSelectorItemsText($heroContent['selector_items'] ?? []);
        $faqSettings = $this->getFaqSettings();
        $faqContent = $faqSettings[$id] ?? [];
        $category['faq_title'] = $faqContent['faq_title'] ?? '';
        $category['faq_items_text'] = $this->buildFaqItemsText($faqContent['faq'] ?? []);
        $category['faq_contact_title'] = $faqContent['faq_contact_title'] ?? '';
        $category['faq_contact_desc'] = $faqContent['faq_contact_desc'] ?? '';
        $category['faq_contact_btn_text'] = $faqContent['faq_contact_btn_text'] ?? '';
        $category['faq_contact_btn_link'] = $faqContent['faq_contact_btn_link'] ?? '';

        $this->assign($category);

        return $this->fetch();
    }

    public function editPost()
    {
        if (!$this->request->isPost()) {
            $this->error('Request error');
        }

        $data   = $this->request->post();
        $result = $this->validate($data, 'ProductCategory');

        if ($result !== true) {
            $this->error($result);
        }

        $categoryModel = new ProductCategoryModel();
        if (!empty($data['parent_id'])) {
            $parent = $categoryModel->where('id', $data['parent_id'])->find();
            if (empty($parent)) {
                $this->error('Parent category does not exist');
            }
            if ((int)$parent['parent_id'] !== 0) {
                $this->error('Parent category must be top-level');
            }
            if ((int)$parent['id'] === (int)$data['id']) {
                $this->error('Cannot set itself as parent category');
            }
        }

        $data['recommend'] = $data['recommend'] ?? 0;
        $category          = $categoryModel->find($data['id']);
        $result            = $category->save($data);

        if ($result === false) {
            $this->error('Save failed');
        }

        $routeModel = new RouteModel();
        if (!empty($data['alias'])) {
            $routeModel->setRoute($data['alias'], 'portal/index/product', ['id' => $data['id']], 2, 1);
            $routeModel->getRoutes(true);
        }

        $this->saveCategoryHeroContent(
            $data['id'],
            $data['hero_title'] ?? '',
            $data['hero_description'] ?? '',
            $data['selector_title'] ?? '',
            $data['selector_description'] ?? '',
            $data['selector_button_text'] ?? '',
            $data['selector_items_text'] ?? ''
        );
        $this->saveCategoryFaqContent(
            $data['id'],
            $data['faq_title'] ?? '',
            $data['faq_items_text'] ?? '',
            $data['faq_contact_title'] ?? '',
            $data['faq_contact_desc'] ?? '',
            $data['faq_contact_btn_text'] ?? '',
            $data['faq_contact_btn_link'] ?? ''
        );

        cmf_clear_cache();
        $this->success('淇濆瓨鎴愬姛!', url('AdminProductCategory/index'));
    }

    public function listOrder()
    {
        parent::listOrders('product_category');
        $this->success('鎺掑簭鏇存柊鎴愬姛!', '');
    }

    public function delete()
    {
        $categoryModel = new ProductCategoryModel();
        $id            = $this->request->param('id');

        $findCategory = $categoryModel->where('id', $id)->find();

        if (empty($findCategory)) {
            $this->error('Category does not exist');
        }

        $categoryPostCount = $categoryModel->getCategoryProductCount($id);

        if ($categoryPostCount > 0) {
            $this->error('This category contains products and cannot be deleted');
        }

        $result = $categoryModel->destroy($id);
        if ($result) {
            $this->deleteCategoryHeroContent($id);
            $this->deleteCategoryFaqContent($id);
            cmf_clear_cache();
            $this->success('鍒犻櫎鎴愬姛!');
        } else {
            $this->error('鍒犻櫎澶辫触');
        }
    }
}





// old
