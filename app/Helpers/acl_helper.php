<?php

/**
 * @Author: Szymon Haczyk
 * @Date:   2020-05-02 21:37:28
 * @Last Modified by:   Szymon Haczyk
 * @Last Modified time: 2020-05-03 14:46:46
 * @email: szymon.haczyk@icloud.com
 */
function acl($name = NULL) {
	$session = \Config\Services::session();
    $ses = $session->get("logged_in");
    $acl_model = new \App\Models\Acl_model();

    if ($ses["level"] == 0)
        return true;
    if (!isset($name))
        $str = str_replace("/", "-", substr($this->CI->uri->ruri_string(), 1));
    else
        $str = $name;

    
        $str = str_replace(" ", '', $str); //wywalanie spacji wrazie cos;
//jesli jest dostęp zwraca true jak nie ma to false
        $acl_base= $acl_model->where("user_id",$ses["id"])->where("acl_name",$name)->findAll();
        if (count($acl_base)>0)
            return true;
        else
           return false;
   }


   function is_logged(){
   		$session = \Config\Services::session();
   		if (!$session->userdata('logged_in')) 
            return false;
        else 
        	return true;
        
   }
   function acl_user($name = NULL,$user) {


    $acl_model = new \App\Models\Acl_model();
        $str = str_replace(" ", '', $str); //wywalanie spacji wrazie cos;
//jesli jest dostęp zwraca true jak nie ma to false
        $acl_base=$acl_model->where("user_id",$user)->where("acl_name",$name)->findAll();
        if (count($acl_base)!=0)
            return true;
        
        else
           return false;
   }

       function get_user_name($id){
        $user_model = new \App\Models\User_model();
        $u = $user_model->find($id);
        return $u->name;
    }