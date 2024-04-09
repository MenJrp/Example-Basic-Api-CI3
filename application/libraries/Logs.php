<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs {
    
    public function logsys($event, $path) {

        $CI =& get_instance();

		$url 		= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
		
		$use 		= $_SERVER['HTTP_USER_AGENT'];
		$ip 		= $_SERVER['REMOTE_ADDR'];
		$dt         = date('Y-m-d H:i:s');

		$data = array(
					'ip' 		=> $ip,
					'event' 	=> $event,
					'url' 		=> $url,
					'path'		=> $path,
					'datetime'	=> $dt,
					'use' 		=> $use,
				);
        $CI->db->insert('rumruy_logs', $data);
 
	}

}