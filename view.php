<html>
<head>
<title>view all student </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<body>
	<p>
	  <?php

  include ('config.php');
  echo "<table width='700' style='background-color:#008080; color:#fff; border:1px solid #026fa8; text-align:center;' dir='rtl'>
<tr>
  <td width=180>id_stud</td>
  <td width=180>name_stud</td>
    <td width=50>plaque</td>";

 //`id_stud`, `name_stud`, `picture`, `password`, `plaque` FROM `student` WHERE 1
	
$Show_all=mysqli_query($mysqli,"select * from student");
$i = 0;
while($row=mysqli_fetch_array($Show_all)){
  $i++;
    $id_stud=$row['id_stud'];
  $name_stud=$row['name_stud'];
  $plaque=$row['plaque'];
  print "<table width='700' style='border:1px solid #026fa8; text-align:center;' dir='rtl'>";
      print "<tr class=\"d".($i & 1)."\">";
  echo "<td width=180>".$id_stud."</td><td width=180>".$name_stud."<td width=50><a href='deatails.php?id_stud=".$row['id_stud']."' target=''>detailes </a>"."</td>".

   "</tr>\n";
      print "</table>";
			}?>

</body>
	</html>
