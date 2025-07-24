<?php
    session_start();



    //setting database connection variables for db called "phase2"
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="phase2";



    //connect to the database, if script stops then shows error
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }



      
    //handling login

    //initilasing login error message
    $loginError = "";


    //this only runs when the log in form is submitted (POST request)

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //getting the email and password from the form and trimming any white space
        $email = trim($_POST['email']);
        $userPassword = trim($_POST['userPassword']);


        //checking for a user with the entered email and password
        $sql = "SELECT * FROM users WHERE email='$email' AND  password='$userPassword'";
        $result = $conn->query($sql);

        //if matching user is found then we save the user ID and firstname in the session
        //and redirect to the addPost.php page
        if($result && $result->num_rows ==1){
            $row = $result ->fetch_assoc();
            $_SESSION['user_id']=$row['id'];
            $_SESSION['firstName']=$row['firstName'];
            header("Location: addPost.php");
            exit();
        }


        //if no matching user is found then error message initialisd before is used
        else{
            $loginError = "Invalid email or password. Please try again.";
        }
    }   


    //closing DB connection
    $conn->close();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet"href="./blog.css">
    <script src="login.js" defer></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>
    <body>
    
    <!--if user is logged in, show welcom message and logout link-->

    <?php if (isset($_SESSION['user_id'])):?>
    <div class = "container">

        <h1>Welcome back</h1>

        <form method="post">
            <a href="logout.php">Logout</a>
        </form>

    </div>
      

    <!--if user is not logged in, show login form-->

    <?php else:?>
        <div class="column"> 

        <header>
            <h1>Login</h1>
        </header>
        
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                
                <label for="email">Email:<br></label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="userPassword">Password:<br></label>
                <input type="password" id="userPassword" placeholder = "Enter Password" name="userPassword" ><br>
                <input type="submit" value="submit" id="submit" class="button">

                <br>
                <button name="reset" id="reset" type="button" class="button">Reset</button>
                
            </form>
        

            <!--if login fails, show error message -->

            <?php if (!empty($loginError)):?>
                <p class="error"><?php echo $loginError;?></p>
                
            <?php endif;?>

            </form>

        </div>

    <?php endif;?>

    
    
</body>
</html>