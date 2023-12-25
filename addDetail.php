<?php
require_once 'db.php';
$errors = [];
session_start();

if (isset($_POST)) {
    $companyName = trim($_POST['companyName']);
    $sectionType = trim($_POST['sectionType']);
    $noticeDate = date('y-m-d',strtotime(trim($_POST['ndate'])));
    $noticePostDate = date('y-m-d',strtotime(trim($_POST['npdate'])));
   
     $sql = "INSERT INTO `remindertable` (companyName, sectionType, noticeDate, noticePost) VALUES ('{$companyName}','{$sectionType}','{$noticeDate}','{$noticePostDate}')";
    $conn = db_connect();
    if (mysqli_query($conn, $sql)) {
        db_close($conn);
        $message = "data inserted successfully!";
        $_SESSION['status'] = $message;
        header('location:index.php');
    }
    else{
        $message = "Data not inserted...!";
        $_SESSION['status'] = $message;
        header('location:index.php');
    }
}
