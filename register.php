        <?php
        // put your code here
		
        $Username = $StudentNumber = $Contact = $Password = $Father = $Mother = "" ;
        
		 if(isset($_POST['insert'])){
        
            $Username = $_POST['StudentName'];
            $StudentNumber = $_POST['RollNumber'];
            $Father = $_POST['FatherName'];
            $Mother = $_POST['MotherName'];
            $Contact = $_POST['PhoneNumber'];
            $Password = $_POST['Password'];
			
            include ('connectioString.php');                   
       
			$query = "INSERT INTO `students1` (Name, R_Number, Father, Mother, Phone, Password) VALUES ('$Username', '$StudentNumber', '$Father', '$Mother', '$Contact', '$Password')";
                        $result = mysqli_query($con,$query);
                        if($result){
			/* echo '<script>
             alert("Registration Succesfull!");
             window.location.href="index.html";
             </script>';*/
             header('location:index.html');
			            }
                                    else
                                    {
                                        echo ("Opps! Enter the valid details"); 
                                    }
		}     
 
        
        ?>