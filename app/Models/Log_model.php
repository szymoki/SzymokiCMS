<?php

/**
 * @Author: Szymon Haczyk
 * @Date:   2020-05-02 21:37:28
 * @Last Modified by:   Szymon Haczyk
 * @Last Modified time: 2020-05-06 15:50:57
 * @email: szymon.haczyk@icloud.com
 */
namespace App\Models;
use CodeIgniter\Model;



class Log_model extends Model {
 	public $table = 'logs';
    protected $returnType = 'object';
    protected $allowedFields = ['user_id', 'id',"log","date","type"];

    
}
