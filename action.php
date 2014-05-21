<?php
move_uploaded_file($_FILES['img']['tmp_name'],'123.jpg');
$error = '';
$msg = '';
$msg .= " File Name: " . $_FILES['img']['name'] . ", ";
$msg .= " File Size: " . @filesize($_FILES['img']['tmp_name']);
echo "{";
echo				"error: '" . $error . "',\n";
echo				"msg: '" . $msg . "'\n";
echo "}";