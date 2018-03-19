      <style type="text/css">
    body
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

H2 {
   font-family: sylfaen;
   color: #FFFFCC;
   font-size: 14px;
   }

P {
   text-indent: 20px;
   font-family: sylfaen;
   color: #FFFFCC;
   text-align: left;
   font-size: 14px;
  }  

P2 {
   text-indent: 20px;
   font-family: sylfaen;
   color: #FFFFCC;
   text-align: center;
   font-size: 16px;
  } 

P3 {
   text-indent: 20px;
   font-family: sylfaen;
   color: #FFFFCC;
   text-align: center;
   font-size: 20px;
  } 
    </style>

<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("newsDelete.php");
    </Title>
  </Head>
  
  <Body>

<?

  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

// generate and execute query
$query = "DELETE FROM mr_news WHERE id = '$id'";
$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());

// print result
echo "<font size=-1>Deletion successful. <a href=index.php>Go back to the main menu</a>.</font>";

     require_once("temp/foot.php");
?>
