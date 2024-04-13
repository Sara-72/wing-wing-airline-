
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/register.css">

<title>Wing Wing | Sign up</title>
<style>
    .error{
        padding: 20px;
        color: rgb(82, 0, 0);
        background-color:rgb(255, 195, 195);
        display: block;
        margin:0.1px;
        border-radius: 6px;
        width: 90%;
        margin-left: 30px;
    }
    .success{
        padding: 20px;
        color:rgb(19, 122, 19) ;
        background-color:rgb(170, 255, 170);
        display: block;
        margin:0.1px;
        border-radius: 6px;
        width: 90%;
        margin-bottom: 15px ;
        margin-left: 30px;
    }
    #signUp{
        width: 300px;
    height: 40px;
    border-radius: 40px;
    background-color: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
    transition: 0.3s;
    background-color: gold;
    color: #003b73;
    position: relative;
    left:170px;
    }
    #signUp:hover{
        background-color: #003b73;
    color: gold;
    }
    body{
        overflow-x: hidden;
    }
</style>
</head>
<body>
    <header>
        <div id="logo">
            <img src="images/Wing_Wing-removebg-preview.png">

        </div>
        <div id="nav">
            <ul>
                <li><a href="index (1).html"><span class="material-symbols-outlined" id="home">home</span>Home</a></li>
                <li><a href="about-us.html"><span class="material-symbols-outlined">draw</span>About us</a></li>
                <li><a href="where-to-fly.php"><span class="material-symbols-outlined">travel</span>Where to fly</a></li>
                <li><a href="contact.html"><span class="material-symbols-outlined">call</span>Contact us</a></li>
            </ul>
        </div>
        <a id="sign" href="register.php">Sign up</a>
    </header>



    <div class="space"><br><br><br><br><br></div>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="register.php" method="post">
                    <h2>Sign Up</h2>
                    <?php

if(isset($_POST["signUp"])){
 $firstName = $_POST["fisrtName"];
 $phoneNum = $_POST["number"];
 $lastName = $_POST["lastName"];
 $pass = $_POST["password"];
 $email = $_POST["email"];
 $confirmPass = $_POST["confirmPass"];

 $passwordHash = password_hash($pass,PASSWORD_DEFAULT);

 $errors = array();
 if(empty($firstName) OR empty($phoneNum) OR empty($lastName) OR empty($pass) OR empty($email) OR empty($confirmPass)){
     array_push($errors, "All fields are required");
 }
 if(strlen($pass) < 8){
     array_push($errors, "Password must be at least 8 characters long");
 }
 if($pass !== $confirmPass){
     array_push($errors, "Password does not match");
 }
 require_once "database.php";
 $sql = "SELECT * FROM users WHERE email='$email'";
 $result = mysqli_query( $conn , $sql );
 $rowCount = mysqli_num_rows($result);
 if($rowCount>0){
     array_push($errors,"Email already exists");
 }
 if(count($errors)>0){
     foreach($errors as $error){
         echo "<div class='error' >$error</div><br>";
     }
 }
 else{
     $sql = "INSERT INTO users (first_name,last_name,email,password,phone_num) VALUES (?,?,?,?,?)";
     $stmt = mysqli_stmt_init($conn);
     $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
     if($prepareStmt){
         mysqli_stmt_bind_param($stmt,"sssss",$firstName,$lastName,$email,$passwordHash,$phoneNum);
         mysqli_stmt_execute($stmt);
         echo "<div class='success'>You are registered successfully</div>";
     }else{
         die("Something went wrong");
     }
 }
}
 ?>


                
                    <div id="group">

                    <div class="inputbox"><input type="text" required name="fisrtName">
                        <label>First Name</label>
                        </div>

                    

                    <div class="inputbox"><input type="email" required name="email">
                        <label>Email</label>
                    </div>


                    <div class="inputbox"><input type="text" required name="lastName">
                        <label>Last Name</label>
                        </div>


                        <div class="inputbox"><input type="password" required name="password">
                            <label>Password</label> 
                        </div>



                    <div class="inputbox"><input type="text" required  name="number">
                        <label>Phone number</label>
                        </div>



                    <div class="inputbox"><input type="password" required name="confirmPass">
                        <label>confirm password</label>
                    </div> 


                    </div>
                    
                    <input type="submit" value="Sign up" name="signUp" id="signUp"> 
                    <div class="register">
                        <p>already have an account? <a href="login.php">login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>



<footer >

    



    

    
    <div id="column">
    <ul class="social-media">
        
        
                        
        <li><a href="#"><i class="bx bxl-facebook"></i></a><span>Facebook</span></li>
        <li><a href="#"><i class="bx bxl-twitter"></i></a><span>Twitter</span></li>
        <li><a href="#"><i class="bx bxl-instagram"></i></a><span>Instagram</span></li>
        <li><a href="#"><i class="bx bxl-youtube"></i></a><span>Youtube</span></li>
    </ul>





    




<div class="footer-bottom">

    <p>&copy;2024 Wing wing All right resreved</p>
</div>

</div>




</footer>

<script>
        window.addEventListener('scroll', function() {
            var header = document.querySelector('header');
            header.classList.toggle('scrolled', window.scrollY > 0);
        });
        
    </script>

</body>
</html>