<?php

/**
 * @Author: Szymon Haczyk
 * @Date:   2020-05-02 21:37:28
 * @Last Modified by:   Szymon Haczyk
 * @Last Modified time: 2020-05-03 14:45:53
 * @email: szymon.haczyk@icloud.com
 */
namespace App\Models;
use CodeIgniter\Model;



class News_model extends MY_Model {
    public $table = 'news';
    protected $returnType = 'object';
    protected $allowedFields = ['title', 'text', 'published', 'mainphoto', 'super', 'mainpage', 'category', 'create_by', 'create_date', 'edited_by', 'edited_date'];


    
}
