<?php
	    include ('file:///C:/wamp64/www/parking_system/config.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>deatails all infraction</title>
<script language="javascript">
	function addtocart(pid){
		document.form1.mc_id.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
</head>


<body>
<div align="center">
  <table width="534" border="0">
	  <?php
	  $id_infr=$_GET['id_infr'];
   
  			$result=mysqli_query($mysqli,"select * from infraction WHERE id_infr=$id_infr");
			while($row=mysqli_fetch_array($result)){

//`id_infr`, `name_infr`, `type_infr`, `Date_infr`, `picture`, `plaque` FROM `infraction` WHERE 1
   	  <tr>
      
        	<td width="126" height="180"><img width="300" height="200"src="<?=$row['picture']?> </td>
            <td width="494" bgcolor="#01A2DE">
			<table width="356" border="0" bgcolor="#01A2DE">
              <tr>
                <td width="170" bgcolor="#01A2DE">Infraction Name</td>
                <td width="133"><b>
                  <?=$row['name_infr']?>
                </b></td>
              </tr>
              <tr>
                <td bgcolor="#01A2DE" style="height: 32px">Data</td>
                <td style="height: 32px"><b>
                  <?=$row['Date_infr']?>
                </b></td>
              </tr>
              <tr>
                <td bgcolor="#01A2DE">type</td>
                <td><b>
                  <?=$row['type_infr']?>
                </b></td>
              </tr>
              </table>
                
              </p>
		  </td>
		</tr>
        <tr><td colspan="2">&nbsp;</td>
        <?php } ?>
    </table>
</div>
</body>
</html>

