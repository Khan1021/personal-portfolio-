<?php
session_start();



// Get the preview data

//using the null coalescing operator to check if the session variables are set
//if 'preview_title' and 'preview_content' aren't set, default to empty ('')
$title = $_SESSION['preview_title'] ?? '';
$content = $_SESSION['preview_content'] ?? ''; 



// If no preview data, redirect back to addPost.php
if (!$title || !$content) {
    header("Location: addPost.php");
    exit;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>previewPage</title>

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="viewBlogStyle.css">
</head>
<body>

    <header class="blog-header">
        <div class="header-leftSide">
            <h1>Blog</h1>
        </div>
        <nav class="header-rightSide">
            <a class="addPostLink" href="addPost.php">Back to Edit</a>
            <a class="logoutLink" href="logout.php">Logout</a>
        </nav>
    </header>


    <main class="blog-container">
        <h2>Preview blog post</h2>


        <article class="blog-post">
            <div class="post-header">

                <!--htmlspecialchars() used to escape HTML  tags to user input doesn't break page-->
            
                <h2 class="post-title"><?php echo htmlspecialchars($title); ?></h2>
                <p class="post-date">Previewing...</p>

            </div>

            <!--nl2br() function converts new line characters to <br> tags for proper formatting-->

            <p class="post-content"><?php echo nl2br(htmlspecialchars($content)); ?></p>

            <hr>
        </article>

        <!--Hidden inputs send the title and content back to addPost.php when either button is clicked-->

        <form method="post" action="addPost.php" style="text-align: center;">
            <input type="hidden" name="title" value="<?php echo htmlspecialchars($title); ?>">
            <input type="hidden" name="content" value="<?php echo htmlspecialchars($content); ?>">

            <button type="submit" name="action" value="upload" class="button">Upload</button>
            <button type="submit" name="action" value="edit" class="button">Edit</button>
        </form>
    </main>
    
</body>

</html>