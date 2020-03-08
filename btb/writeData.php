<?php
$data=array();
$c=0;
 $myfile=fopen('Database.txt','a+') or die ("Unable to find file");
 if(strlen($_POST["firstName"])>0 &&strlen($_POST["lastName"])>0 &&strlen($_POST["userName"])>0 &&strlen($_POST["email"])>0 && strlen($_POST["phone"])>0 &&strlen($_POST["newPassword"])>0 &&strlen($_POST["cnfirmPassword"])>0)
 {
	if($_POST["newPassword"]==$_POST["cnfirmPassword"]){
	$c=fwrite($myfile,"\r\n");
	$c+=fwrite($myfile,$_POST["firstName"]);
	$c+=fwrite($myfile," ");
	$c+=fwrite($myfile,$_POST["lastName"]);
	$c+=fwrite($myfile," ");
	$c+=fwrite($myfile,$_POST["userName"]);
	$c+=fwrite($myfile," ");
	$c+=fwrite($myfile,$_POST["email"]);
	$c+=fwrite($myfile," ");
	$c+=fwrite($myfile,$_POST["phone"]);
	$c+=fwrite($myfile," ");
	$c+=fwrite($myfile,md5($_POST["newPassword"]));
	echo "Sign Up Successful.";
	} 
	 
 }
 else echo "<h1>Fill each field correctly<h1>";


?>