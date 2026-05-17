<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2019 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 小夏 < 449134904@qq.com>
// +----------------------------------------------------------------------
namespace app\portal\model;

use app\admin\model\RouteModel;
use think\Model;

/**
 * @property mixed id
 */
class ProductModel extends Model
{
    /**
     * 模型名称
     * @var string
     */
    protected $name = 'product';

    // 开启严格模式
    protected $strict = true;

    protected $type = [
        'photos' => 'array',
        'authentication_mark' => 'array',
        'file' => 'array',
        'certificate' => 'array',
        'parameter' => 'array',
        'custom_content' => 'array',
        'custom_field' => 'json',
    ];

    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = true;

    // 关联产品分类表
    public function category()
    {
        return $this->belongsTo('ProductCategoryModel', 'category_id')->field('id,name');
    }


    // 关联产品行业标签表
    public function profession()
    {
        return $this->belongsToMany('ProfessionModel', 'product_profession', 'tag_id', 'product_id')->where('status', 1)->field('id,name');
    }


    public function getOverviewAttr($value)
    {
        if (empty($value)) {
            return '';
        }
        return cmf_replace_content_file_url(htmlspecialchars_decode($value));
    }

    public function setOverviewAttr($value)
    {
        if (empty($value)) {
            return '';
        }
        return htmlspecialchars(cmf_replace_content_file_url(htmlspecialchars_decode($value), true));
    }

    public function getScenarioAttr($value)
    {
        if (empty($value)) {
            return '';
        }
        return cmf_replace_content_file_url(htmlspecialchars_decode($value));
    }

    public function setScenarioAttr($value)
    {
        if (empty($value)) {
            return '';
        }
        return htmlspecialchars(cmf_replace_content_file_url(htmlspecialchars_decode($value), true));
    }


    public function getFeaturesAttr($value)
    {
        if (empty($value)) {
            return '';
        }
        return cmf_replace_content_file_url(htmlspecialchars_decode($value));
    }

    public function setFeaturesAttr($value)
    {
        if (empty($value)) {
            return '';
        }
        return htmlspecialchars(cmf_replace_content_file_url(htmlspecialchars_decode($value), true));
    }

    public function getCustomizedAttr($value)
    {
        if (empty($value)) {
            return '';
        }
        return cmf_replace_content_file_url(htmlspecialchars_decode($value));
    }


    public function setCustomizedAttr($value)
    {
        if (empty($value)) {
            return '';
        }
        return htmlspecialchars(cmf_replace_content_file_url(htmlspecialchars_decode($value), true));
    }


    public function getCustomContentAttr($value)
    {
        if (empty($value)) {
            return [];
        }
        if(is_string($value)){
            $value = json_decode($value,true);
        }
        foreach($value as $k => $v){
            $param_content_name = '';
            $param_content_val = '';
            if(!empty($v['param_content_name'])){
                $param_content_name = $v['param_content_name'];
            }
            if(!empty($v['param_content_val'])){
                $param_content_val = cmf_replace_content_file_url(htmlspecialchars_decode($v['param_content_val']));
            }
            $value[$k] = ['param_content_name' => $param_content_name,'param_content_val' => $param_content_val];
        }
        return $value;
    }

}
