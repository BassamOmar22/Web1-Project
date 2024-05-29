<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&display=swap" rel="stylesheet">
    <script src="JS.js"> </script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body style="background-color: white;">

    <!-- Navbar -->
    <header>
        <div class="navbar" style="background-color: hsla(327.97,99.16%,46.67%, 1);">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./Flavors.php">Flavors</a></li>
                        <li><a href="./Cakes.php">Cakes</a></li>
                        <li><a href="./Extras.php">Extras</a></li>
                        <li><a href="./Desserts Tables & Events.php">Events</a></li>
                    </ul>
                </div>
                <a href="./index.php"> <img src="../Images/_PinkElephant-Logo-Rectangle-White.png" alt="" style="max-width: 75%;"> </a>
            </div>
            <div class="navbar-end hidden lg:flex mr-10">
                <div role="tablist" class="tabs tabs-boxed" style="background-color: white;">
                    <a href="./index.php" role="tab " class="tab tab-active" style="background-color: #ed017f; color: white;";>Home </a>
                    <a href="./Flavors.php" role="tab" class="tab">Flavors</a>
                    <a href="./Cakes.php" role="tab" class="tab">Cakes</a>
                    <a href="./Extras.php" role="tab" class="tab">Extras</a>
                    <a href="./Desserts Tables & Events.php" role="tab" class="tab">Events</a>
                </div>
            </div>
    </header>

    <!-- Navbar End -->

    <img class="responsiveimg" src="../Images/Homepic1.3.jpg" alt="">
<br>

    <!--Carouselle-->
    


    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-3.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-4.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-5.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
             <!-- Item 6 -->
             <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-6.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 7 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-7.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 8 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-8.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 9 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-9.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 10 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-10.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
             <!-- Item 11 -->
             <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-11.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 12 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-12.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 13 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-13.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 14 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-14.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 15 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-15.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
             <!-- Item 16 -->
             <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-16.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 17 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-17.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 18 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-18.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 19 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img style="width: 90vw; height: 50vw;" src="../Images/Carouselle-19.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!--Carouselle End-->
    
    <!--Flavours with Order Now-->
   
    <br>
    <div class="image-container">
        
        <img  class="responsiveimg" src="../Images/Homepic2.2.jpg" alt="image">
        <div class="overlay-text"><br><br><p class="home1">We have 17 rotating flavors monthly!</p><center><table>
            <tr>
                <td class="flavours"><a class="flavours" href="Flavors.html"> Flavours </a></td>
            </tr>
        </table>
    </center>
    </div>
    </div> 
    <section class="order">
        <hr style=" border: 5px solid #ed017f; margin-top: -20px; height: 20px;">
        <center>
            <table>
                <tr>
                    <td class="order"><a class="order" href="tel:+15865525862"> Order Now</a></td>
                </tr>
            </table>
        </center>
        <br>
    </section>

    <!--Flavours with Order Now End-->

    <!--Cupcakes Show-->

    <div class="row">
        <div  class="col-4 col-s-12">
            <center>
            <ul>
                <li> <img class="croppedimghome" class="responsiveimghome2" src="../Images/PinkElephant-+Champ+Transparent.jpg" alt=""> </li>
                <li class="center">Singles $3.50</li>
            </ul>
            </center>
        </div>
        <div class="col-4 col-s-12">
            <center>
            <ul>
                <li> <img class="croppedimghome" class="responsiveimghome1" src="../Images/PinkElephant-+4+Pack+Transparent.jpg" alt="" > </li>
                <li class="center">4 Pack BIGS $14</li>
            </ul>
            </center>
        </div>
        <div class="col-4 col-s-12">
            <center>
            <ul>
                <li> <img class="croppedimghome" class="responsiveimghome3" src="../Images/PinkElephant-+6+Pack+3+Transparent.png" alt=""> </li>
                <li class="center">6 Pack BIGS $21</li>
            </ul>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-s-12">    
            <center>
            <ul>
                <li> <img class="croppedimghome" src="../Images/1+Dozen.png" alt=""> </li>
                <li class="center">1 Dozen BIGS $36</li>
            </ul>
            </center>
        </div>
        <div class="col-6 col-s-12">    
            <center>
            <ul>
                <li> <img class="croppedimghome" src="../Images/1+Dozen+Minis.png" alt="" > </li>
                <li class="center">1 Dozen Minis $17</li>
                <li class="center">(mini cupcakes must be pre-ordered)</li>
            </ul>
            </center>
        </div>
    </div>

    <!--Cupcakes Show End-->

    <!--Instagram Erea-->

    <div style="background-image: url(../Images/_PinkElephant-Tropical-Leaves-Seamless-1.png);">
        
        <br>
        <center style=" margin-left: 50px; margin-right: 50px;">
            <table>
                <tr>
                    <td class="followus"><a class="followus" href="https://www.instagram.com/pinkelephantcupcakes?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Follow Us On Instagram!</a></td>
                </tr>
            </table>
        </center>
        <br>
        <center>
        <div class="row">
            <div class="col-3 col-s-12">
              <a href="https://www.instagram.com/p/CsOxfRZLFp_/?utm_source=ig_web_copy_link"><img class="croppedimghome" src="../Images/Instashow1.jpeg" alt=""> </a>
            </div>
            <div class="col-3 col-s-12">
              <a href="https://www.instagram.com/p/Cryb3NRrLu_/"><img class="croppedimghome" src="../Images/Instashow2.jpeg" alt=""> </a>
            </div>
            <div class="col-3 col-s-12">
            <a href="https://www.instagram.com/p/CrtNfcQryUr/?utm_source=ig_web_copy_link"><img class="croppedimghome" src="../Images/Instashow3.jpeg" alt=""> </a>
            </div>
            <div class="col-3 col-s-12">
            <a href="https://www.instagram.com/reel/CrD1VBpO39-/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img class="croppedimghome" src="../Images/Instashow4.jpeg" alt=""> </a>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-s-12">
            <a href="https://www.instagram.com/p/Cq3CPHgrAS2/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img class="croppedimghome" src="../Images/Instashow5.jpeg" alt=""> </a>
            </div>
            <div class="col-3 col-s-12">
            <a href="https://www.instagram.com/p/Cqx5R-hr7AS/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img class="croppedimghome" src="../Images/Instashow6.jpeg" alt=""> </a>
            </div>
            <div class="col-3 col-s-12">
            <a href="https://www.instagram.com/reel/CqlD_gRDeNq/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img class="croppedimghome" src="../Images/Instashow7.jpeg" alt=""> </a>
            </div>
            <div class="col-3 col-s-12">
            <a href="https://www.instagram.com/p/CqdzslOPvWe/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="><img class="croppedimghome" src="../Images/Instashow8.jpeg" alt=""> </a>
            </div>
        </div>
        </center>
        <br>
    </div>

    <br>

    <!--Instagram Erea End-->
    
    <!--Hours Location Contact Us-->

    <center style="background-color: white;">
        <br>
        <p class="hours">Hours // Location</p>
        <br>
        <p class="hours1">Monday: 11-5</p>
        <p class="hours1">Tuesday: Closed</p>
        <p class="hours1">Wednesday: 11-5</p>
        <p class="hours1">Thursday: 11-5</p>
        <p class="hours1">Friday: 11-5:30</p>
        <p class="hours1">Saturday: 10-2</p>
        <p class="hours1">Sunday: Closed</p>
        <br>
        <p class="hours2">*Hours may change during holiday seasons or special events*</p>
        <br>
        <p class="hours2">We are located on the border of Grosse Pointe Shores and St Clair Shores, one block north of the Marter/Kroger Shopping center and next door to St Lucy’s Catholic Church. Look for our pink awnings and pink front door in the back of our parking lot.</p>
        <br>
    </center>



<center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11774.045564612397!2d-82.88426730787312!3d42.45941115402761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88252846e1d5d211%3A0x79bfa02d02b0e0be!2s23301%20Jefferson%20Ave%2C%20St%20Clair%20Shores%2C%20MI%2048080%2C%20USA!5e0!3m2!1sen!2slb!4v1716155686655!5m2!1sen!2slb" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</center>
<br><br>

    <!--Hours Location Contact Us-->
    

    <!--php review section-->

    <?php
    require_once "./connect.php";
    try {
        if (isset($_POST['email'], $_POST['comments'])) {
            extract($_POST);
            $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

            $query = "INSERT INTO comments VALUES ('$email','$comments');";

            $result = $pdo->exec($query) ;
            $pdo = null ;
    }
}
    catch (PDOException $e) {
        die( $e->getMessage());
        }
?>

<div>
    <center>
        <p><Span style="color: #ed017f; width: 50%;"> <b> Treat complete? </b><br>
            Share your cupcake journey with a review! </Span> </p>
        <form action="home.php" method="POST">
        <label for="email"> <span style="font-size: 5vw; color: #ed017f;">Email : </span> <input type="email" name="email" id="email" class="input input-bordered input-secondary w-full max-w-xs" style="width: 50vw; height: 50px; background-color: white; border-color: #ed017f; border-width: 5px; margin-bottom: 20px; color: #ed017f;"></label>
        <br>
        <textarea name="comments" id="comments" placeholder="Leave You Comment Here..." class="textarea textarea-ghost" style="width: 49%; height: 20vw; color: #ffffff; background-color: #ed017f; border-color: #ed017f; border-width: 5px; margin-left: 60px;"></textarea>
        <br>
        <button type="submit" class="btn btn-secondary" style="background-color: #ed017f;"><span style="color: white;">Submit</span></button>
        </form>
        <br>
        </center>
    </div>

    <!--php review section end-->

    <!--Footer-->

    <footer class="footer footer-center p-10 " style="background-color: hsla(327.97,99.16%,46.67%, 1); color: whitesmoke;">
        <aside>
        <p class="font-bold">
            Pink Elephant Cupcakes
        </p> 
        <p>23301 Jefferson Ave</p>
        <p>St. Clair Shores, MI 48080</p>
        <p>(586) 552-5862</p>
        <p>© 2023 Pink Elephant Cupcakes LLC</p>
        </aside> 
        <nav>
        <div class="grid grid-flow-col gap-4">
            <a href="https://www.instagram.com/pinkelephantcupcakes/" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 3 30 30"
                    style="fill:whitesmoke;">
                    <path
                        d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
                    </path>
                </svg></a>
            <a href="https://www.facebook.com/PinkElephantCupcakes" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
        </di0v>
        </nav>
    </footer>

      <!--Footer End-->

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="JS.js"> </script>
</body>