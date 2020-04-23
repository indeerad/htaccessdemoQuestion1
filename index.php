<?php
    $requestedURL = $_SERVER['REQUEST_URI'];           // '/htaccessdemo/employee/display'
    $urlParts = explode("?",$requestedURL);    // seperating url as directory and query string by '?'

    $directory =$urlParts[0] ;    // getting url path

    $directory = explode("/",$directory);  //seperating url with '/' to get individual directorys

    //var_dump($urlParts);   // length of $urlParts '4'

    if(sizeof($directory)>=3){
        $fileName = $directory[2];    // 'employee'
    }

    $methodName="";
    if (sizeof($directory)>=4){
        $methodName = $directory[3];  // 'display'
    }

    $message = "";
    if (isset($_GET['message'])){
        $message = $_GET['message'];
    }

    switch ($fileName){

        case "employee" :   require './controller/employee.php';
                            switch ($methodName){
                                case "display" : display($message); break;
                                case "finish"  : finish($message);
                            }
                            break;

        case "project" :   require './controller/project.php';
                            switch ($methodName){
                                case "display" : display($message); break;
                                case "finish"  : finish($message);
                            }
                            break;

    }

?>
