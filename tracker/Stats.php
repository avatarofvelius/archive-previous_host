<?php
  require("/home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);
   
  $query = "SELECT count(*) FROM mr_tracker GROUP BY IP";
  $result = mysql_query($query, $connection);
  $views = mysql_num_rows($result);
  echo $views . " unique IPs<Br>";

  echo "<Br>IP Views:<Br>";
  $query = "SELECT *, count(*) FROM mr_tracker GROUP BY IP";
  $result = mysql_query($query, $connection);
 
  for ($i = 0; $i < mysql_num_rows($result); $i++)
  {
    $IP = mysql_result($result, $i, "IP");
    $views = mysql_result($result, $i, "count(*)");

    echo '<A Href="Stats_IP.php?IP=' . $IP . '">' . $IP . '</A>  ';
    echo "Views: $views<Br>";
  }

  echo "<Br>Page Views:<Br>";
  $query = "SELECT *, count(*) FROM mr_tracker GROUP BY page";
  $result = mysql_query($query, $connection);
 
  for ($i = 0; $i < mysql_num_rows($result); $i++)
  {
    $page = mysql_result($result, $i, "page");
    $views = mysql_result($result, $i, "count(*)");

    echo "Page: $page ";
    echo "Views: $views<Br>";
  }
?>
