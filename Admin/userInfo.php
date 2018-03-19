<style type="text/css">

Body
   {
    background-color: #336699;
    font-family: sylfaen;
    font-size: 10pt;
    color: #FFFFCC;
   }
H1 {
   font-family: sylfaen;
   color: #FFFFCC;
   font-size: 18px;
   }

P {
   text-indent: 20px;
   font-family: sylfaen;
   color: #FFFFCC;
   text-align: left;
   font-size: 12px;
  }
  
</style>

<?php

 $fName = $_POST['fName'];
 $lName = $_POST['lName'];
 $newUser = $_POST['newUser'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $title = $_POST['title'];
 $email = $_POST['email'];

 require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
 $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
 mysql_select_db($db_name, $connection);

?>

<html>
  <head>
    <title>
  Aov.getEnjoyment(.net) || Convert.ToPage("userInfo.php");
    </title>
  </head>

<body> 

  &nbsp; <A HREF="javascript:history.go(-1)"> -|Go Back|-</A> 

<Div align="center">
First Name : &nbsp; <? echo $fName; ?><Br>
Last Name : &nbsp; <? echo $lName; ?><Br>
Email : &nbsp; <? echo $email; ?><Br>
User Name : &nbsp; <? echo $username; ?><Br>
Password : &nbsp; <? echo $password; ?><Br>
Account Type : &nbsp; <? echo $newUser; ?><Br>
Title : &nbsp; <? echo $title; ?><Br>

<P><Center>Added To Database</Center></P>

<?php $query = "INSERT INTO mr_users (id, username, password, firstname, lastname, usertype, title, email) Values (NULL,'$username', '$password', '$fName', '$lName', '$newUser', '$title', '$email')";
 mysql_query($query, $connection) or die(mysql_error()); ?>


</Div>
</body>
</html>