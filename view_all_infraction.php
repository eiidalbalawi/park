<html>
<head>
<title>view all infraction </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<body>
	<p>
	  <?php

  include ('config.php');
  echo "<table width='700' style='background-color:#008080; color:#fff; border:1px solid #026fa8; text-align:center;' dir='rtl'>
<tr>
  <td width=180>id_infr</td>
  <td width=180>name_infr</td>
    <td width=50>Date_infr</td>";

 //`id_infr`, `name_infr`, `type_infr`, `Date_infr`, `picture`, `plaque` FROM `infraction` WHERE 1	
$Show_all=mysqli_query($mysqli,"select * from infraction");
$i = 0;
while($row=mysqli_fetch_array($Show_all)){
  $i++;
    $id_infr=$row['id_infr'];
  $name_infr=$row['name_infr'];
  $Date_infr=$row['Date_infr'];
  print "<table width='700' style='border:1px solid #026fa8; text-align:center;' dir='rtl'>";
      print "<tr class=\"d".($i & 1)."\">";
  echo "<td width=180>".$id_infr."</td><td width=180>".$name_infr."<td width=50><a href='deatails.php?id_infr=".$row['id_infr']."' target=''>detailes </a>"."</td>".

   "</tr>\n";
      print "</table>";
			}?>

</body>
	</html>

