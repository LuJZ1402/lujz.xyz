<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

namespace think\template\taglib\eyou;

class TagDiyurl extends Base
{
    protected function _initialize()
    {
        parent::_initialize();
    }

    public function getDiyurl($type = 'tags', $link = '', $vars = '', $suffix = '', $domain = '', $seo_pseudo = '', $seo_pseudo_format = '', $seo_inlet = '')
    {
        $suffix = !empty($suffix) ? $suffix : true;
        $domain = !empty($domain) ? $domain : false;
        $seo_pseudo = !empty($seo_pseudo) ? $seo_pseudo : null;
        $seo_pseudo_format = !empty($seo_pseudo_format) ? $seo_pseudo_format : null;
        $seo_inlet = !empty($seo_inlet) ? $seo_inlet : null;

        $parseStr = "";
        
        switch ($type){
            case "tags":     // 标签主页
                $parseStr = url('home/Tags/index');
                break;
            case "login":     // 登录
                $parseStr = url('user/Users/login');
                break;
            case "reg":     // 注册
                $parseStr = url('user/Users/reg');
                break;
            case "mobile":     // 发送手机短信方法
            case "Mobile":     // 发送手机短信方法
                $parseStr = url('api/Ajax/SendMobileCode');
                break;
            case "sindex":     // 搜索主页
                $parseStr = url('home/Search/index');
                break;
            default:
                {
                    if (stristr($link, '/')) {
                        $parseStr = url($link, $vars, $suffix, $domain, $seo_pseudo, $seo_pseudo_format, $seo_inlet);
                    } else {
                        $parseStr = "";
                    }
                }
                break;
        }

        return $parseStr;
    }
}