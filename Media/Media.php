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
<?
   $mp3src = $_POST['song'];
?>

    <table border='0' cellpadding='0' align="center">
      <tr>
        <td>

      <Object id='mediaPlayer' width="340" height="280"
      classid='CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95' 
      codebase='http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701'
      standby='Loading Microsoft Windows Media Player components...' type='application/x-oleobject'>

      <param name='fileName' value="http://avatarofvelius.webng.com/Media/<? echo $mp3src ?>">
      <param name='animationatStart' value='true'>
      <param name='transparentatStart' value='true'>
      <param name='autoStart' value="false">
      <param name='showControls' value="true">
      <param name='loop' value="false">

      <Embed type='application/x-mplayer2'
        pluginspage='http://microsoft.com/windows/mediaplayer/en/download/'
        id='mediaPlayer' name='mediaPlayer' displaysize='4' autosize='-1' 
        bgcolor='darkblue' showcontrols="true" showtracker='-1' 
        showdisplay='0' showstatusbar='-1' videoborder3d='-1' width="340" height="280"
        src="http://avatarofvelius.webng.com/Media/" autostart="true" designtimesp='5311' loop="true">
      </Embed>
      </Object>

        </td>
      </tr>

      <tr>
        <td align='center'>
      <Form action="" method="POST">
      
      <select name="song">
        <option value="2_WaterDungeon.mp3">(Demo) OST - 2_Water Dungeon </option>
      </select>

      <Br><Br>

      <input type="submit" value="Send To Player" class="Required">

      </Form>
        </td>
      </tr>

      <tr>
        <td align='center'>
        <Center>Ready To Play: <? echo $_POST['song']; ?></Center>
        <a href"http://avatarofvelius.webng.com/Media/<? echo $mp3src ?>" style='font-size: 85%;' target='_blank'>Launch in external player</a> 
        </td>
      </tr>
    </table>

  <Center>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/legalcode">Attribution-Noncommercial-No Derivative Works License</a>.</Center>
    <Br>
  <Center><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png"/></a></Center><br/>
    <Br>
    <Center>http://docs.php.net/manual/en/reserved.variables.server.php</Center>
    <Center>http://phpeasystep.com/phptu/29.html</Center>
