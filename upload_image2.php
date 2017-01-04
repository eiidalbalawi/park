<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>upload</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-image: url(file:///F|/ytmms%20new%20one/images/login_bachground.jpg);
}
</style>
</head>

<body>

<?php
include('config.php');
echo "<h3>Information for Image you uploaded</h3>";
if ((($_FILES["picture"]["type"] == "image/gif") || ($_FILES["picture"]["type"] == "image/jpeg") || ($_FILES["picture"]["type"] == "image/pjpeg")) && ($_FILES["picture"]["size"] < 50000))
  {
  if ($_FILES["picture"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["picture"]["error"] . "<br />";
    }
  else
    {
    echo "<b>Upload: </b>" . $_FILES["picture"]["name"] . "<br />";
    echo "<b>Type: </b>" . $_FILES["picture"]["type"] . "<br />";
    echo "<b>Size: </b>" . ($_FILES["picture"]["size"] / 1024) . " Kb<br />";
    echo "<b>Temp file:</b> " . $_FILES["picture"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["picture"]["name"]))
      {
      echo $_FILES["picture"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["picture"]["tmp_name"],
      "upload/" . $_FILES["picture"]["name"]);
      echo "<b>Stored in:</b> " . "upload/" . $_FILES["picture"]["name"];

          $filepath= "upload/" . $_FILES["picture"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  $range1=$_POST['picture'];



$addQuery=mysqli_query($mysqli,"update parking SET picture='$filepath' WHERE range='$range1'");

//mysql_close($con)

?>

</body>

</html>
