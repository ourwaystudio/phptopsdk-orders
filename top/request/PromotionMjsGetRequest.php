<?php
/**
 * TOP API: taobao.promotion.mjs.get request
 * 
 * @author auto create
 * @since 1.0, 2013.09.09
 */
class PromotionMjsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.promotion.mjs.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
