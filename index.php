<?php
    $requestedURL = $_SERVER['REQUEST_URI'];           // '/htaccessdemo/api/employees/5   or /htaccessdemo/api/employees'
    $urlParts = explode("?",$requestedURL);    // seperating url as directory and query string by '?'

    $resourceLocation =$urlParts[0] ;

    $resourceLocation = explode("/",$resourceLocation);


    if (sizeof($resourceLocation)>=3){

        if ($resourceLocation['2']=='api'){

            if(sizeof($resourceLocation)>=4){
                $controllerName = $resourceLocation[3];
            }

            $pathVariableName = "";
            if(sizeof($resourceLocation)>=5){
                $pathVariableName = $resourceLocation[4];
            }

            switch ($controllerName){

                case "employees" :      require './controller/employee.php';
                                        if ($pathVariableName==""){
                                                find();
                                        }else{
                                                findOne($pathVariableName);
                                        }

                                        break;

                case "projects" :       require './controller/project.php';

                                        if ($pathVariableName==""){
                                                find();
                                        }else{
                                                findOne($pathVariableName);
                                        }

                                        break;
            }


        }
    }





?>
