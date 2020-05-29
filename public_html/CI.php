<?php

/**
 * @Author: Szymon Haczyk
 * @Date:   2020-05-02 21:37:28
 * @Last Modified by:   Szymon Haczyk
 * @Last Modified time: 2020-05-03 14:52:20
 * @email: szymon.haczyk@icloud.com
 */
ob_start();
define('REQUEST', 'external');
require_once "/home/loken/domains/loken.pl/public_html/index.php"; //or wherever the directory is relative to your path
ob_end_clean();
//echo "Dds";
 $session = \Config\Services::session();
    if($session->get('logged_in'))
   		return true; else return false;
