<?php

include('config.php');

     $name_stud=$_POST['name_stud'];
     $password=$_POST['password'];
	 $plaque=$_POST['plaque'];
     $id=$_POST['id'];
	
	 
	 
     
          $addQuery=mysqli_query($mysqli,"INSERT into student VALUES('','$name_stud','','$password','$plaque','$id')");
		  
		  
          if(!$addQuery){
            echo "<div class='worning'><div class='worning1'></div><h1>Worrning:</h1>There are some problems in the adding, Please Try again later." ;
            echo "<br/><br/><br/><a href='javascript:history.go(-1)' class='back'>Go Pack</a></div></div></div>";
          }else{
             echo "<div class='correct'><div class='correct1'></div><h1>Success:</h1>Your information add corectly" ;
            echo "<br/><br/><br/><a href='javascript:history.go(-1)' class='back'>Go Pack</a></div></div></div>";
      //    }    
?>
	<form action='upload_image.php' method='post' enctype='multipart/form-data'>
    <input type='hidden' name='picture' value='<?php echo $id ?>' readonly='readonly'>
<label for='file'>My Photo :</label> <input type='file' name='picture' id="img" />
<input type='submit' value='Upload' />
</form>
  <?php } ?>
