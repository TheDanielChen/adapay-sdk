<?php
namespace Cstopery\AdaPaySdk;
use Cstopery\AdaPay;


class Wallet extends AdaPay
{

    public $refundOrder = NULL;
    public $refundOrderQuery = NULL;
    public $endpoint = "/v1/walletLogin";
    public $endpointPay = "/v1/account/payment";

    public function __construct()
    {
        self::$gateWayType = "page";
        parent::__construct();
    }

    public function walletLogin($params=array()){
        $request_params = $params;
        $request_params = $this->do_empty_data($request_params);
        $req_url =  self::$gateWayUrl .$this->endpoint;
        $header =  $this->get_request_header($req_url, $request_params, self::$header);
        $this->result = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json=true);
    }

    public function accountPayment($params=array()){
        $request_params = $params;
        $request_params = $this->do_empty_data($request_params);
        $req_url =  self::$gateWayUrl .$this->endpointPay;
        $header =  $this->get_request_header($req_url, $request_params, self::$header);
        $this->result = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json=true);
    }
}