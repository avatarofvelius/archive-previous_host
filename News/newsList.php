<style type="text/css">

Body
   {
    background-color: #336699;
    font-family: sylfaen;
    font-size: 10pt;
    color: #FFFFCC;
   }
H1 
   {
   font-family: sylfaen;
   color: #FFFFCC;
   font-size: 18px;
   }

P 
   {
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
  Aov.getEnjoyment(.net) || Convert.ToPage("newsList.php");
    </Title>
  </Head>
  
  <Body Link="FFfFCC" VLink="FFFFCC">

<?
     include("newsDate.php");
  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

    //Generate the query so we can retrieve all titles in the DB in descending ID order

  $query = "SELECT id, title, date FROM mr_news ORDER BY id DESC";
  $result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
 
      // if records are present
if (mysql_num_rows($result) > 0) { 
    while($send = mysql_fetch_object($result)) {

echo"$send->title -"; 

echo formatDate($send->date); 
echo" - <a href='r.php?id=$send->id'>Read this</a><br /><br />";
}

}
?>
