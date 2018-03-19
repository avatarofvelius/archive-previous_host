      <style type="text/css">
    body
      {
        background-color: #224488;
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

<html>
  <head>
    <title>
  Aov.getEnjoyment(.net) || Convert.ToPage("Main.php");
    </title>
  </head>

<body>

  <H1> Full User List </H1> 

  <Table
    Bgcolor="#000000"
      Border="0"
        Width="700"
          Align="Center">
  <?php

  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

    $query = "SELECT * FROM mr_users Order by id";
    $result = mysql_query($query, $connection);
    
    for ($i = 0; $i < mysql_num_rows($result); $i++)
      {
        $username = mysql_result($result, $i, "username");
        $firstname = mysql_result($result, $i, "firstname");
        $lastname = mysql_result($result, $i, "lastname");
        $title = mysql_result($result, $i, "title");
        $usertype = mysql_result($result, $i, "usertype");

      echo '
        <Tr>
          <Td valign="center" nowrap Bgcolor="#336699" Height="50"><Center><B>Username: </B> ' . $username . ' <Br> </Td> </Center>';
      echo '<Td valign="center" nowrap Bgcolor="#336699"><Center><B>First Name: </B> ' . $firstname . ' <Br>';
      echo '<B>Last Name: </B> ' . $lastname . ' <Br> </Center> </Td>';
      echo '<Td valign="center" nowrap Bgcolor="#336699"><Center><B>User Type: </B> ' . $usertype . ' <Br>
          </Td>
        </Tr>
       ';
      }
  ?>

  &nbsp; <A HREF="javascript:history.go(-1)"> -|Go Back|-</A> 