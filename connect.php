<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body> 
    <center>
        <?php
 
        
        $conn = mysqli_connect("localhost", "root","", "mildcare");
         
        
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

		
        $First_name =  $_REQUEST['First_name'];
        $Last_name = $_REQUEST['Last_name'];
        $Username = $_REQUEST['Username'];
        $Class =  $_REQUEST['Class'];
        $Sex = $_REQUEST['Sex'];
        $Date_of_birth= $_REQUEST['Date_of_birth'];
        $Guardian =  $_REQUEST['Guardian'];
        $Telephone = $_REQUEST['Telephone'];
        $Email= $_REQUEST['Email'];
        $Address1 = $_REQUEST['Address1'];
        $Occupation =  $_REQUEST['Occupation'];
        $Password1 =  $_REQUEST['Password1'];
        $Password2 =  $_REQUEST['Password2'];
              
        
        $sql = "INSERT INTO student (First_name,Last_name,Username,Class,Sex,Date_of_birth,Guardian,Telephone,Email,Address1,Occupation,Password1,Password2)  VALUES ('$First_name',
            '$Last_name', '$Username', '$Class', '$Sex', '$Date_of_birth', '$Guardian', '$Telephone', '$Email', '$Address1', '$Occupation', '$Password1', '$Password2')";
         
       if(mysqli_query($conn, $sql)){
            echo "<h3>Registration successfully.";
            
 
           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        
        mysqli_close($conn);
        ?>
    </center>
    
</body>
 
</html>