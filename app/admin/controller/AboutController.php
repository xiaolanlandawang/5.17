<?php

namespace app\admin\controller;

use app\portal\model\PortalPostModel;
use cmf\controller\AdminBaseController;

/**
 * 关于我们
 * **/

class AboutController extends AdminBaseController
{
    public function site()
    {
        $site_info = cmf_get_option('about_site');
        $this->assign("site_info", $site_info);
        return $this->fetch();
    }

    public function sitePost()
    {
        if (!$this->request->isPost()) {
            $this->error('请求错误');
        }
        $data = $this->request->post();
        $site_info = $this->request->post('about');
        if (!empty($data['market_name']) && !empty($data['market_num'])) {
            foreach ($data['market_name'] as $key => $value) {
                if (empty($data['market_num'][$key])){
                    $this->error('请输入描述');
                }
                $site_info['market'][] = ['market_name'=>$value, 'market_num'=>$data['market_num'][$key]];
            }
        }
        if (!empty($data['advantage_name']) && !empty($data['advantage_num'])) {
            foreach ($data['advantage_name'] as $key => $value) {
                if (empty($data['advantage_num'][$key])){
                    $this->error('请输入优势');
                }
                $site_info['advantage'][] = ['advantage_name'=>$value, 'advantage_num'=>$data['advantage_num'][$key]];
            }
        }
        if (!empty($data['photo_urls']) && !empty($data['photo_names'])) {
            $site_info['corporate_images'] = [];
            foreach ($data['photo_urls'] as $key => $url) {
                $photoUrl = cmf_asset_relative_url($url);
                $site_info['corporate_images'][] = ["url" => $photoUrl, "name" => $data['photo_names'][$key]];
            }
        }

        if (!empty($data['cert_urls']) && !empty($data['cert_names'])) {
            $site_info['cert'] = [];
            foreach ($data['cert_urls'] as $key => $url) {
                $photoUrl = cmf_asset_relative_url($url);
                $site_info['cert'][] = ["url" => $photoUrl, "name" => $data['cert_names'][$key]];
            }
        }

        if (!empty($data['create_name']) && !empty($data['create_desc']) && !empty($data['create_image'])) {
            foreach ($data['create_name'] as $key => $value) {
                if (empty($data['advantage_num'][$key])){
                    $this->error('请输入优势');
                }
                $site_info['create'][] = ['create_name'=>$value, 'create_desc'=>$data['create_desc'][$key], 'create_image'=>$data['create_image'][$key]];
            }
        }

        cmf_set_option('about_site', $site_info);

        $this->success('保存成功');

    }


}