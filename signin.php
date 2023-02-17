<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student data</title>
</head>
<style>
    body{
        margin: 10px;
        font-size: 16px;
        font-style: catamaran;
        background: white;
    }
    .header{
        color: black;
        background-color: white;
        border: 1px solid white;
        display: flex;
        justify-content: space-evenly;
        height: 50px;
    }
     .menu{
        width: 50%;
        background-size: 450px;
    }
    nav ul{
        list-style: none;
        display: flex;
        justify-content: space-between;
    }
    nav ul li{
        display: flex;
        justify-content: space-evenly;
        flex-direction: right;
        opacity: -9px;
    }
    nav ul li a{
        text-decoration: none;
        color: black;
        display: block;
    }
    nav ul li a:hover{
        background-color: darkred;
        padding-left: 25px;
        padding-right: 25px;
        color: white;
    }
    nav ul li ol li{
        display: none;
    }
    nav ul li:hover ol li{
        display: block;
    }
    .contactbar{
        display:flex;
        justify-content:space-between;
        background-color:darkred;
        border:1px solid darkred;
        height: 40px;
        padding-top:15px;
        padding-left: 20px;
        padding-right: 20px;
    }
    #contact1 a{
        text-decoration:none;
        color:white;
        justify-content:space-around;
    }
    #media1 a{
        text-decoration:none;
        color:white;
        justify-content:space-around;
    }
    .ladsen{
        border: 1px solid grey;
        border-radius: 20px;
        margin-left: 200px;
        margin-top: 20px;
        width: 75%;
        padding-top:30px;
        
        padding-bottom: 30px;
    }
    h1{
        text-align: center;
    }
    form{
        
        border: 1px solid grey;
        border-radius: 25px;
        width: 50%;
        padding-left: 100px;
        padding-bottom: 50px;
        padding-top:30px;
        margin-left:200px;
    }
    h2{
        text-decoration: underline;
        color: darkred;
    }
    Input{
        width: 400px;
        height: 25px;
    }
    .radio{
        width: 20px;
    }
    .button{
        color: white;
        background: blue;
        border: 1px solid blue
    }
    .footer{
            color: black;
            display: block;
            justify-content: space-between;
            margin-left: 5px;
            margin-right: 5px;
            margin-top:10px;
            padding:50px;
            background:whitesmoke;
            
    }
        .footer1{
            display: flex;
            justify-content: space-between;
        }
    .copyright{
        position: relative;
        text-align: center;
        padding-top: 10px;
        color: blue;
    }

</style>
<body>
<div class="header">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a>
                        <ol>
                            
                            <li><a href="teacher.php">Meet The MCPS Team</a></li>
                            <li><a href="">Media</a></li>
                            <li><a href="contact.php">Location and Contact</a></li>
                        </ol>
                    </li>
                    <li><a href="">Admissions</a>
                        <ol>
                            <li><a href="admissions.php"> Admissions: Request Info</a></li>
                            <li><a href="fees.php">Fees Structure 2022-2023</a></li>
                        </ol>
                    </li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    
                </ul>
            </nav>
            
        </div>
       
    </div>

    <div class="contactbar">
        <div id="contact1">
            <a href="">+256-700494641</a>
            <a href="" >info@mildcare.au.ug</a>
        </div>
        <div id="media1">
            <a href="https://www.whatsapp.com<+256 777978727>"><ion-icon name="logo-whatsapp"></ion-icon></a>
            <a href="https://www.twitter.com/@NLadsen/"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.instagram.com/nladsen/"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="https://www.facebook.com/Nkya_Julius_Ladsen/"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://www.youtube.com/Nkya Julius Ladsen/"><ion-icon name="logo-youtube"></ion-icon></a>
            <a href="https://www.tiktok.com/@jladsens...love/"><ion-icon name="logo-tiktok"></ion-icon></a>
        </div>
        
    </div>

    <div class="ladsen">
        <h1><b>WELCOME TO MCPS B.R.S<b></h1>
        <form action="connect.php" method="REQUEST">
            <h2><b>Student Biodata Registration<b></h2>
            <input type='text' name="First_name" placeholder="First Name:"><br><br>
            <input type='text' name="Last_name" placeholder="Last Name:"><br><br>
            <input type='text' name="Username" placeholder="Username:"><br><br>
            <input type='numeric' name="Class" placeholder="Class:"><br><br>
            Sex:<br>
            <input class="radio" type='radio' name="Sex" value='Female'>Female
            <input class="radio" type='radio' name="Sex" value='Male'>Male
            <input class="radio" type='radio' name="Sex" value='Other'>other<br><br>
            <input type='date' name="Date_of_birth" placeholder="Date of Birth:"><br><br>
            <input type='text' name="Guardian" placeholder="Guardian:"><br><br>
            <input type='numeric' name="Telephone" placeholder="Phone:"><br><br>
            <input type='email' name="Email" placeholder="Email:"><br><br>
            <input type='text' name="Address1" placeholder="Address:"><br><br> 
            <input type='text' name="Occupation" placeholder="Occupation:"><br><br>
            <input type='password' name="Password1" placeholder="Password1:"><br><br>
            <input type='password' name="Password2"placeholder="Password2:"><br><br>
            <input class="button" type="submit" name="Submit">
            <p>Already have an account?, <a href="login.php">Drip in.</a></p>
        </form>
    </div>

    <div class="footer">
        <div class="footer1">
            <div>
                <h3>Our School</h3>
                <p>A decade's worth of rich history and<br>
                goodwill with the public schools<br>
                surrounding plus an extensive<br>
                community consultation process<br>
                    prepared us for building.</p>
            </div>
            <hr>
            <div>
                <h3>Resources</h3>
                <p><a href="">Theory of Knowledge</a></p>
            </div>
            <hr>
            <div>
                <h3>Contacts</h3>
                <p>Plot No. 447, Block 213,<br> Kyebando - Kisalosalo Road,<br> Bukoto, Kampala, Uganda. P.O.<br> Box Number 34249, Kampala,<br> Uganda.</p>
                <p>Director’s Office:<br> +256752711909 | Admissions<br> Office: +256 752 711 882</p>
                <p>office@kisu.com |<br> admissions@kisu.com</p>
            </div>
            <hr>
            <div>
                <h3>School Policies & SOPs</h3>
                <ul>
                    <li>Masks, hand sanitizer and<br> Disposable gloves at the<br> reception area of school</li>
                    <li>Used masks and/or Disposable<br> gloves to be placed into<br> provided bins</li>
                    <li>All staff to wear masks while<br> being in contact with each<br> other</li>
                </ul>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="copyright">
            <h5>Copyright of MildCare, 2023</h5>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>