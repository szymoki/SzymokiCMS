<?php

/**
 * @Author: Szymon Haczyk
 * @Date:   2020-05-02 21:37:28
 * @Last Modified by:   Szymon Haczyk
 * @Last Modified time: 2020-05-03 14:45:43
 * @email: szymon.haczyk@icloud.com
 */
namespace App\Models;
use CodeIgniter\Model;




class Slider_model extends Model {
    public $table = 'slider';
    protected $returnType = 'object';
    protected $allowedFields = ['image_path', 'text',"btn_text","url","active"];
}
