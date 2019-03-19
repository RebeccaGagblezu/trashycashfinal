<?php


    include_once('connection.php');

   if(isset($_POST['save']))
            {

               

                $fname =$_POST['first_name'];
                $fname = mysqli_real_escape_string($db, $fname);

               var_dump($lname =$_POST['last_name']) ;
                $lname = mysqli_real_escape_string($db, $lname);

               var_dump($location =$_POST['location_name']) ;
                $location = mysqli_real_escape_string($db, $location);

               var_dump($mobile =$_POST['mobile']);
                $mobile = mysqli_real_escape_string($db, $mobile);

              var_dump($comment =$_POST['comment'])   ;
                 $comment = mysqli_real_escape_string($db, $comment);
                
                
            

                if (!$fname || !$lname || !$location || !$mobile ) {
                    echo "Please fill all fields";
                }
                else{

                var_dump($sql = "INSERT INTO pick (firstname,lastname,phone,location,comment) VALUES ('$fname','$lname','$mobile','$location','$comment')" );      
        
                   


              var_dump($result= $db->query($sql)) ;


                if($result ){


                    echo "<script language = javascript>
                swal({  title: 'Success',
                 text: 'Your data has been recorded',  
                type: 'success',    
                showCancelButton: false,   
                closeOnConfirm: false,   
                confirmButtonText: 'OK', 
                showLoaderOnConfirm: true, }, 
                function(){   
                    setTimeout(function(){     
                        location = 'index.html';  
                    });
                     });
            </script>";

                    // echo "<script type='text/javascript'>alert(\"Upload is successful\");
                    // window.location.href='index.html';
                    // </script>" ;
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


