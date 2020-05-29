<?php

/**
 * @Author: Szymon Haczyk
 * @Date:   2020-05-02 21:37:28
 * @Last Modified by:   szymon
 * @Last Modified time: 2020-05-21 14:49:59
 * @email: szymon.haczyk@icloud.com
 */
namespace App\Models;
use CodeIgniter\Model;



class Gallery_model extends Model {
    public $table = 'gallery';
    protected $returnType = 'object';
    protected $allowedFields = ['title', 'text',"folder","published","added_by","added_date","edited_date","pozycja"];
}
