<?php  //观察者模式用于相同的代码 不同的展现样式  这里是不通的对象相同的发送消息
interface payafter {
	public function send();
}

class sendmessage implements payafter {
	public function send() {
		echo 'send message <br />';
	}
}

class message {
	protected $_sd = []; //储存对象
	public function register($message) {  //注册
		$this->_sd[] = $message;
	}
	public function messageSend() {       //执行
		if (!empty($this->_sd)) {
			foreach ($this->_sd as $value) {
				$value->send();
			}
		}
	}
}

$pay = new message();
$pay->register(new sendmessage());  //注册
$pay->register(new sendmessage());  //注册
$pay->register(new sendmessage());  //注册
$pay->register(new sendmessage());  //注册
$pay->register(new sendmessage());  //注册
$pay->messageSend();               //执行