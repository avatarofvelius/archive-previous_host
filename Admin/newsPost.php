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
  Aov.getEnjoyment(.net) || Convert.ToPage("newsPost.php");
    </Title>
  </Head>
  
  <Body>

<?

  require("//home/www/avatarofvelius.getenjoyment.net/config/db_config.php");
  $connection = mysql_connect($db_host, $db_user, $db_password) or die("error connecting to database.");
  mysql_select_db($db_name, $connection);

if (!$submit)
{

?>

Add New Post<br />
<form action="<? echo $PHP_SELF; ?>" method="POST">
<input type="hidden" name="id"  value="id">
Title:<br />
<input size="50" maxlength="60" type="text" name="title"><br />

 <Br /> News Content:<br />
<textarea name="content" cols="40" rows="10"> </textarea> <br />

 <Br /> Author:<br />
<input size="50" maxlength="250" type="text" name="author"> <br />
	
 <Br /> <input type="Submit" name="submit" value="Update">
</form>

<?

} else {

//set up error array 
	$err = array();
	$count = 0;
	
	//validate the user text input fields
	if (!$title) { $err[$count] = "Invalid entry: title"; $count++; }
	
	if (!$content) { $err[$count] = "Invalid entry: content"; $count++; }

        if (!$author) { $err[$count] = "Invalid entry: author"; $count++; }

	// if no error found...
	if (sizeof($err) == 0) {

// generate and execute query to insert the post
		$query = "INSERT INTO mr_news(id, title, content, author, date) VALUES(0, '$title', '$content', '$author', NOW())";
		$result = mysql_query($query) or die ("Error in query: $query. " . mysql_error());

		// print result
		echo "Update successful. <a href='newsDisplay.php'>Go back to the main menu</a>.";
	} else {
		// errors found
		// print as list
		echo "<font size=-1>The following errors were encountered: <br>";
		echo "<ul>";
		for ($x=0; $x<sizeof($errorList); $x++) {
			echo "<li>$errorList[$x]";
		}
		echo "</ul></font>";
	}
}
?>
