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

<?php
     require("/home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
     mysql_select_db($db_name, $connection);
     
     $tbl_name = 'mr_forum_q';
     $id=$_GET['id'];

     $sql="SELECT * FROM $tbl_name Where id = $id";
     $result=mysql_query($sql);

     $rows=mysql_fetch_array($result);
?>

<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("Forum_vTopic.php");
    </Title>
  </Head>
  
  <Body Link="FFFFCC" VLink="FFFFCC">

  <Center><Img Src="banner1.jpg"></Img></Center>

  <A Name="Topic"></A>

  <Br>
  <Hr Color="#FFFFCC" Width="80%">
  <Br>

  <Table
    Border="1"
      Bordercolor="#000000"
        Bgcolor="#336699"
          Align="Center"
           Width="900">
    <Tr>
      <Td Bgcolor="#224488" Width="300" Height="50">
        <Center>
          <U>Jump To The Last Of These Posts</U> || <A Href="#LastPost">Here</A>
        </Center>
      </Td>
      <Td Bgcolor="#224488" Width="300" Height="50">
        <Center>
          <U>Or To The Main Forum</U> || <A Href="Forum_Main.php">Here</A>
        </Center>
      </Td>
      <Td Bgcolor="#224488" Width="300" Height="50">
        <Center>
          <U>Or To The Main Page</U> || <A Href="http://avatarofvelius.getenjoyment.net/Index.php">Here</A>
        </Center>
      </Td>
    </Tr>
  </Table>

  <Br>
  <Hr Color="#FFFFCC" Width="40%">
  <Br>

<table 
  width="450" 
    border="1"
      cellpadding="0" 
        cellspacing="1" 
          bordercolor="#000000" 
            align="center">
  <tr>
    <td bgcolor="#224488" colspan="2" ><center><strong><? echo $rows['topic']; ?></strong></center></td>
  </tr>
  <tr>
    <td Bgcolor="#336699" width="40%" ><center><strong>By :</strong> <? echo $rows['name']; ?></center></td>
    <td Bgcolor="#336699" width="60%" ><center><strong>Email : </strong><? echo $rows['email'];?></center></td>
  </tr>
  <tr>
    <td Bgcolor="#336699" colspan="2" >&nbsp;<? echo $rows['detail']; ?></td>
  </tr>
  <tr>
    <td Bgcolor="#224488" align="right" colspan="2"><strong>Date/Time : </strong><? echo $rows['datetime']; ?></td>
  </tr>
</table>

  <Br>
  <Hr Color="#FFFFCC" Width="40%">
  <Br>

<?php
$tbl_name2="mr_forum_a";

$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysql_query($sql2);

while($rows=mysql_fetch_array($result2))
  {
?>

  <table 
    width="450" 
      border="1"
        cellpadding="3" 
          cellspacing="1" 
            bordercolor="#000000" 
              bgcolor="#336699"
                align="center">
  <!--    <tr>
        <td Bgcolor="#336699"><strong>ID</strong></td>
        <td Bgcolor="#336699"><? echo $rows['a_id']; ?></td>
      </tr> -->
      <tr> 
        <td Bgcolor="#336699" width="40%" colspan="2"><strong>Answer From :</strong><? echo $rows['a_name']; ?></td>
      </tr>
      <tr>
        <td Bgcolor="#336699" width="60%" align="center"><strong> &nbsp; </strong></td> 
        <td Bgcolor="#336699" width="60%"><strong>Email :</strong><? echo $rows['a_email']; ?></td>
      </tr>
      <tr>
        <td Bgcolor="#336699" colspan=4><? echo $rows['a_answer']; ?></td>
      </tr>
      <tr>
        <td Bgcolor="#224488" colspan=4 align="right"><strong>Date/Time : </strong><? echo $rows['a_datetime']; ?></td>
      </tr>
    </table>

<Br>

<?
}

echo '

<A Name="LastPost"></A>

  <Br>
  <Hr Color="#FFFFCC" Width="40%">
  <Br>

  <Table
    Border="1"
      Bordercolor="#000000"
        Bgcolor="#336699"
          Align="Center"
           Width="900">
    <Tr>
      <Td Bgcolor="#224488" Width="300" Height="50">
        <Center>
          <U>Jump To The Topic Of These Posts</U> || <A Href="#Topic">Here</A>
        </Center>
      </Td>
      <Td Bgcolor="#224488" Width="300" Height="50">
        <Center>
          <U>Or To The Main Forum</U> || <A Href="Forum_Main.php">Here</A>
        </Center>
      </Td>
      <Td Bgcolor="#224488" Width="300" Height="50">
        <Center>
          <U>Or To The Main Page</U> || <A Href="http://avatarofvelius.getenjoyment.net/Index.php">Here</A>
        </Center>
      </Td>
    </Tr>
  </Table>';

$sql3="SELECT view FROM $tbl_name WHERE id='$id' Order by id Asc";
$result3=mysql_query($sql3);

$rows=mysql_fetch_array($result3);
$view=$rows['view'];

if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}

$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);

mysql_close();
?>

  <Br>
  <Hr Color="#FFFFCC" Width="80%">
  <Br>

  <form name="form1" method="post" action="Forum_Answer.php">  

  <Table
    Width="450"
      Border="1"
        Align="Center"
          bgcolor="#336699"
            Bordercolor="#000000"
              Cellpadding="3">
  <Tr>
    <Td colspan="3" Bgcolor="#224488"><strong>Post A Response</Font></strong></Td>
  </Tr>
  <Tr>
    <Td width="18%" Bgcolor="#336699" ><strong>Name</Font></strong></td>
    <Td width="3%" Bgcolor="#336699" >:</td>
    <Td width="79%" Bgcolor="#336699" ><input name="a_name" type="text" id="a_name" size="45"></td>
  </Tr>
  <Tr>
    <Td Bgcolor="#336699" ><strong>Email</Font></strong></td>
    <Td Bgcolor="#336699" >:</Font></td>
    <Td Bgcolor="#336699" ><input name="a_email" type="text" id="a_email" size="45"></td>
  </Tr>
  <Tr>
    <Td valign="top" Bgcolor="#336699" ><strong>Answer</strong></td>
    <Td valign="top" Bgcolor="#336699" >:</Font></td>
    <Td Bgcolor="#336699" ><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
  </Tr>
  <Tr>
    <Td Bgcolor="#336699" >&nbsp;</Td>
    <Td Bgcolor="#336699" >&nbsp;</Td>
    <Td Bgcolor="#336699" >
        <input type="submit" name="Submit" value="Submit" class="Required"> 
        <input type="reset" name="Submit2" value="Reset" class="Required">
        <input name="id" type="hidden" value="<? echo $id; ?>">
    </td>
  </Tr>
</Font>
</Table>
