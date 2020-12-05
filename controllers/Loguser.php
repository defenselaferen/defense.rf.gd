<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
    	$test_HTTP_proxy_headers = array(
    		'REMOTE_ADDR',
			'HTTP_VIA',
			'VIA',
			'Proxy-Connection',
			'HTTP_X_FORWARDED_FOR',  
			'HTTP_FORWARDED_FOR',
			'HTTP_X_FORWARDED',
			'HTTP_FORWARDED',
			'HTTP_CLIENT_IP',
			'HTTP_FORWARDED_FOR_IP',
			'X-PROXY-ID',
			'MT-PROXY-ID',
			'X-TINYPROXY',
			'X_FORWARDED_FOR',
			'FORWARDED_FOR',
			'X_FORWARDED',
			'FORWARDED',
			'CLIENT-IP',
			'CLIENT_IP',
			'PROXY-AGENT',
			'HTTP_X_CLUSTER_CLIENT_IP',
			'FORWARDED_FOR_IP',
			'HTTP_PROXY_CONNECTION');
    	$data = [];
    	try {
    		foreach($test_HTTP_proxy_headers as $header){
    			$data[$header] = $_SERVER[$header];
				if (isset($_SERVER[$header]) && !empty($_SERVER[$header])) {
					echo false;
				}
			}
    	} catch(Exception $e) {
    		echo false;
    	}
    }
}

// 201987wfghPhudsaifhowe5344860JDGFOWUEGFO@G#*$&
// KagunaMeSan08347