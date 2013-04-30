<?php namespace Extensions\Carved;

class Api {
	
	private $etsyUrl = 'http://openapi.etsy.com/v2/';
	private $etsyKey = 'hjao320aubzc48zs4d8vfxjg';
	private $etsySecret = 'bz7iody0k3';
	
	public function getData($url){
		$curl = curl_init($this->etsyUrl . $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
		$response = curl_exec($curl);
		
		$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		
		if (intval($status) != 200) die('Error: ' . $response);
		
		$response = json_decode($response, true);
		print_r($response);
	}
	
	public function getEtsyOAuth(){
		return $this->getData('oauth/request_token?scope=transactions_r');
	}
	
}
