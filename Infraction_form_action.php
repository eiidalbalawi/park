<?php include('config.php');

 
	 $name_infr =$_POST['name_infr'];
     $type_infr=$_POST['type_infr'];
	$Date_infr=$_POST['Date_infr'];
	 $plaque=$_POST['plaque'];
	 
	 
       // ط§ظ„ط§ط¯ط®ط§ظ„ ط¨ظ‚ط§ط¹ط¯ط© ط§ظ„ط¨ظٹط§ظ†ط§طھ 
          $addQuery=mysqli_query($mysqli,"INSERT into infraction VALUES('','$name_infr','type_infr','$Date_infr','','$plaque')");
		  
		  
          if(!$addQuery){
            echo "<div class='worning'><div class='worning1'></div><h1>Worrning:</h1>There are some problems in the adding, Please Try again later." ;
            echo "<br/><br/><br/><a href='javascript:history.go(-1)' class='back'>Go Pack</a></div></div></div>";
          }else{
             echo "<div class='correct'><div class='correct1'></div><h1>Success:</h1>Your information add corectly" ;
            echo "<br/><br/><br/><a href='javascript:history.go(-1)' class='back'>Go Pack</a></div></div></div>";
      //    }    
?>
</p><form action='upload_image1.php' method='post' enctype='multipart/form-data'>
<input type='hidden' name='picture' value='<?php echo $plaque?>'readonly='readonly'>
<label for='file'>My Photo :</label><input type='file' name='picture' id="img" />
<input type='submit' value='Upload' /></form> <?php } ?>
