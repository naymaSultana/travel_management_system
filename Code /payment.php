
<?php

$name= $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
$arrival = $_POST['arrival'];





$conn = new mysqli('localhost', 'root', '', 'book_db', 3305);
if($conn->connect_error){
    die('connection failed: '.$conn0->connect_error);
}
else{

    $stmt= $conn->prepare("insert into book(name, email, phone, address, location, guests, arrival) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $address, $location, $guests, $arrival);
    $stmt->execute();
   // echo "registration successfull";

    $stmt->close();
    $conn->close();

   // echo'booked successfully!';
}

$conn = new mysqli('localhost', 'root', '', 'book_db', 3305);

$sql= "SELECT * from destination";
$data = mysqli_query($conn, $sql);
//$values = mysqli_fetch_all($data, MYSQLI_ASSOC);
//print_r($values[0]);
if(mysqli_num_rows($data)>0){

    while($row = mysqli_fetch_assoc($data)){
        if ($row["name"] == $location ){

            if($guests == 1 ){
                $price = $row['solo'];
                $adprice= $price/2;
            }
            else{
                $price = $row['grp'] * $guests;
                $adprice= $price/2;

            }
        }
        else{
        }
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>

.payment h2{
    text-align: center;
    letter-spacing: 2px;
    margin-bottom: 40px;
    color: #8e44ad;
    font-size:30px;

}


.form .label{
    font-size:15px;
    display: block;
    color: #222;
    margin-bottom: 6px;
    margin-top: 16px;
}

.form .input{
    padding: 13px 0 13px 25px;
    width: 100%;

    text-align: center;
    border: 2px solid #dddddd;
    border-radius: 5px;
    line-spacing: 1px;
    word-wrap: 3px;
    outline: none;
    font-size: 16px;

    
}

.cardstyle{
    display: flex;
    padding-top: 10px;
    padding-left: 0px;
    
}

.card-grp{
    display: flex;
    width: 150px;

}
.card-item{
    display : flex;
    width: 150px;
    padding-left:10px;
    
}


.btn{
    border-radius:5px;
}
    </style>


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



<div class="heading" style="background:url(images/payment.jpg") no-repeat> 
    <h2 style =" color: white; font-size:50px">Confirm Information</h2>
</div>    


<div class="info" style="background:#F8F8F8; max-width:360px; height: auto; padding:20px; margin: 50px auto; border: 2px solid black; display: block; justify-content: center; align-items: center; font-size: 15px;  ">
     <p>Destination: <?php echo $location ?> </p>
     <p>Number of people: <?php echo $guests ?> </p>
     <p>Date: <?php echo $arrival ?> </p>
     <p>Total amount: <?php  echo $price ?> </p>
     <p> Advance payment: <?php echo $adprice ?> </p>
</div>

<a href='checkout.php?price=<?= urlencode($adprice) ?>&name=<?= urlencode($name) ?>' class="btn" style= "margin: 50px 780px;">Pay</a>


<!--
<div class="payment" style =" background: #f8f8f8; max-width: 360px; margin: 40px auto; height: auto; padding: 25px; padding-top: 70px;border-radius: 5px;position: relative;">

     <h2>Payment Gateway</h2>




       <div class="form" style='display:block; justify-content: center; align-items: center;'>
        <div class="card">
            <label class="label"> Card Holder</label>
            <input type="text" class="input" name="card_holder">
            
        </div>

        <div class="card">
            <label class="label"> Card Number</label>
            <input type="text" class="input" name="card_number">   
        </div> 
        <div class ="cardstyle">
        <div class="card-grp">
            <label class="label"> Expiry Date:</label>
            <input type="text" class="input" name="expiry_date">
        </div>

        <div class="card-item">
            <label class="label"> CVC: </label>
            <input type="text" class="input" name="cvc">
            
        </div>
    </div>

       </div>
       <br>
       <div class="btn">Pay</div>

    </div>
    
-->















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