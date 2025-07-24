<?php

session_start();


//database connection details
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "phase2";

//connecting to database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//sql query to get all posts and their authors
//fetches from posts table and joins with users table to get author names
//the posts table has a foreign key user_id that references the id in the users table
$sql = "SELECT p.title, p.content, p.created_at, u.firstName, u.lastName
        FROM posts AS p
        JOIN users AS u ON p.user_id = u.id";

$result = $conn->query($sql);



// Fetch all rows into an array ($posts)
$posts = array();
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}




// Sort the posts array in descending order by the created_at field using PHP (most recent first)

usort($posts, function($a, $b) {
    $timeA = strtotime($a['created_at']);
    $timeB = strtotime($b['created_at']);
    // For descending order, we subtract timeA from timeB:
    if ($timeA == $timeB) return 0;
    return ($timeB < $timeA) ? -1 : 1;
});




//building archive month list

//generates a list of months from the posts
$months = [];

foreach ($posts as $post) {
    $monthKey = date("Y-m", strtotime($post['created_at'])); // e.g., "2025-04"
    $monthName = date("F Y", strtotime($post['created_at'])); // e.g., "April 2025"
    $months[$monthKey] = $monthName;
}

ksort($months); // Sort by date ascending

$selectedMonth = $_GET['month'] ?? '';




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewBlog</title>

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="viewBlogStyle.css">
    <script src="viewBlog.js" defer></script>

</head>
<body>
    <header class="blog-header">

        <div class="header-leftSide">
        <h1>Blog</h1>
        </div>


        <!--check if user is logged in-->
        <?php if (isset($_SESSION['user_id'])): ?>

            <nav class="header-rightSide">
                <a class="addPostLink" href="addPost.php">Add Post</a>
                <a class="logoutLink" href="logout.php">Logout</a>
            </nav>

        <?php else: ?>

            <nav class="header-rightSide">
                <a class="addPostLink" href="login.php">Add Post</a>
            </nav>
            
        <?php endif; ?>
    </header>


    <main class="blog-container">

        <!-- Archive Month Filter -->
        <form method="get" action="viewBlog.php" class="month-filter-form">
            <label for="month" class= "month-filter-label">Filter by Month:</label>
        
            <!-- Month Dropdown -->
                <select name="month" id="month" class="month-filter-select">
                <option value="">All</option>
                <?php foreach ($months as $key => $monthName): ?>
                    <option value="<?php echo $key; ?>" <?php if ($key=== $selectedMonth) echo 'selected'; ?>>
                        <?php echo $monthName;?>
                    </option>
                <?php endforeach; ?>
            </select>
        </form>



    <!-- this is for the extra feature of filtering posts by month -->

    <?php
    
        //checking if posts in $posts array, if true then loop through them
        if (count($posts) > 0) {

        //loops through every post in the $posts array
        foreach ($posts as $post) {

            //converts the post's timestamp into a month key 
            $postMonth = date("Y-m", strtotime($post['created_at']));

            // Check if the selected month matches the post's month
            if ($selectedMonth && $selectedMonth !== $postMonth) {
                continue; // Skip this post
            }
        

            // Format the date as desired. For example: "26th December 2018, 5:49 AM UTC"
            $timestamp = strtotime($post['created_at']);
            $formattedDate = date("jS F Y, g:i A \U\T\C", $timestamp);
            
            // outputs HTML to render the post
            echo '<article class="blog-post">';
            echo '  <div class="post-header">';
            echo '    <h2 class="post-title">' . htmlspecialchars($post['title']) . '</h2>';
            echo '    <p class="post-date">' . $formattedDate . '</p>';
            echo '  </div>';
            
            //display the author name
             echo '<p class="post-author">By ' . htmlspecialchars($post['firstName'] . ' ' . $post['lastName']) . '</p>';
            echo '  <p class="post-content">' . nl2br(htmlspecialchars($post['content'])) . '</p>';
            echo '  <hr>';
            echo '</article>';
        }


    //if no posts in database, or none matched the filter
    } else {
        echo '<p>No posts found.</p>';
    }
        

    $conn->close();
    ?>
    </main>




</body>
</html>
