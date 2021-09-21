<?php
/*
 * Max Base
 * https://github.com/BaseMax/PHP-Ippanel-SMS
 * 21 Sep 2021, 22 Sep 2021
 */

class SmsIppanel {
	private $key_id = '';
	private $pattern_id = '';
	private $number = '';

	// private $url = "https://ippanel.com/services.jspd";
	private $url = "http://ippanel.com:8080";

	public function setKey($key) {
		$this->key_id = $key;
	}

	public function setPattern($pattern) {
		$this->pattern_id = $pattern;
	}

	public function setNumber($number) {
		$this->number = $number;
	}

	public function sendPattern($to, $code) {
		$_params = [
			'apikey'=>$this->key_id,
			'pid'=>$this->pattern_id,

			'fnum'=>$this->number,
			'tnum'=>$to,

			'p1'=>'verification-code',
			'v1'=>$code,
		];
		// print_r($_params);

		$params = '';
		foreach($_params as $key=>$value) {
			$params .= $key."=".$value."&"; 
		}
		$params = rtrim($params, "&");

		// print $this->url."\n";
		// print $params."\n";

		// print $this->url . '?' . $params . "\n";

		$handler = curl_init($this->url . '?' . $params);

		// $handler = curl_init($this->url);
		// curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "GET");
		// curl_setopt($handler, CURLOPT_POSTFIELDS, $params);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($handler);

		return $response;
	}
}
