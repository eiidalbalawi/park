<?php
	    include ('config.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>student data</title>
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
	  $id_stud1=$_GET['id_stud'];
   
  			$result=mysqli_query($mysqli,"select * from student WHERE id_stud=$id_stud1");
			while($row=mysqli_fetch_array($result)){

//`id_stud`, `name_stud`, `picture`, `password`, `plaque`, `id` FROM `student` WHERE 1		?>
   	  <tr>
      
        	<td width="126" height="180"><img width="300" height="200"src="<?=$row['picture']?>" /></td>
            <td width="494" bgcolor="#01A2DE">
			<table width="356" border="0" bgcolor="#01A2DE">
              <tr>
                <td width="170" bgcolor="#01A2DE">Student Name</td>
                <td width="133"><b>
                  <?=$row['name_stud']?>
                </b></td>
              </tr>
              <tr>
                <td bgcolor="#01A2DE" style="height: 32px">password</td>
                <td style="height: 32px"><b>
                  <?=$row['password']?>
                </b></td>
              </tr>
              <tr>
                <td bgcolor="#01A2DE">plique</td>
                <td><b>
                  <?=$row['plaque']?>
                </b></td>
              </tr>
              </table>
                
              </p>
		  </td>
		</tr>
        <tr><td colspan="2"><hr size="3" /></td>
        <?php } ?>
    </table>
</div>
</body>
</html>
