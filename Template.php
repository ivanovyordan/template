<?php
class Template {
	protected $_data = array();
	protected $_baseViewPath = '';

	public function __construct($baseViewPath) {
		$this->_baseViewPath = $baseViewPath;
	}

	public function fetch($templatePath) {
		ob_start();
		include $this->_baseViewPath . $templatePath;

		return ob_get_clean();
	}

	public function display($templatePath) {
		print $this->fetch($templatePath);
	}

	public function __get($key) {
		if(!isset($this->_data[$key])) {
			throw new Exception("Invalid property `{$key}` accessed in ");
		}

		return $this->_data[$key];
	}

	public function __set($key, $value) {
		$this->_data[$key] = $value;
	}

	public function __isset($key) {
		return isset($this->_data[$key]);
	}

	public function __unset($key) {
		unset($this->_data[$key]);
	}
}
