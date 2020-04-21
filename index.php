<?php
    $requestedURL = $_SERVER['REQUEST_URI'];           // '/htaccessdemo/employe'
    $urlParts = explode("/",$requestedURL);    // an array will be created saperated by '/'
    $url = $urlParts[2];                            // 'employee'

    if($url=='employee'){
        require './employee.html';
    }
    if($url=='project'){
        require './project.html';
    }
?>
