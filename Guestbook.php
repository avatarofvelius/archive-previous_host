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

<?php
  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

  $name = $_POST["txt_name"];
  $len = strlen($name);
  if ($len > 0)
  {
    $email = $_POST["txt_email"];
    $comment = $_POST["txt_comment"];
    $date = time();

    $query = "INSERT INTO mr_guestbook (autoID, name, email, comment, date_auto) Values (NULL, '$name', '$email', '$comment', '$date')";
    mysql_query($query, $connection) or die(mysql_error());
  }
?>

<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("Guestbook.php");
    </Title>
  </Head>
  
  <Body Bgcolor="#336699" Link="FFFFCC" VLink="FFFFCC">

  <Center><Img Src="/images/banner1.jpg"></Img></Center>

  <Br>
  <Hr Color="#FFFFCC" Width="80%">
  <Br>

  <Center>
  <Form action="<?php echo $_SERVER[PHP_SELF]; ?>" method="POST">
  <Font Color="#FFFFCC">
    Name: <input type="text" name="txt_name">&nbsp;
    Email: <input type="text" name="txt_email"><Br><Br>
    Comment:<Br><Br>
    <Textarea style="width: 40%" rows="10" name="txt_comment"></Textarea><Br><Br>
    <Center><input type="submit" value="Submit" class="Required"></Center>
  </Font>
  </Form>

  <Br>
  <Hr Color="#FFFFCC" Width="80%">
  <Br>

  <Table
    Bgcolor="#000000"
      Border="0"
        Width="650">
  
  <?php
    $query = "SELECT * FROM mr_guestbook ORDER BY date_auto";
    $result = mysql_query($query, $connection);

    for ($i = 0; $i < mysql_num_rows($result); $i++)
    {
      $name = mysql_result($result, $i, "name");
      $email = mysql_result($result, $i, "email");
      $email_len = strlen($email);
      $comment = mysql_result($result, $i, "comment");
      $comment = nl2br($comment);
      $date = mysql_result($result, $i, "date_auto");
      $show_date = date("H:i:s m/d/Y", $date);

      echo '
        <Tr>
          <Td Width="50%" Bgcolor="#336699">';
        if ($email_len > 0)
        {
          echo '<B>Name: </B> <A Href="mailto:' . $email . ' "> ' . $name . '</A>';
        } 
        else
        {
          echo '<B>Name: </B> ' . $name;
        }
        echo '
          <Br>
            <B>Comment: </B>  ' . $comment . ' 
          </Td>
          <Td Width="1%" valign="center" nowrap Bgcolor="#224488">
            <B>Date: </B> ' . $show_date . '
          </Td>
        </Tr>
       ';
      }
  ?>

  </Table>
  </Center>

  <Br>
  <Hr Color="#FFFFCC" Width="80%">
  <Br>

  <Br>
  </Body>
</Html>