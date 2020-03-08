<?php
session_start();

$auth=array();

	 
require("library.php");

LoadFromFile();




if (isset($_POST['submit'])){
			$email =$_POST['email'];
	      $password=$_POST['password'];
	      foreach($auth as $v){
	      if($_POST["email"]==$v["em"] && md5($_POST["password"])==$v["pass"]){
	     
	      header("location: homepage.php");	      

	  }



	 }
	}

	


		if (isset($_POST['submit'])){
			$email =$_POST['email'];
	      $password=$_POST['password'];
	      if(empty($email) and empty($password))
	      {
	      	echo "null submission";
	      }

	}



	if (isset($_POST['submit'])){
			$email =$_POST['email'];
	      $password=$_POST['password'];
	      foreach($auth as $v){

	      if($_POST["email"]==$v["em"] and empty($password))
	      {
	      	echo "Password field id Empty";
	      }

	}
}



