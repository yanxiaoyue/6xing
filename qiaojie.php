<?php
//桥接模式就是将两个无关的类进行连接，为了降低两个类之间的耦合度
abstract class student {
	abstract function classroom();
}
class openstudent extends student {
	public function classroom() {
		return '公开课1，公开课2，公开课3';
	}
}
class vipstudent extends student {
	public function classroom() {
		return 'vip教室1，vip教室2，vip教室3';
	}
}

abstract class lisen {
	abstract function course($classroom, $course);
}
class class_lisen extends lisen {
	public function course($classroom, $course) {
		return $classroom.'这几个教室在上'.$course;
	}
}

class studentlisen {

	public $classroom;
	public $course;

	public function __construct($classroom, $course) {
		$this->classroom = $classroom;
		$this->course = $course;
	}

	public function privige($course) {
		$classroom = $this->classroom->classroom();
		$result = $this->course->course($classroom, $course);
		return $result;
	}

}
header('content-type:text/html;charset=utf8');

$classroom = new openstudent();
$course = new class_lisen();

$studentlisen = new studentlisen($classroom, $course);
echo $studentlisen->privige('php开发进阶');