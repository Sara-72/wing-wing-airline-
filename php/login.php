
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<title>Wing Wing | Log in</title>
<style>
    .error{
            padding: 20px;
            color: rgb(82, 0, 0);
            background-color:rgb(255, 195, 195);
            display: block;
            margin:0.1px;
            border-radius: 6px;
            width: 100%;
        }
        #login{
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
    
    }
    #login:hover{
        background-color: #003b73;
    color: gold;
    }
    #admin-login{
    color: #003b73;
    text-decoration: none;
    line-height: 5rem;
}
    #admin-login:hover{
        color: #001e3a;
        text-decoration: underline;
        font-weight: 450;

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


    <div class="space"><br><br></div>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="post">
                    <h2>Login</h2>
                    <?php
        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email' ";
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user){
                if(password_verify($pass,$user["password"])){
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index (1).html");
                    die();
                }else{
                    echo "<div class='error'>Password is not correct</div>";
                }

            }else{
                echo "<div class='error'>Email does not exist</div>";
            }

        }



        ?>
                    <div class="inputbox"> <i class="fa fa-envelope"></i><input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="inputbox"> <i class="fa fa-lock"></i><input type="password"
                            required name="pass"> <label>Password</label> </div>
                            <input type="submit" value="Log in" name="login" id="login"> 
                    <div class="register">
                        <p>Don't have an account? <a href="register.php">Sign Up</a></p>
                        <a href="admin/index.php" id="admin-login"><p>Log in for admin</p></a>
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