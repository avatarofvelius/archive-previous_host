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

<Html>
  <Head>
    <Title>
  Thread.Forum || AoV.getEnjoyment(.net)
    </Title>
  </Head>
  
  <Body Link="FFFFCC" VLink="FFFFCC">

  <Center><Img Src="banner1.jpg"></Img></Center>

  <Br>
  <Hr Color="#FFFFCC" Width="80%">
  <Br>

<?php
     require("/home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
     mysql_select_db($db_name, $connection);
     
     $tbl_name = 'mr_forum_q';

$sql="SELECT * FROM $tbl_name Where category='Intro' ORDER BY id DESC ";
$result=mysql_query($sql);
?>

<table width="70%" border="1" align="center" cellpadding="3" cellspacing="1" bgcolor="#336699" bordercolor="#000000">
<tr>
<td colspan="4" bgcolor="#224488"><Center> Welcome Threads </Center></td>
</tr>

<tr>
<!-- <td width="6%" align="center" bgcolor="#224488"><strong>#</strong></td> -->
<td width="40%" align="center" bgcolor="#224488"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="224488"><strong>Author</strong></td>
<td width="8%" align="center" bgcolor="224488"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#224488"<strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){ 
?>
<tr>
<!-- <td bgcolor="#224488"><Center><? echo $rows['id']; ?></Center></td> -->
<td align="center" bgcolor="#336699"><a href="Forum_vTopic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#336699"><? echo $rows['name']; ?> </td>
<td align="center" bgcolor="#336699"><? echo $rows['view']; ?></td>
<td align="center" bgcolor="#336699"><? echo $rows['datetime']; ?></td>
</tr>
<?php
}
mysql_close();
?>

<?php

     require("/home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
     mysql_select_db($db_name, $connection);
     
     $tbl_name = 'mr_forum_q';

$sql2="SELECT * FROM $tbl_name Where category='Request' ORDER BY id DESC ";
$result=mysql_query($sql2);
?>

<tr>
<td colspan="4" bgcolor="#224488"><Center> User/Admin Requests </Center></td>
</tr>

<tr>
<!-- <td width="6%" align="center" bgcolor="#224488"><strong>#</strong></td> -->
<td width="40%" align="center" bgcolor="#224488"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="224488"><strong>Author</strong></td>
<td width="8%" align="center" bgcolor="224488"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#224488"<strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){ 
?>
<tr>
<!-- <td bgcolor="#224488"><Center><? echo $rows['id']; ?></Center></td> -->
<td align="center" bgcolor="#336699"><a href="Forum_vTopic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#336699"><? echo $rows['name']; ?> </td>
<td align="center" bgcolor="#336699"><? echo $rows['view']; ?></td>
<td align="center" bgcolor="#336699"><? echo $rows['datetime']; ?></td>
</tr>

<?php
}
mysql_close();
?>

<?php
     require("/home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
     mysql_select_db($db_name, $connection);
     
     $tbl_name = 'mr_forum_q';

$sql="SELECT * FROM $tbl_name Where category='' ORDER BY id DESC ";
$result=mysql_query($sql);
?>

<tr>
<td colspan="4" bgcolor="#224488"><Center> Non Catagorized Threads </Center></td>
</tr>

<tr>
<!-- <td width="6%" align="center" bgcolor="#224488"><strong>#</strong></td> -->
<td width="40%" align="center" bgcolor="#224488"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="224488"><strong>Author</strong></td>
<td width="8%" align="center" bgcolor="224488"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#224488"<strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){ 
?>
<tr>
<!-- <td bgcolor="#224488"><Center><? echo $rows['id']; ?></Center></td> -->
<td align="center" bgcolor="#336699"><a href="Forum_vTopic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#336699"><? echo $rows['name']; ?> </td>
<td align="center" bgcolor="#336699"><? echo $rows['view']; ?></td>
<td align="center" bgcolor="#336699"><? echo $rows['datetime']; ?></td>
</tr>
<?php
}
mysql_close();
?>

<tr>
<td colspan="5" align="right" bgcolor="#336699"><a href="Forum_cTopic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>

  <Br>
  <Hr Color="#FFFFCC" Width="60%">
  <Br>

  <?php include("/home/www/avatarofvelius.getenjoyment.net/Tracker.php"); ?>

