<html>
<head>
<title>view all parking </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<body>
	<p>
	  <?php

  include ('config.php');
  echo "<table width='700' style='background-color:#008080; color:#fff; border:1px solid #026fa8; text-align:center;' dir='rtl'>
<tr>
  <td width=180>range</td>
  <td width=180>date_par</td>
    <td width=50>Today</td>";

 //`id_par`, `range`, `picture`, `date_par`, `Today` FROM `parking` WHERE 1
	
$Show_all=mysqli_query($mysqli,"select * from parking");
$i = 0;
while($row=mysqli_fetch_array($Show_all)){
  $i++;
    $range=$row['range'];
  $date_par=$row['date_par'];
  $Today=$row['Today'];
  print "<table width='700' style='border:1px solid #026fa8; text-align:center;' dir='rtl'>";
      print "<tr class=\"d".($i & 1)."\">";
  echo "<td width=180>".$range."</td><td width=180>".$date_par."<td width=50><a href='deatails.php?id_par=".$row['id_par']."' target=''>detailes </a>"."</td>".

   "</tr>\n";
      print "</table>";
			}?>

</body>
	</html>
