<?php
namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use app\portal\model\ProductModel;
use app\portal\model\PortalPostModel;
use think\Db;
use think\facade\Cache;

class SitemapController extends HomeBaseController
{
    private $domain = 'https://weihuahenancrane.com';


    public function index()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
        $xml .= '   <sitemap><loc>' . $this->domain . '/sitemap-pages.xml</loc></sitemap>' . PHP_EOL;
        $xml .= '   <sitemap><loc>' . $this->domain . '/sitemap-products.xml</loc></sitemap>' . PHP_EOL;
        $xml .= '   <sitemap><loc>' . $this->domain . '/sitemap-cases.xml</loc></sitemap>' . PHP_EOL;
        $xml .= '   <sitemap><loc>' . $this->domain . '/sitemap-news.xml</loc></sitemap>' . PHP_EOL;
        $xml .= '</sitemapindex>';
        
        return response($xml)->contentType('text/xml');
    }

    public function pages()
    {
        $pages = ['/', '/about-us', '/products', '/cases', '/service', '/news', '/contact-us'];
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
        foreach ($pages as $page) {
            $xml .= '   <url>' . PHP_EOL;
            $xml .= '      <loc>' . $this->domain . $page . '</loc>' . PHP_EOL;
            $xml .= '      <lastmod>' . date('Y-m-d') . '</lastmod>' . PHP_EOL;
            $xml .= '   </url>' . PHP_EOL;
        }
        $xml .= '</urlset>';
        
        return response($xml)->contentType('text/xml');
    }

    public function products()
    {
        $xml = Cache::get('sitemap_products');
        if (!$xml) {
            $productModel = new ProductModel();
            $list = $productModel->field('id, alias, update_time, create_time')
                ->whereRaw('delete_time IS NULL OR delete_time = 0')
                ->where('alias', '<>', '')
                ->select();

            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
            foreach ($list as $item) {
                $slug = !empty($item['alias']) ? str_replace(' ', '%20', $item['alias']) : $item['id'];
                $url = rtrim($this->domain, '/') . '/' . $slug . '.html';
                $lastmod = !empty($item['update_time']) ? date('Y-m-d', $item['update_time']) : (!empty($item['create_time']) ? date('Y-m-d', $item['create_time']) : date('Y-m-d'));
                $xml .= '   <url>' . PHP_EOL;
                $xml .= '      <loc>' . $url . '</loc>' . PHP_EOL;
                $xml .= '      <lastmod>' . $lastmod . '</lastmod>' . PHP_EOL;
                $xml .= '   </url>' . PHP_EOL;
            }
            $xml .= '</urlset>';
            Cache::set('sitemap_products', $xml, 3600);
        }
        
        return response($xml)->contentType('text/xml');
    }

    public function news()
    {
        return $this->generatePostSitemap('sitemap_news', 8, 'news', 'news_info');
    }

    public function cases()
    {
        return $this->generatePostSitemap('sitemap_cases', 3, 'cases', 'industries_info');
    }

    private function generatePostSitemap($cacheKey, $postType, $routePrefix, $action)
    {
        $xml = Cache::get($cacheKey);
        if (!$xml) {
            $postModel = new PortalPostModel();
            // 注意：因为我们在 initialize 增加了 post_alias 字段，这里直接查询
            $list = $postModel->field('id, post_title, post_alias, update_time, create_time')
                ->where('post_type', $postType)
                ->whereRaw('delete_time IS NULL OR delete_time = 0')
                ->select();

            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
            foreach ($list as $item) {
                if (!empty($item['post_alias'])) {
                    $slug = str_replace(' ', '%20', $item['post_alias']);
                } else {
                    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['post_title']), '-'));
                }
                $url = rtrim($this->domain, '/') . '/' . $slug . '.html';
                $lastmod = !empty($item['update_time']) ? date('Y-m-d', $item['update_time']) : (!empty($item['create_time']) ? date('Y-m-d', $item['create_time']) : date('Y-m-d'));
                $xml .= '   <url>' . PHP_EOL;
                $xml .= '      <loc>' . $url . '</loc>' . PHP_EOL;
                $xml .= '      <lastmod>' . $lastmod . '</lastmod>' . PHP_EOL;
                $xml .= '   </url>' . PHP_EOL;
            }
            $xml .= '</urlset>';
            Cache::set($cacheKey, $xml, 3600);
        }
        
        return response($xml)->contentType('text/xml');
    }
}
