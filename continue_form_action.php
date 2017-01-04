<?php include('config.php');

 //comment`, `email`, `subject
	 $comment=$_POST['comment'];
     $email=$_POST['email'];
	 $subject=$_POST['subject'];
	
	 
	 
       //`comment`, `email`, `subject`SELECT * FROM `continue` WHERE 1
          $addQuery=mysqli_query($mysqli,"INSERT into continue VALUES('','$comment','$email','$subject')");
		  
		  
          if(!$addQuery){
            echo "<div class='worning'><div class='worning1'></div><h1>Worrning:</h1>There are some problems in the adding, Please Try again later." ;
            echo "<br/><br/><br/><a href='javascript:history.go(-1)' class='back'>Go Pack</a></div></div></div>";
          }else{
             echo "<div class='correct'><div class='correct1'></div><h1>Success:</h1>Your information add corectly" ;
            echo "<br/><br/><br/><a href='javascript:history.go(-1)' class='back'>Go Pack</a></div></div></div>";
          }    
?>
