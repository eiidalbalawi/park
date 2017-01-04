<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0<html>
<head>
<title>view all continue </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<body>
	<p>
	  <?php

  include ('config.php');
  echo "<table width='700' style='background-color:#008080; color:#fff; border:1px solid #026fa8; text-align:center;' dir='rtl'>
<tr>
  <td width=180>comment</td>
  <td width=180>email</td>
    <td width=50>subject</td>";

 //`id_cont`, `comment`, `email`, `subject` FROM `continue` WHERE 1
	
$Show_all=mysqli_query($mysqli,"select * from continue");
$i = 0;
while($row=mysqli_fetch_array($Show_all)){
  $i++;
    $comment=$row['comment'];
  $email=$row['email'];
  $subject=$row['subject'];
  print "<table width='700' style='border:1px solid #026fa8; text-align:center;' dir='rtl'>";
      print "<tr class=\"d".($i & 1)."\">";
  echo "<td width=180>".$email."</td><td width=180>".$subject."<td width=50><a href='deatails.php?id_cont=".$row['id_cont']."' target=''>detailes </a>"."</td>".

   "</tr>\n";
      print "</table>";
			}?>

</body>
</html>

