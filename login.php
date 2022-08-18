<?php  

include "config.php";
       $message=""; 
           if(isset($_POST['btn'])) 
           {       
            
     $query = mysqli_query($conn,"SELECT * FROM track WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'"); 
             $row  = mysqli_fetch_array($query);  
                    if(is_array($row))
                     {         $_SESSION["email"] = $row['email'];   
                          $_SESSION["password"] = $row['password']; 
                          $_SESSION['id'] = $row['id'];
                                } else 
                                {          $message = "Invalid email or Password!";  
                                 }   

                                   }  
                                      if(isset($_SESSION["email"]))
                                    {        

                                        $query = mysqli_query($conn,"SELECT * FROM track WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'"); 
                                        if($query){
                                            header("location:users.php");
                                        }
                                        else{
                                            header("location:login.css");
                                        }
                                 }     
					?> 
                                    
								
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="new.css">
	<link rel="icon" type="image/x-icon" href="images/messi.png">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<section class="form signup">
		<header>Tracker app</header>
		<form method="POST">
				<div class="field input">
					<label>Email Adrress</label>
					<input type="email" name="email" placeholder="enter Email Adrress">
					
				</div>
				<div class="field input">
					<label>Password</label>
					<input type="password" name="password" placeholder="enter your Password">
				</div>
				<div class="field button">
					<input type="submit" name="btn">
                    <?php
			echo $message;
		?>         
					
				</div>
		</form>
		<div class="link">Not yet signed up? <a href ="#">Sign up</a></div>
		</section>
	</div>
</body>
</html>