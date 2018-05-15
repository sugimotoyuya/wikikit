<?php
include "DataBase.php";
session_start();

if (!isset($_POST['userid'])){
    echo "error";
    exit;
}

if (!isset($_POST['userpass'])){
    echo "error";
    exit;
}

$class_pdo = new DataBase();
$obj_pdo = $class_pdo->getPdo();

$sql = "select * from user where userid Like :userid and userpass like :userpass";

$stmt = $obj_pdo->prepare($sql);

$stmt->bindValue(':userid',$_POST['userid']);
$stmt->bindValue(':userpass',$_POST['userpass']);

$stmt->execute();

$cnt = 0;
while($row = $stmt->fetch()){

    if ($row['userpass'] === $_POST['userpass']){
        $_SESSION['userinfo']['userid'] = $_POST['userid'];
        $_SESSION['userinfo']['userpass'] = $_POST['userpass'];
        $_SESSION['userinfo']['handlename'] = $row['handlename'];
    }else{
        $cnt = 0;
        break;
    }
    
    $cnt++;
}

if ($cnt === 0){
    echo "error";
}else{
    echo "success";
}