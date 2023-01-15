<?php
session_start(); //inici de sessió

$num=0;
if(isset($_SESSION['num'])){
        $num=$_SESSION['num'];
}

$_SESSION['num'] = ++$num;

echo $num;