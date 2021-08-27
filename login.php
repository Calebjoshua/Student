<?php
        // put your code here
		
        if(isset($_POST['submit'])){
	    if(isset($_POST['RollNumber'])){
        $StudentNumber = $_POST['RollNumber'];	}
        $Password = $_POST['Password'];
        include ('connectioString.php');
			$query = "SELECT * FROM `students1` WHERE R_Number= '$StudentNumber' and Password='$Password'";
                        $result = mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                echo '<script>
                                alert("login Successful");
                                window.location.href="index.html"</script>';
                            }
                            else{ 
                                echo '<script>
                                alert("Enter a valid data");
                                window.location.href="index.html"</script>';
                            }
                            
                        }                     
                        else{
                            echo '<script>
                            alert("Invalid");
                            window.location.href="index.html";
                            </script>';
                        }
	      }
               
        
        
        
        
        
        ?>