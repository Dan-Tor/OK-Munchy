<?php

//Started in 12/26/2016 - 9:40 am nook cafe 
//Alfred Albizures in collaboration with william albizures
//Completed code on 12/30/2016 - 3:42PM Starbucks wallisville rd
// 832-414-0264 alfredalbizures@gmail.com

//SQL DataBase log in information from the Cpanel in Godaddy

$servername = "localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";


//create connection

$conn = new mysqli($servername, $username, $password, $dbName);

//check connection

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}

//targeted database 

mysqli_select_db($conn,'okaymunchy');


echo"Updated Successfully";


$sql="UPDATE base SET `name`='$_POST[rname]', `address num` ='$_POST[address]',`street`='$_POST[street]',`state`='$_POST[state]',`zip`='$_POST[zipo]',`categories`='$_POST[cate]'
,`phone`='$_POST[phonn]' WHERE `id_base`='$_POST[id_base]'";



if (mysqli_query($conn,$sql))
header("refresh:1; url=profile.php");
else
    echo"NOT Updated bra";




?>