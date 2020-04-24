<?php
    $host = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "simplerouter";

    $conn = new mysqli($host,$username,$password,$dbname);

    if ($conn->connect_error){
        die("Could not Connect to the Database");
    }

    function find(){
        global $conn;
        $stmt = $conn->prepare("select * from employee");
        $stmt->execute();
        $result = $stmt->get_result();


        $employees=[];
        while ($employee = $result->fetch_assoc()){
            array_push($employees,$employee);
        }
        $stmt->close();
        $conn->close();
        header('Content-Type: application/json');
        echo json_encode($employees);

    }

    function findOne($id){
        global $conn;
        $stmt = $conn->prepare("select * from employee where id=?");
        $stmt->bind_param('s',$id);
        $stmt->execute();
        $result = $stmt->get_result();

        $employee = $result->fetch_assoc();

        $stmt->close();
        $conn->close();

        header('Content-Type: application/json');
        echo json_encode($employee);
    }

    ?>
