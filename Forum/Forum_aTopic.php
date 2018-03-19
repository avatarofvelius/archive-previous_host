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
     require("/home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
     mysql_select_db($db_name, $connection);
     
     $topic = $_POST['topic'];
     $detail = $_POST['detail'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     
     $datetime = date("d/m/y h:i:s");
     
     $query = "INSERT INTO mr_forum_q(topic, detail, name, email, datetime) Values ('$topic', '$detail', '$name', '$email', '$datetime')";
     $result = mysql_query($query);
     
     if ($result)
     {
       echo '<Body Link="FFFFCC" VLink="FFFFCC">';
       echo '<Center>Topic Post Sucessful<Br>';
       echo '<a href="Forum_Main.php">Click Here To View Your Topic</a>';
     }
     else
     {
       echo 'Error Adding Topic, Please Try Again. mysql_error()';
     }
?>