<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['old'];
$adress=$_POST['adr'];
$text=$_POST['message'];
$hostname="localhost";
$user="root";
$pswd="";
$dbname="portfolio";
$conn=mysqli_connect($hostname,$user,$pswd,$dbname);
if($conn){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql="insert into content(name,lastname,age,adress,msg) values('$fname','$lname','$age','$adress','$text')";
        $result=mysqli_query($conn,$sql);
    }
    echo"connected succesfully"."<br>";
    header("location:contact.html");

}else{echo"erreur";}
?>