<!DOCTYPE html>
<html>
 
<head>
    <title>Admissions Request Info</title>
</head>
 
<body> 
    <center>
        <?php
 
        
        $conn = mysqli_connect("localhost", "root","", "mildcare");
         
        
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

		
        $Parent_name =  $_REQUEST['Parent_name'];
        $Child_name = $_REQUEST['Child_name'];
        $Email = $_REQUEST['Email'];
        $Telephone =  $_REQUEST['Telephone'];
        $Interest= $_REQUEST['Interest'];
        $Child_Date_of_birth = $_REQUEST['Child_Date_of_birth'];
        $Message1 =  $_REQUEST['Message1'];
        
              
        
        $sql = "INSERT INTO admission_request_info (Parent_name,Child_name,Email,Telephone,Interest,Child_Date_of_birth,Message1)  VALUES ('$Parent_name',
            '$Child_name', '$Email', '$Telephone', '$Interest', '$Child_Date_of_birth', '$Message1')";
         
       if(mysqli_query($conn, $sql)){
            echo "<h3>Request Submitted, Wait for feedback from our support team.";
            
 
           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>