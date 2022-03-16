
<?php
session_start();
define('BURL','http://localhost/only_train/');
    function url($url=''){
        echo BURL.$url;
    }