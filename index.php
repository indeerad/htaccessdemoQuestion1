<?php
    $requestedURL = $_SERVER['REQUEST_URI'];           // '/htaccessdemo/employee/display'
    $urlParts = explode("/",$requestedURL);    // an array will be created saperated by '/'

    //var_dump(sizeof($urlParts));   // length of $urlParts '4'

    if(sizeof($urlParts)>=3){
        $fileName = $urlParts[2];    // 'employee'
    }

    if (sizeof($urlParts)>=4){
        $methodName = $urlParts[3];  // 'display'
    }

    switch ($fileName){

        case "employee" :   require './employee.php';
                            switch ($methodName){
                                case "display" : display(); break;
                                case "finish"  : finish();
                            }
                            break;

        case "project" :   require './project.php';
                            switch ($methodName){
                                case "display" : display(); break;
                                case "finish"  : finish();
                            }
                            break;

    }

?>
