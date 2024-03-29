<?php

namespace app\home\behavior;

/**
 * 系统行为扩展：
 */
class ViewFilterBehavior {
    protected static $actionName;
    protected static $controllerName;
    protected static $moduleName;
    protected static $method;

    /**
     * 构造方法
     * @param Request $request Request对象
     * @access public
     */
    public function __construct()
    {

    }

    // 行为扩展的执行入口必须是run
    public function run(&$params){
        self::$actionName = request()->action();
        self::$controllerName = request()->controller();
        self::$moduleName = request()->module();
        self::$method = request()->method();
        // file_put_contents ( DATA_PATH."log.txt", date ( "Y-m-d H:i:s" ) . "  " . var_export('admin_CoreProgramBehavior',true) . "\r\n", FILE_APPEND );
        $this->_initialize($params);
    }

    private function _initialize(&$params) {
        $this->thirdcode($params); // 自动加上第三方统计代码

        // 自动追加阅读权限JS事件
        $this->AppEndJsCode($params);
        //自动追加足迹js事件
        $this->AppFootprintJsCode($params);
    }

    /**
     * 给模板加上第三方统计代码
     * @access public
     */
    private function thirdcode(&$params)
    {
        // 排除小程序端，其他场景都显示统计代码和商桥代码
        if (!isWeixinApplets()) {
            $name = 'web_thirdcode_' . (isMobile() ? 'wap' : 'pc'); // PC端与手机端的变量名自适应，可彼此通用
            $web_thirdcode = tpCache('web.'.$name);
            if (!empty($web_thirdcode)) {
                $params = str_ireplace('</body>', htmlspecialchars_decode($web_thirdcode)."\n</body>", $params);
            }
        }
    }
    
    /**
     * 自动追加足迹js事件
     * @access public
     */
    private function AppFootprintJsCode(&$params)
    {
        $aid = request()->param('aid/d');
        if (!empty($aid)) {
            $root_dir = ROOT_DIR;
            $version   = getCmsVersion();
            $JsHtml = <<<EOF
<script type="text/javascript" src="{$root_dir}/public/static/common/js/footprint.js?v={$version}"></script>
<script type="text/javascript">footprint_1606269933('{$aid}', '{$root_dir}');</script>
EOF;
            // 追加替换JS
            $params = str_ireplace('</body>', htmlspecialchars_decode($JsHtml)."\n</body>", $params);
        }
    }

    /**
     * 自动追加阅读权限JS事件
     * @access public
     */
    private function AppEndJsCode(&$params)
    {
        $aid = request()->param('aid/d');
        $admin_id = request()->param('admin_id/d');
        $ca = self::$controllerName.'@'.self::$actionName;
        $is_appendJs = false;
        $data['ClosePage'] = 0;
        if (!empty($aid) && ('View@index' == $ca || 'view' == self::$actionName)) {
            if (!empty($admin_id)) {
                $data['ClosePage'] = 1;
            }
            $is_appendJs = true;
        } else if ('Buildhtml@uphtml' == $ca && 'view' == request()->param('type')) {
            $is_appendJs = true;
        } else if ('Buildhtml@buildarticle' == $ca) {
            $is_appendJs = true;
        }

        if (true === $is_appendJs) {
            // 加载JS需要的参数
            $channel = \think\Db::name('archives')->where(['aid'=>$aid])->getField('channel');
            $data['get_url'] = ROOT_DIR . "/index.php?m=api&c=Ajax&a=get_arcrank&aid={$aid}";
            $data['buy_url'] = ROOT_DIR . "/index.php?m=user&c=Media&a=media_order_buy&_ajax=1";
            $data['VideoLogicUrl'] = ROOT_DIR . "/index.php?m=api&c=Ajax&a=video_logic&_ajax=1";
            $data['LevelCentreUrl'] = ROOT_DIR . "/index.php?m=user&c=Level&a=level_centre";
            $data['aid'] = $aid;
            $data_json = json_encode($data);
            $version   = getCmsVersion();
            $root_dir = ROOT_DIR;
            $JsHtml = <<<EOF
<script type="text/javascript">var ey_1564127251 = {$data_json};</script>
<script type="text/javascript" src="{$root_dir}/public/static/common/js/view_arcrank.js?v={$version}"></script>
EOF;
            if (5 == $channel) { // 只针对视频模型
                $JsHtml .= '<script type="text/javascript">ey_1592981821();</script>';
            }
            // 追加替换JS
            $params = str_ireplace('</head>', htmlspecialchars_decode($JsHtml)."\n</head>", $params);
        }
    }
}
