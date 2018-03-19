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

<html>
  <head>
    <title>
  Aov.getEnjoyment(.net) || Convert.ToPage("adminMain.php");
    </title>
  </head>

<body Link="FFFFCC" VLink="FFFFCC">

<p>Hello <? echo $_POST["username"]; ?>. You are now Logged in.</p>

  <Form action="userInfo.php" method="POST">
    <fieldset>
      <legend><Font Color="#FFFFCC">Create A New User:</Font></legend>
    <Div align="Center">
      <Br>  
        &nbsp; First Name <input name="fName" type="text" />
        &nbsp; Last Name <input name="lName" type="text" />
        &nbsp; Age <input name="age" type="text" />
      <Br><Br>
        &nbsp; User Name <input name="username" type="text" />
        &nbsp; Password <input name="password" type="text" />
      <Br>
    </Div>

    <Br>

    <Div align="Center">
    &nbsp; User Type
    <Br>
    &nbsp; New Admin <input type="radio" name="newUser" value="Admin" />
    &nbsp; New User <input type="radio" name="newUser" value="User" onClick=" document.newUserView.value = document.newUser.value"/>
    </Div>
    <Br>
    <Center>&nbsp; Title <input name="title" type="text" /></Center>
    <Br>
    <Center><input type="Submit" value="Validate" onClick="userInfo.php" class="Required"/>
    <Br>
    <Br>
    </fieldset>
  </Form>

  <A href="userList.php"> The Full User List </A>
  <A href="newsDisplay.php"> The News List </A>
  <A href="http://avatarofvelius.getenjoyment.net/User/userLog.php"> The User Log </A>

  <?php include("Tracker.php"); ?>
</body>
</html>


