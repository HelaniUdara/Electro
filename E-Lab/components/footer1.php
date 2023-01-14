<head>
    <style>
        
.footer{
    background:#85586F;
   
   
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    font-size: 2.2rem;
    color:white;
    padding:1rem 0;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.4rem;
    color:white;
    padding:1rem 0;
}

.footer .box-container .box a i{
    color:white;
    padding-right: .5rem;
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .box-container .box .map{
    width:100%;
}

.footer .box-container .box p{
    color: #fff;
    font-size: medium;
}

.footer .share{
    margin-top: 2rem;
    padding:1rem 0;
    text-align: center;
}

.footer .share a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    color:#85586F;
    background:white;
    margin:0 .3rem;
    border-radius: 50%; 
}

.footer .share a:hover{
    background:black;
    color:white;
}

.footer .credit{
    border-top: .1rem solid rgb(254, 253, 253);;
    margin-top: 2rem;
    padding:0 1rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color:white;
    text-align: center;
}

.footer .credit span{
    color:#fcadd6;
    font-weight: bold;
}

    </style>
</head>

<section class="footer">

    <div class="box-container">

    <div class="box">
         <h3>Quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="shop.php"> <i class="fas fa-angle-right"></i> Shop</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact Us</a>
      </div>

      <div class="box">
         <h3>Extra links</h3>
         <a href="user_login.php"> <i class="fas fa-angle-right"></i> Login</a>
         <a href="user_register.php"> <i class="fas fa-angle-right"></i> Register</a>
         <a href="cart.php"> <i class="fas fa-angle-right"></i> Cart</a>
         <a href="orders.php"> <i class="fas fa-angle-right"></i> Orders</a>
      </div>

      <div class="box">
         <h3>Contact us</h3>
         <a href="tel:1234567890"><i class="fas fa-phone"></i> +94 77126 8901</a>
         <a href="tel:11122233333"><i class="fas fa-phone"></i> +94 76906 3301</a>
         <a href="mailto:shaikh@gmail.com"><i class="fas fa-envelope"></i> electro2022@gmail.com</a>
         <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> Colombo 10, Srilanka </a>
      </div>
        
      <div class="box">
         <h3>Electro</h3>
         <p>Electro being a fully Sri Lankan owned company, aims to make a positive impact on Sri Lanka by providing the best electronic items. </p>
      </div>
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit">&copy; Copyright @ 2023 | <span>Group 05</span> | all rights reserved! </div>

</section>