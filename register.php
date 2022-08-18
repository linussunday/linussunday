

<?php

session_start();
include "config.php";
if(isset($_POST['register'])){

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($conn, $_POST['password_confirm']); 
  
        if($password != $password_confirm){
        
        echo " Password does not match";
header("location:register.php?fname=$fname&lname=$lname&email=$email&password_confirm=$password_confirm&error=Password does not match");
    }else if(!preg_match('@[0-9]@',$password) OR !preg_match('@[a-z]@',$password) OR !preg_match('@[A-Z]@',$password) OR !preg_match('@[^\w]@',$password) OR strlen($password) < 8){
        header("location:register.php?name=$fname&lname=$lname&email=$email&password_confirm=$password_confirm&error=Password must be at least 8 characters in length,must contain at least one number,one uppercase,one lowercase and one special character");
    }
    else{

        // change the table name to any of ur choice mine is ecomerce_table cause it will bring error if the table isint found by the server 
$query = mysqli_query($conn, "insert into track (fname,lname,email,password) values ('$fname','$lname','$email','$password')" ) or die(mysqli_error($conn));
                       
                           if(!$query){
                    
                            echo "Registration Failed";

                           }else{
								echo "Registration Successful!";
                                // then direct them to their account acording to the account type they chosse
                                header("location:login.php");
                            }


                        }
                    
            }
    

?>



