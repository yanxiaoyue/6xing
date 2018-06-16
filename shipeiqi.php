<?php
//适配器模式作用统一封装接口
interface biaozhun {
	public function config();
	//public function create();
}

class wepay {
	public function config() {
		return '这是微信支付';
	}
}
class alipay {
	public function config() {
		return '这是支付宝支付';
	}
}

class pay implements biaozhun {
	public $obj;
	public function __construct($_obj) {
		$this->obj = $_obj;
	}
	public function config() {
		echo $this->obj->config();
	}
}
header('content-type:text/html;charset=utf8');

$weixin = new wepay();
$aa = new pay($weixin);
$aa->config();