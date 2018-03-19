      <style type="text/css">
    body
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

<Html>
  <Head>
    <Title>
  Aov.getEnjoyment(.net) || Convert.ToPage("newsDisplay.php");
    </Title>
  </Head>
  
  <Body>

<?

  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

	// generate and execute query
	$query = "SELECT * FROM mr_news WHERE id = '$id'";
	$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());
	
	// if a result is returned
	if (mysql_num_rows($result) > 0)
	{
		// turn it into an object
		$send = mysql_fetch_object($result);

		// print form with values pre-filled
?>

Edit News Post
<form action="<? echo $PHP_SELF; ?>" method="POST">
<input type="hidden" name="id"  value="<? echo $send->id; ?>">
Title:<br />
<input size="50" maxlength="250" type="text" name="title" value="<? echo $send->title; ?>"><br />
Content:<br />
<textarea name="content" cols="40" rows="10"><? echo $send->content; ?></textarea><br />
Author:<br />
<input size="50" maxlength="250" type="text" name="author" value="<? echo $send->author; ?>"><br />

	<input type="Submit" name="submit" value="Update">
</form>

<?
if (!$submit)
{
	}
	// no result returned
	
	else {
		echo "<font size=-1>That post does not exist.</font>";
	}
}

// form submitted
// start processing it
else
{

// set up error list array
	$errorList = array();
	$count = 0;
	
	// validate text input fields
	if (!$title) { $errorList[$count] = "Invalid entry: title"; $count++; }
	
	if (!$content) { $errorList[$count] = "Invalid entry: content"; $count++; }

        if (!$author) { $errorList[$count] = "Invalid entry: author"; $count++; }

	if (sizeof($errorList) == 0) {

  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

		// generate and execute query
		$query = "UPDATE mr_news SET title = '$title', content = '$content', author = '$author' WHERE id = '$id'";
		$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());

		// print result
		echo "<font size=-1>Update successful. <a href=index.php>Go back to the main menu</a>.</font>";
		
	} else {
		// errors occurred
		// print as list
		echo "<font size=-1>The following errors were encountered: <br>";
		echo "<ul>";
		for ($x=0; $x<sizeof($errorList); $x++)
		{
			echo "<li>$errorList[$x]";
		}
		echo "</ul></font>";
	}
}

?>



