<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student data</title>
</head>
<style>
    .ladsen{
        border: 1px solid grey;
        border-radius: 20px;
        margin-left: 200px;
        width: 75%;
        
        padding-bottom: 30px;
    }
    h1{
        text-align: center;
    }
    form{
        
        border: 1px solid grey;
        border-radius: 25px;
        width: 30%;
        padding: 50px;
        margin-left:350px;
    }
    h2{
        text-decoration: underline;
        color: red;
    }
</style>
<body>
    <div class="ladsen">
        <h1><b>WELCOME TO NAM-BRAZZERZ STUDENTS' B.R.S<b></h1>
        <form action="connect.php" method="REQUEST">
            <h2><b>Student Biodata Registration<b></h2>
            First_Name: <input type='text' name='first_name'><br><br>
            Last_Name:  <input type='text' name='last_name'><br><br>
            Regno: <input type='numeric' name='regno'><br><br>
            Address1: <input type='text' name='address1'><br><br>
            Course: <input type='text' name='course'><br><br>
            Age: <input type='numeric' name='age'><br><br>
            Home District:<input type='text' name='home_d'><br><br> 
            Hobbies:
            <input type='radio' name='hobbies' value='swimming'>Swimming
            <input type='radio' name='hobbies' value='eating'>Eating
            <input type='radio' name='hobbies' value='sleeping'>Sleeping
            <input type='radio' name='hobbies' value='dancing'>Dancing
            <input type='radio' name='hobbies' value='football'>Football<br><br>
            Sex:
            <input type='radio' name='sex' value='female'>Female
            <input type='radio' name='sex' value='male'>Male
            <input type='radio' name='sex' value='other'>other<br><br>
            <input type="submit" name="Submit">
        </form>
    </div>
</body>
</html>