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

echo 'User Log <Br/>';

$file=fopen("u_log.txt","r") or exit("Unable to open file!");
while (!feof($file)) 
  { 
  echo fgets($file) . "<Br />"; 
  }
fclose($file);
?> 


<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("userLog.php");
    </Title>
  </Head>
  
  <Body Link="FFFFCC" VLink="FFFFCC">

  &nbsp; <A HREF="javascript:history.go(-1)"> -|Go Back|-</A> 