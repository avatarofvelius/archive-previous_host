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
input.Required
  {
   background: #336699;
   font-family: sylfaen;
   font-size: 10pt;
   color: #FFFFCC;
   border-style: solid;
   border-color: #000000;
  }
  
</style>
  
</style>

<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("newsArticle.php");
    </Title>
  </Head>
  
  <Body Link="FFFFCC" VLink="FFFFCC">
<?
echo $id;
     include("newsDate.php");
  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

  $query = "SELECT * FROM mr_news WHERE id = '$id'";
  $result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());

$send = mysql_fetch_object($result);


if($send) {
echo '<Br><b>' . $send->title . '</b> <Hr Color="#FFFFCC" Width="80%" Align="left" />';
echo '<Br>';
echo formatDate($send->date);
echo '<Br>';
echo nl2br($send->content);
echo '<Br>';
echo '<Br>';
echo '<Hr Color="#FFFFCC" Width="40%" Align="left" />';
echo '<A HREF="javascript:history.go(-1)"> -|Go Back|-</A>';
}
?> 
