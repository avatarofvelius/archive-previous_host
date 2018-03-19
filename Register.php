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
  Aov.getEnjoyment(.net) || Convert.ToPage("Register.php");
    </Title>
  </Head>
  
  <Body Link="FFFFCC" VLink="FFFFCC">

  <h1>User Registration</h1>
  
<form action="/Admin/userInfo.php" method="POST">


<table border="0">

<tr>
  <td><b>First Name</b></td>
  <td><input type="text" maxlength=20 name="fName"
 value=""></td>
</tr>

<tr>
  <td><b>Last Name</b></td>
  <td><input type="text" maxlength=20 name="lName"
 value=""></td>
</tr>

<tr>
  <td><b>Email</b></td>
  <td><input type="text" maxlength=40 name="email"
 value=""></td>
</tr>

<tr>
  <td><b>Username</b></td>
  <td><input type="text" maxlength=20 name="username"
 value=""></td>
</tr>

<tr>
  <td><b>Password</b></td>
  <td><input type="password" maxlength=20 name="password"
 value=""></td>
</tr>

<tr>
  <td><b>Title</b></td>
  <td><input type="text" maxlength=20 name="title"
 value="New User" readonly></td>
</tr>

<input type="hidden" value="User" name="newUser">

<tr>
  <td colspan="2"><Center><input type="submit" value="Register"></Center></td>
</tr>

</table>
</form> 
</body>
</html> 


