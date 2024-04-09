<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	
	public function index()
	{

		$UrlApi = 'link api';
        
        $OptionsApi = [
            'http' => [
                'header' => "Content-Type: application/json\r\n",
                'method' => 'GET',
            ],
        ];

        $ContextApi = stream_context_create($OptionsApi);
        $ResponseApi = file_get_contents($UrlApi, false, $ContextApi);

        if ($ResponseApi === FALSE) {
            die('Error occurred while fetching API data');
        }


        $Result = json_decode($ResponseApi, true);

        /*
        
         * can check api result 
         * echo '<pre>';
         * print_r($Result);
         * echo '</pre>';
         * exit();
        
        */


		$data = array('ListData' => $Result);

		$this->load->view('index', $data);


	}


}
