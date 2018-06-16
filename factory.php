<?php
interface db {
	public function getConnect();
}

class pjsql implements db {
	public function getConnect() {
		echo 'pjsql数据库';
	}
}

class mysql implements db {
	public function getConnect() {
		echo 'pjsql数据库';
	}
}

class connect {
	static $type = null;
	public function __construct($type) {
		self::$type = new $type;
		return self::$type;
	}
}


$mysql = new connect('mysql');
var_dump($mysql);
