<?php

/**
 * @Author: Szymon Haczyk
 * @Date:   2020-05-02 21:37:28
 * @Last Modified by:   Szymon Haczyk
 * @Last Modified time: 2020-05-03 14:45:40
 * @email: szymon.haczyk@icloud.com
 */
namespace App\Models;
use CodeIgniter\Model;




class Zmienne_model extends Model {
	public $table = 'zmienne';
	protected $primaryKey = 'name';
	protected $returnType = 'object';
	 protected $allowedFields = ['name', 'value'];
	function zmienna($name){

		$z=$this->find($name);
	//	print_r($z);
		if($z)
			return $z->value;
		else return false;
	}

function zmienna_set($name,$value){

		$this->update($name,array("value"=>$value));
	}

	function getAll(){
		$z=$this->findAll();
		$dane=array();
		foreach($z as $item){
			$dane[$item->name]=$item->value;
		}
		//print_r($dane);
		return(object)$dane;
	}
}
