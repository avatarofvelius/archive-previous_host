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

<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("newsDisplay.php");
    </Title>
  </Head>
  
  <Body Link="FFFFCC" VLink="FFFFCC">

<?

  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

  $query = "SELECT id, title FROM mr_news ORDER BY id DESC";
  $result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
 
if (mysql_num_rows($result) > 0) {

    while($send = mysql_fetch_object($result)) {

echo" $send->title - <a href='newsEdit.php?id=$send->id'>Edit this</a> - <a href='newsDelete.php?id=$send->id'>Delete this</a><br /><br />";
}
}

echo" <a href='newsPost.php'> Add a new post </A> ";
?>

&nbsp; <A HREF="javascript:history.go(-1)"> -|Go Back|-</A> 