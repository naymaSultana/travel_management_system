<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulahazra Safari Park</title>

    <!--swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">



</head>
<body>
<!-- header section starts -->
<section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>


</section>

<!--header section ends-->
<div class="heading" style="background:url(images/safari2.jpg") no-repeat> 
    <h1>Dulahazra Safari Park</h1>
</div>    


<section class="about">
    <div class="image">
        <img src="images/safari3.jpg" alt="">
    </div>

    <div class="content">
        <h3>Dulahazra Safari Park, Cox's Bazar</h3>
        <h1><p>About it</p></h1>
        <p>Dulahazra Safari Park, nestled in the coastal beauty of Cox's Bazar, Bangladesh, is a haven for wildlife enthusiasts. Spanning lush landscapes, it shelters diverse species including Bengal tigers, making it a unique safari experience. With its sprawling vistas and conservation efforts, the park offers a glimpse into Bangladesh's natural heritage.</p>
        <h1><p>Our Packages</p></h1>
        <p>Solo package-1500/-</p>
        <p>Group package-per person 1400/-</p>
        <h1><p>our ensurement</p></h1>
        <p>We ensure 2 days enjoyment of our luxury package 'Dulahazra Safari Park'. Here you can enjoy the site view, can enjoy local food and we will provide a set of local dresses and personal photographer.</p>
        <p>You can have transportation, Accomodation, guided tours, hisotorical and cultural experiences, night tours, horseback rides, cultural immersion, wildlife photography tours.</p>
        <div class="icons-container">
            <div class="icons">
                <span>meuseum adventure</span>
            </div>

            <div class="icons">
                <span>nightstay at safari</span>
            </div>
            <div class="icons">
                <span>live animal</span>
            </div>
        </div>
        <form action="book_location.php" method="post">
        <input type="hidden" name = "location" value="Dulahazra" />
        <input type ="Submit" value = "Book" class="btn" /> 

    </div>

</section>


































<!-- footer section starts -->
<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book_form.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+880-1734-450786</a>
        <a href="#"><i class="fas fa-phone"></i>+880-1678-392763</a>
        <a href="#"><i class="fas fa-phone"></i>+880-1234-567890</a>
        <a href="#"><i class="fas fa-envelope"></i>deyswasty@gmail.com</a>
        <a href="#"><i class="fas fa-envelope"></i>belamoni991@gmail.com</a>
        <a href="#"><i class="fas fa-envelope"></i>nstamanna19@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>mirpur DOHS, Dhaka, 1206</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/ShuvA.AnwitA?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="https://www.facebook.com/nstamanna?mibextid=ZbWKwL"><i class="fab fa-twitter"></i>twitter</a>
            <a href="https://www.facebook.com/megla.moni.545?mibextid=ZbWKwL"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
</div>


<div class="credit">created by<span> Swasty,Nayma,Bela</span> | all rights reserved!</div>

</section>


<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="script.js"></script>  


</body>
</html>