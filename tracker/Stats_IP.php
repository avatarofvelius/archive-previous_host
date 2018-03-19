<?php
   require("/home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
   $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
   mysql_select_db($db_name, $connection);
   
   $cur_IP = $_GET["IP"];
   
   echo 'Pages Viewed By ' . $cur_IP . ':<Br><Br>';
   $query = "SELECT * FROM mr_tracker Where IP = '$cur_IP' ORDER BY date_auto";
   $result = mysql_query($query, $connection);
   for ($i = 0; $i < mysql_num_rows($result); $i++)
   {
     $page = mysql_result($result, $i, "page");
     $date_auto = mysql_result($result, $i, "date_auto");
     $date = date("H:i:s,m/d/Y", $date_auto);
     
     echo "Page: $page   Date: $date<Br>";
   }
?>

