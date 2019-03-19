<?php


    include_once('connection.php');

   if(isset($_POST['save']))
 			{

 				
               // var_dump($db) ;
                var_dump($fname =$_POST['first_name']) ;
               var_dump($fname = mysqli_real_escape_string($db, $fname)) ;
			// var_dump($fname =mysqli_real_escape_string($db,$_POST['first_name']))	;

 			var_dump($lname =$_POST['last_name'])	;
             var_dump($lname = mysqli_real_escape_string($db, $lname));

 				$location =$_POST['Reqlocation_name'];
                 var_dump($location = mysqli_real_escape_string($db, $location));

 				$mobile =$_POST['mobile'];
                 var_dump($mobile = mysqli_real_escape_string($db, $mobile));

 				$bagNum =$_POST['bagNum'];
                 var_dump($bagNum = mysqli_real_escape_string($db, $bagNum));
 				
 			

 				if (!$fname || !$lname || !$location || !$mobile || !$bagNum ) {
 					echo "Please fill all fields";
 				}
 				else{

                 var_dump($sql = "INSERT INTO purple (firstname,lastname,mobile,location,numOfBags) VALUES ('$fname','$lname','$mobile','$location',$bagNum)")      ;      
        
                   


               var_dump($result= $db->query($sql) )  ;


                if($result ){
                    echo "<script type='text/javascript'>alert(\"Upload is successful\");
                    window.location.href='index.html';
                    </script>" ;
                }
                else{
                    echo "SOMETHING WENT WRONG";

                }

 					
        }
    }

    else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
   
    
 			


 			
				


 			 

?>


