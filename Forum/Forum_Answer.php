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
     
     $tbl_name = 'mr_forum_a';
     $question_id=$_GET['id'];

$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); 

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);

if($result2){
echo "Successful<BR>";
echo '<Body Link="FFFFCC" VLink="FFFFCC">';
echo "<a href='Forum_vTopic.php?id=".$id."'>View your answer</a>";

$tbl_name2="mr_foruma";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);

}
else {
echo "ERROR";
}

mysql_close();
?>
