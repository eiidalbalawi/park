<?php
// ط³ظ‡ظ„ ط§ظ„ط­ظٹط§ط© طھط³ظ‡ظ„
//`trainee_name`, `n_id`, `c_id`, `dob`, `mobile`, `email`, `city`, 
//`picture`, `loction`, `depatment`, `specialty`, `hod`, `c_name`, `c_mobile`, `c_city`, `c_loction`

include('config.php');

// طھط³طھظ‚ط¨ظ„ ط¬ظ…ظٹط¹ ط§ظ„ط¨ظٹط§ظ†ط§طھ ط§ظ„ظ‚ط§ط¯ظ…ط© ظ…ظ† ط§ظ„ظ†ظ…ظˆط°ط¬ ط§ظ„ط³ط§ط¨ظ‚ ط¹ظ† ط·ط±ظ‚ ط§ظ„ط¨ظˆط³طھ 
	 $range =$_POST['range'];
     $date_par=$_POST['date_par'];
	 $Today=$_POST['Today'];
	
	
	 
	 
       // ط§ظ„ط§ط¯ط®ط§ظ„ ط¨ظ‚ط§ط¹ط¯ط© ط§ظ„ط¨ظٹط§ظ†ط§طھ 
          $addQuery=mysqli_query($mysqli,"INSERT into parking VALUES('','$range','','$date_par','$Today')");
		  
		  
          if(!$addQuery){
            echo "<div class='worning'><div class='worning1'></div><h1>Worrning:</h1>There are some problems in the adding, Please Try again later." ;
            echo "<br/><br/><br/><a href='javascript:history.go(-1)' class='back'>Go Pack</a></div></div></div>";
          }else{
             echo "<div class='correct'><div class='correct1'></div><h1>Success:</h1>Your information add corectly" ;
            echo "<br/><br/><br/><a href='javascript:history.go(-1)' class='back'>Go Pack</a></div></div></div>";
      //    }    
?>
</p>
	<form action='upload_image2.php' method='post' enctype='multipart/form-data'>
    <input type='hidden' name='picture' value='<?php echo $range?>' readonly='readonly'>
<label for='file'>My Photo :</label> <input type='file' name='picture' id="img" />
<input type='submit' value='Upload' />
</form>
  <?php } ?>
