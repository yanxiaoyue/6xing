<?php //观察者模式  根据不同的等级去处理事情  如果处理不了就交给上级处理  例如请假和申请报销单
abstract class services {
	abstract public function ask($ask);
}

class functions extends services {
	public function ask( $ask ) {
		if ($ask == '报名') {
			echo 'weiwei teacher<br />';
		} else {
			echo 'qita ask<br />';
		}
	}
}

$aa = new functions();
$aa->ask('报名');
$aa->ask('缴费');