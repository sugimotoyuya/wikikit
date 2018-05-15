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

$sql = "insert into user values(Null,:userid,:userpass,Now());";

$stmt = $obj_pdo->prepare($sql);

$stmt->bindValue(':userid',$_POST['userid']);
$stmt->bindValue(':userpass',$_POST['userpass']);

$flg = $stmt->execute();

if(!$flg){
    echo "error";
}else{
    $_SESSION['userinfo']['userid'] = $_POST['userid'];
    $_SESSION['userinfo']['userpass'] = $_POST['userpass'];
    echo "success";
}