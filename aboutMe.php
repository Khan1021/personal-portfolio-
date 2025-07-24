<?php
session_start(); // Start the session or continue if already active

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aboutMe</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="aboutme.css">
    <!--google font below-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sigmar&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "container">
    <header>
        
            <div class="box" id="box1">
               
                <h1>
                    hello there!
                </h1>
            </div><!--end box1-->
            <hr>
    </header>
   
        
          

    <main>
        <div class="box" id="box3">
            I thoroughly enjoy videogames
            here are my top games ranked

            <table>
                <caption>My Top 5 games of all time</caption>
                <thead>
                    <tr>
                        <th>rank</th>
                        <th  scope="column 1">Game</th>
                        <th  scope="column 2">poster</th>
                        <th  scope="column 3" colspan="4">characters</th>
                     </tr>
                </thead>
        
                <tbody>
        
                    <!--row for number 1 movie-->
                    <tr>
                        <td>1</td>
                        <td>black ops 1</td>
                        <td><img src="images_for_about_me/black ops/CoD_Black_Ops_cover.png" alt="black ops 1 poster"></td>
        
                        <!--nested table incoming-->
                            
                        <td>
                            <table>
                                
                                <tr>
                                    <td><a href="https://callofduty.fandom.com/wiki/Viktor_Reznov">
                                        <img src="images_for_about_me/black ops/reznov.jpeg" alt="image of Reznov ">
                                    </a>
                                    <br>
                                    Reznov
                                    </td>
                                    <td><a href="https://callofduty.fandom.com/wiki/Frank_Woods">
                                        <img src= "images_for_about_me/black ops/woods.webp" alt="image of Frank Woods">
                                    </a>
                                    <br>
                                    Frank Woods
                                    </td>
                                </tr>
                             
                            </table>
                        </td>
               
                 
                    </tr>
        
                    <!--row for number 2 movie-->
                    <tr>
                        <td>2</td>
                        <td>black ops 2 </td>
                        <td> <img src="images_for_about_me/black ops/Call_of_Duty_Black_Ops_II_box_artwork.png" alt="poster for black ops 2"></td>
        
                          <!--nested table incoming-->
                            
                          <td>
                            <table>
                                
                                <tr>
                                    <td><a href="https://callofduty.fandom.com/wiki/Jonas_Savimbi">
                                        <img src="images_for_about_me/black ops/savimbi.jpeg" alt="image of cast of Jonas Savimbi">
                                    </a>
                                    <br>
                                    Jonas Savimbi    
                                </td>
                                    <td><a href="https://www.imdb.com/name/nm0000552/">
                                        <img src= "images_for_about_me/black ops/menendez.webp" alt="image of Raul Menendez">
                                    </a>
                                    <br>
                                    Raul Menendez    
                                </td>
                                </tr>
                             
                            </table>
                        </td>
        
                    </tr>
        
                    <!--row for number 3 movie-->
                    <tr>
                        <td>3</td>
                        <td>Red dead redemption 2</td>
                        <td><img id="redDeadPoster"src="images_for_about_me/red dead/red dead redemption poster.avif" alt="poster for Red Dead Redemption 2"></td>
                        
                           <!--nested table incoming-->
                            
                           <td>
                            <table>
                                
                                <tr>
                                    <td><a href="https://reddead.fandom.com/wiki/Arthur_Morgan">
                                        <img src="images_for_about_me/red dead/arthur morgan.jpeg" alt="image of cast for Arthur Morgan">
                                    </a>
                                <br>
                                Arthur Morgan
                                </td>
                                    <td><a href="https://reddead.fandom.com/wiki/Sadie_Adler">
                                        <img src= "images_for_about_me/red dead/sadie adler.jpeg" alt="image of Sadie Adler">
                                    </a>
                                <br>
                                 Sadie Adler
                                </td>
                                </tr>
                             
                            </table>
                        </td>
        
                    </tr>
        
                    <!--row for number 4 movie-->
                    <tr>
                        <td>4</td>
                        <td>Assassins Creed series</td>
                        <td><img src="images_for_about_me/assassins creed/assassins creed 4 poster.jpeg"></td>
                      
                        <!--nested table incoming-->
                        
                        <td>
                            <table>
                                <tr>
                                <td><a href="https://assassinscreed.fandom.com/wiki/Ezio_Auditore_da_Firenze">
                                    <img src="images_for_about_me/assassins creed/ezio.jpeg" alt="image of cast for Ezio_Auditore_da_Firenze">
                                </a>
                            <br>
                            Ezio 
                            </td>
                                <td><a href="https://assassinscreed.fandom.com/wiki/Edward_Kenway">
                                    <img src= "images_for_about_me/assassins creed/edward kenway.avif" alt="image of Edward Kenway">
                                    </a>
                            <br>
                            Edward Kenway
                                </td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
        
        
                    <!--row for number 5 movie-->
                    <tr>
                        <td>5</td>
                        <td>Mortal Kombat X</td>
                        <td><img src="images_for_about_me/MKX/mkx poster.jpg"></td>
        
                        <!--nested table incoming-->
                        
                        <td>
                            <table>
                                
                                <tr>
                                    <td><a href="https://mortalkombat.fandom.com/wiki/Hanzo_Hasashi">
                                        <img src="images_for_about_me/MKX/scorpian.jpg" alt="image of Scorpian">
                                    </a>
                                <br>
                                Scorpion
                                </td>
                                    <td>
                                        <a href="https://villains.fandom.com/wiki/Scorpion_(Mortal_Kombat)">
                                            <img src="images_for_about_me/MKX/sub zero.jpeg" alt="image of sub zero">
                                        </a>
                                        <br>
                                        Sub-zero
                                    </td>
                                    </a>
                                <br>
                                    
                                </td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
       
          
 
    </main>
    </div>
    <!--end container box-->

    <footer>
        <hr>
        author: Zaynab Khan
        &copy; copyright reserved
        <a href="mailto:ec23257@qmul.ac.yk">ec23257@qmul.ac.uk</a><small>
    </footer>
</body>
</html>

