<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	
    	//打印简单调用栈
    	//debug_print_backtrace();
    	
    	//打印详细调用栈
    	//print_r(debug_backtrace());
    	
    	//打印include文件
    	$arrIncludedFiles = get_included_files();
    	
    	//var_dump($arrIncludedFiles);
    	
    	//输出到文件
    	//var_export — 输出或返回一个变量的字符串表示
    	//var_dump(file_put_contents('log.log',var_export($arrIncludedFiles,true),FILE_APPEND));
    	$a = var_export($arrIncludedFiles);
    	var_dump($a);
    	
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
}