<?php
include_once "db.php";

dd($_POST);
$date = [];
$date['text'] = $_POST['subject'];
$date['subject_id'] = 0;
$date['count'] = 0;
$date['sh'] = 1;

$Que->save($date);

foreach ($_POST['opt'] as $opt);
$date = [];
$subject_id=$Que->find(['text'=>$_POST['subject']])['id'];
$date['text'] = $opt;
$date['subject_id'] = $subject_id;
$date['count'] = 0;
$date['sh'] = 1;
$Que->save($date);

header("location:admin.php");