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

  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

  $result=mysql_query("select * from mr_users where username='$username' AND password='$password' AND usertype='Admin'"); 

  $rowCheck = mysql_num_rows($result); 
  if($rowCheck > 0){ 
    $username = mysql_result($result, $i, "username");
  }
?>

<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("Login.php");
    </Title>
  </Head>
  
  <Body>

  <Div align="center">

  <form method="POST" action="/Admin/adminMain.php" > 

  Username: <input type="text" name="username" size="20"> 
  Password: <input type="password" name="password" size="20"> 

  &nbsp;<input type="submit" value="Submit" name="login" class="Required"> 

  </form> 
 
  </Div>

</body> 
</html> 
