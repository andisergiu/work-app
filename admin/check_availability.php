<?php
require_once("includes/dbconnection.php");


//code check Empid
if(!empty($_POST["empid"])) {
$empid=$_POST["empid"];
$sql ="SELECT empid FROM tblemployee WHERE EmpId=:empid";
$query= $dbh -> prepare($sql);
$query-> bindParam(':empid', $empid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
 
if($query -> rowCount() > 0)
echo "<span style='color:red'> ID-ul este deja inregistrat unui angajat</span>";
else
 echo "<span style='color:green'> ID valabil /span>";
 
}

//code check Email<!-- -->
if(!empty($_POST["empemail"])) {
$empemail=$_POST["empemail"];
$sql ="SELECT EmpEmail FROM tblemployee WHERE EmpEmail=:empemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':empemail', $empemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
 
if($query -> rowCount() > 0)
echo "<span style='color:red'> Email-ul este deja inregistrat unui angajat</span>";
else
 echo "<span style='color:green'> Email valabil </span>";
 
}

//code check mobile
if(!empty($_POST["empcontno"])) {
$empcontno=$_POST["empcontno"];
$sql ="SELECT EmpContactNumber FROM tblemployee WHERE EmpContactNumber=:empcontno";
$query= $dbh -> prepare($sql);
$query-> bindParam(':empcontno', $empcontno, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
 
if($query -> rowCount() > 0)
echo "<span style='color:red'> Numarul de telefon este deja inregistrat unui angajat</span>";
else
 echo "<span style='color:green'> Numar de telefon valabil </span>";
 
}