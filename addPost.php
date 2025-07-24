<?php
//start session, stores and accesses user data
session_start();



// Redirect if the user is not logged in

            //checking if user is logged in
if (!isset($_SESSION['user_id'])) {

            //if not, redirect to login page
    header("Location: login.php");

    //exit to ensure that no code below runs after the redirect
    exit();
}


// Check if the user came back from the previewPage with the intent to edit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'edit') {
    $title = $_POST['title'];
    $content = $_POST['content'];
}



// Database connection variables
$servername = "127.0.0.1";
$username   = "root";
$password   = "";
$dbname     = "phase2";



// This code runs when the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get values from the form
    $title   = $_POST['title'];
    $content = $_POST['content'];
    $action = $_POST['action'];


    //if user clicked the "preview" button 
    if($action === 'preview'){

        //saves title and content to session variables
        $_SESSION['preview_title'] = $title;
        $_SESSION['preview_content'] = $content;

        //redirect to previewPost.php page
        header("Location: previewPost.php");

        //stops further code from running after the redirect
        exit();
    }


    //uploading post logic 
    if($action === 'upload'){
        

    // Getting user_id from the session
    //ensures that the post is associated with the corect user from the users table
    $user_id = $_SESSION['user_id'];

    // Creating connection 
    $conn = new mysqli($servername, $username, $password, $dbname);


    // Checking connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // Inserting the post into the database with NOW() to set the timestamp
    $sql = "INSERT INTO posts (user_id, title, content, created_at)
            VALUES ('$user_id', '$title', '$content', NOW())";


    // Execute the query and give feedback to the user
    if ($conn->query($sql) === TRUE) {
        header("Location: viewBlog.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addPost</title>
    
    <!--link to css-->
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="addPostStyle.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!--javascript attached-->
    <script src="addPost.js" defer></script>


</head>
<body>

    <section class="container">
        <h2>welcome to my Blog</h2><br>
        <form action="" method="post">
            
            <!--title-->
            <label for="title"> Please enter a title</label>
                <input type="text" id="title" name="title" placeholder="Title of your blog post"
                value="<?php echo isset($title) ? htmlspecialchars($title) : ''; ?>"><br>


            <!--text box-->
            <label for="textBox"> Please write below</label>
                <textarea id="textBox" name="content" placeholder="What's on your mind?"><?php
                echo isset($content) ? htmlspecialchars($content) : '';
                ?></textarea>


            <!--submit button-->
            <div class="buttonContainer">
                <input type="submit" name="action" class="button" value="upload" >

                <!--reset button-->
                <button type="button" name="reset" class="button" id="reset">reset</button>

                <!--preview button -->
                <input type="submit" name="action" value = "preview" class="button" id="preview">

            </div>
        </form>
    </section>


    <div class="container2">
        <footer>
            <hr>
            author: Zaynab Khan
            &copy; copyright reserved
            <a href="mailto:ec23257@qmul.ac.yk">ec23257@qmul.ac.uk</a><small>
        </footer>
</div>
</body>
</html>