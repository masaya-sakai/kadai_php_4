<?php
// session変数を定義して値を入れよう
session_start();

$_SESSION['keyword']= 'sagyou';

var_dump($_SESSION['keyword']);
exit();