<?php 
//装饰模式   
//两个抽象类：一个基本抽象类，一个扩展基本的抽象类  
//两个普通类：一个继承基本（或扩展）抽象类作为基类，一个继承基类
//（通过实例化第二个普通类传递基类对象可以使用其功能又能扩展自己的功能）
abstract class Fcompoonent {
	public $username;
	abstract function operator();
}

class Bcompoonent extends Fcompoonent {
	public function operator() {
		return '为什么我很漂亮';
	}
	//其它的功能
}

class BaseFunction extends Bcompoonent {
	public function __construct() {
		$this->username = '第一个类';
	}
	public function operator() {
		return '实现基本功能';
	}
}

class ExtendFunction extends BaseFunction {
	public $_obj;
	public function __construct($_obj){
		$this->username = '第二个类';
		if ($_obj instanceof Fcompoonent) {
			$this->_obj = $_obj;
		}
	}
	public function operator() {
		$result = $this->_obj->operator();
		return $result.'还有额外的功能';
	}
}

class ExtraFunction extends BaseFunction {
	public $_obj;
	public function __construct( $_obj ){
		$this->username = '第三个类';
	}
}
header('content-type:text/html;charset=utf-8');
$obj = new BaseFunction();
$obj1 = new ExtendFunction($obj);
echo $obj1->operator();