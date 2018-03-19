<?php
     require("/home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
     mysql_select_db($db_name, $connection);
     
     $this_page = $_SERVER["PHP_SELF"];
     $IP = $_SERVER["REMOTE_ADDR"];
     $date_auto = time();

     $query = "INSERT INTO mr_tracker (page, IP, date_auto) VALUES ('$this_page', '$IP', '$date_auto')";
     mysql_query($query, $connection);

     $query = "SELECT count(*) FROM mr_tracker WHERE page = '$this_page'";
     $result = mysql_query($query, $connection);
     $views = mysql_result($result, 0, "count(*)");
     
     echo "<Center>This Page Has Been Viewed $views Times</Center>";
     echo "<Center> <U> All Pages and Images Copyright Avatar of Velius 2008 - 2012 </U></Center>";
?>