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

  $username = $_POST["username"]; 
  $file = "u_log.txt";
  $handle = fopen($file, 'a+');
  
  $Data = $username . "_" . date("Y/m/d_h:i:s_A") . "\n";
  fwrite($handle, $Data);
  
  fclose($handle)
?>

<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("userMain.php");
    </Title>
  </Head>
  
  <Body Link="FFFFCC" VLink="FFFFCC">

  <p>Hello <?php echo $_POST["username"]; ?>. You are now Logged in.</p>

 <Table
    Height="100"
      Width="300"
        Align="Center"
          Border="1"
            Bordercolor="#000000"
              Bgcolor="#224488">
      <Tr><Td>
    <Table
      align="Center"
        Width="300"
          Border="1"
            Bordercolor="#224488"
              Bgcolor="#224488"
                v-align="Center"
                  Height="100">

      <Tr><Td Bgcolor="#336699" Bordercolor="#000000">
        <Center>The Forum Page || &nbsp;<A Href="http://avatarofvelius.getenjoyment.net/Forum/Forum_Main.php" target="parent" >:-Go-:</A></Center>
      </Tr></Td>
      <Tr><Td Bgcolor="#336699" Bordercolor="#000000">
         <Center>The Guestbook Page || &nbsp;<A Href="http://avatarofvelius.getenjoyment.net/Guestbook.php" target="parent" >:-Go-:</A></Center>
      </Tr></Td>
      <Tr><Td Bgcolor="#336699" Bordercolor="#000000">
        <Center>The Affiliates Page || &nbsp;<A Href="http://avatarofvelius.getenjoyment.net/Affiliates.php" target="parent" >:-Go-:</A></Center>
      </Tr></Td>
  </Table>
  </Td>

  &nbsp;

  <Td>
  <Table 
    Height="100"
      Width="50"
        v-align="Center"
          Bgcolor="#224488"
            Bordercolor="#000000"
              Align="Right">
  <Tr>
    <Td>
      <Center>
        <Img Src="/images/background1.jpg" Height="100" Border="2"></Img>
      </Center>
    </Td>
  </Tr>

  </Table>
  </Td>

  <Td>
    <Table
      align="Center"
        Width="300"
          Border="1"
            Bordercolor="#224488"
              Bgcolor="#224488"
                v-align="Center"
                  Height="100">

      <Tr><Td Bgcolor="#336699" Bordercolor="#000000">
        <Center>The Brinkster Page || &nbsp;<A Href="http://avatarofvelius.brinkster.net" target="parent" >:-Go-:</A></Center>
      </Tr></Td>
      <Tr><Td Bgcolor="#336699" Bordercolor="#000000">
         <Center>The FTP Page || &nbsp;<A Href="ftp://avatarofvelius.getenjoyment.net/avatarofvelius.getenjoyment.net/FTP/" target="parent" >:-Go-:</A></Center>
      </Tr></Td>
      <Tr><Td Bgcolor="#336699" Bordercolor="#000000">
        <Center>The CodeCall Page || &nbsp;<A Href="http://forum.codecall.net/members/avatarofvelius.html" target="parent" >:-Go-:</A></Center>
      </Tr></Td>
  </Table>
  </Td></Tr>
  </Table>

  <Br>

  <? Include('Tracker.php'); ?>