<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>

     
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
  
   <div class="column1">
   
        <section>
            <h1>Zaynab's website</h1>
            <p>Student at QMUL EECS 2024 admission  230325337</p>
            
        </section>
        <!--beginning of header-->
        <header>
            <section >
                <!--beginning of navigation-->
                    <nav>
                    <h2>my links</h2><hr>
                    <a href = "viewBlog.php">view blog posts</a><br>
                    <a href="login.php">blog login</a><br>
                    <a href="https://github.com/Khan1021">gitHub</a><br>
                    </nav> 
                    <article>

                    <h2></h2><hr><!--the header with a following hr allow for the white horizontal line break-->
                    <h2>Summary</h2><hr>
                    <p>
                        hello there!<br>
                        My name is Zaynab A Khan.<br>
                        I am currently in my first year at QMUL EECS studying computer science with industrial year
                        <br>
                        Please click <a href = "aboutMe.html">here</a> to see more about me.
                    </p>
                    </article>
            </section>

            <!--my profile photo-->
            <div  id="box5">
                <img src="images for index/pfp.png" alt="Profile">
               <p>student at qmul</p>
            </div>
        </header>
    </div>
    <!--end of column1 class-->

    <!--beginning of main-->
    <main class="container">
        <div class="box" id="box1">
            <h2>My qualifications/experience</h2>
            <p>I have experience programming in Java,python,javascript,html and css.<br>
                I currently enjoy html and css as you can express yourself in more than just practical means.<br>
                For example, when i did python it was mainly for data related projects during my tenure at a data firm.
                please find <a href="__Zaynab-Khan-CV.docx">my cv</a>  attached 
                <br>
                <br>
                <h3>Brief over view of my qualifications</h3>
                <ul>
                    <li><b>-</b> A levels: A A A</li>
                    <li><b>-</b> javascript and data algorithms accredited by FCC</li>
                    <li><b>-</b> Scientific Computing with Python accredited by FCC </li>
                    <li><b>-</b> studying for a BS in Computer Science</li>
                  
                </ul>

            </p>
        </div>
        
        <!--experience and brief overview-->
        <div class="box" id="box2">
            <article>
            <h2>Experience brief overview</h2>
           
        
            <!--a description list-->
            <dl>
                <dt></li>data intern at ElastaCloud</li></dt>
                <dd><b>-</b> this entailed using Python to manipulate data</dd>
                <dt>Fujitsu work experience</dt>
                <dd><b>-</b>  I actively participated in presentations and activities focused on industry concepts</dd>
              
                
            </dl>
            </article></div>

    </main>


    <!--beginning of the footer-->
    <div class="column2">
        <footer id="box4" >
            <h2>contact information</h2><hr>
            telephone number:
                <br>
                email:<a href="mailto:zaynabkhan982@gmail.com">zaynabkhan982@gmail.com</a><small></small>
                <br>
                <h2>my socials</h2><hr>
                Please find my linkedIn <br>
                <a href="https://www.linkedin.com/in/zaynab-khan-2273a8283/"> <img src="images for index/LinkedIn_logo_initials.webp"></a> 
                
     
        </footer>
         <!--end of the footer-->
      

        <div  id="box6">
    
            <h2>Areas of Interest</h2><hr/>
            <h3>My interests include:</h3>
           

            
            <!--a description list-->
            <dl>
                <dt></li>Videogames</li></dt>
                <dd><b>-</b> I enjoy first person shooters and RPGs</dd>
                <dt>Reading</dt>
                <dd><b>-</b>I enjoy reading from fiction</dd>
                <dt>Sports</dt>
                <dd><b>-</b>An avid Manchester United fan</dd>
                <dt>Food</dt>
                <dd><b>-</b>I enjoy cooking and trying new foods</dd>
                
            </dl>
        </div>


        <section id="box3">
            author: Zaynab Khan
            &copy; copyright reserved
            <a href="mailto:ec23257@qmul.ac.uk"><small>ec23257@qmul.ac.uk</small></a>
        </section>
        
        
   

</body>
</html>