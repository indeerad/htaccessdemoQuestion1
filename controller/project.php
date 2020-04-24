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
    $stmt = $conn->prepare("select * from project");
    $stmt->execute();
    $result = $stmt->get_result();


    $projects=[];
    while ($p = $result->fetch_assoc()){
        array_push($projects,$p);
    }
    $stmt->close();
    $conn->close();
    header('Content-Type: application/json');
    echo json_encode($projects);

}

function findOne($id){
    global $conn;
    $stmt = $conn->prepare("select * from project where id=?");
    $stmt->bind_param('s',$id);
    $stmt->execute();
    $result = $stmt->get_result();

    $project = $result->fetch_assoc();

    $stmt->close();
    $conn->close();

    header('Content-Type: application/json');
    echo json_encode($project);
}

?>
