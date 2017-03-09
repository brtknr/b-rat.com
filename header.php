<?php
session_start();

if ($_GET["signOff"]){
	$_SESSION["isBharat"] = 0;
}

if ($_POST["unlock"]){
	$userKey = $_POST["colourKey"];
	$keyArray = Array(
	 	1 => "FF0000",
		2 => "40FF40",
		3 => "80FF80");

$_SESSION["isBharat"] = ($userKey == $keyArray);

}

$toggleFooter = "toggleFooter();";
?>

<html>
<head>
<title>Bharat's World.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="Bharat Bikram Kunwar">
<meta name="description" content="All about Bharat Bikram Kunwar">
</head>

<body bgcolor="#FFFEF9" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" rightmargin="0" bottommargin="0" link="#503412" vlink="#9D9326" alink="#F89437" style="font-family: Georgia" text="#3C4417">