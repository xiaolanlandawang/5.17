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
namespace app\portal\validate;

use app\admin\model\RouteModel;
use think\Validate;

class InquiryValidate extends Validate
{
    protected $rule = [
        'name' => 'require',
        'email' => 'require|email',
        'content' => 'require',
        'type' => 'require|in:1,2,3',
        'product_id' => 'requireIf:type,1',
    ];
    protected $message = [
        'name.require' => 'Please Enter Your Name',
        'email.require' => 'Please Enter Your Email',
        'content.require' => 'Please Enter Your Message',
        'email.email' => 'Email Is Invalid',
        'lifting_capacity.requireIf' => 'Please Select Lifting Capacity',
        'lifting_height.requireIf' => 'Please Select Lifting Height',
        'span.requireIf' => 'Please Select Span',
        'operating_voltage.requireIf' => 'Please Select Voltage',
        'operating_herts.requireIf' => 'Please Select Herts',
        'job_level.requireIf' => 'Please Select Job Level',
        'sling_available.requireIf' => 'Please Select Sling Available',
    ];

}