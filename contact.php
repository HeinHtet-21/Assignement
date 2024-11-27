<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merienda:wght@300..900&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yanone+Kaffeesatz:wght@200..700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Acme&family=Bangers&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merienda:wght@300..900&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yanone+Kaffeesatz:wght@200..700&display=swap');

    *{
        
      letter-spacing: 1.5px;
      font-weight: 600;
      line-height: 30px;
      font-family: "Yanone Kaffeesatz", serif;
      font-size: 20px;
     
      
    
    }

    #page1{
        height: 70vh;
        background-image: url("imgs/contact background3.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        
    }

    h1{
     
        font-family: "Merienda", cursive;
        font-optical-sizing: auto;
        font-style: normal;
        color: orange;


        
    }

    .p1{
        font-family: "Merienda", cursive;
        font-optical-sizing: auto;
        font-style: normal;
        color: orange;

    }

    input{
       
        outline:none; 
        border: 2px solid black;
        box-shadow: 2px 4px 1px 0px black;
    
    }

  .btn10  {
        color: white; 
        background-color: #152238; 
        border: 2px solid white;
        box-shadow: 2px 4px 1px 0px black;
        padding: 5px 20px;


    }

    .btn:hover{
        background-color:#152238;
        color: white;
    }

    p{
        font-size: 18px; 
    }

    .custombg{
        background:linear-gradient(94deg,orange 50%,#152238 50%); 
    }
</style>
<body>

<?php
include "navbar.php"; 
?>
    <section id="page1">
        
        <div class="container d-flex align-items-center justify-content-center  w-100 p-5" style="height: 70vh;">

            <div class="text-center">
            <h1 class="mb-4" style="color:orange">GET IN TOUCH WITH US !</h1>
            <p style="color:orange; font-size: 26px;" class="p1">We're thrilled you're here. Drop us a message and let's chat over coffee!</p>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid d-flex align-items-center justify-content-center p-5 custombg text-light "> 
            <div class=" w-75">
                <h4>Got a question</h4>
                <h3 style="color: #152238;">OR SUGGESTION?</h3>
                <p>We love hearing from all of you lovely people!</p>
            <p>Simply fill in the form below and let us know how we can help you.</p>


            <div class="mb-4 mt-5">
               <input type="text" placeholder="Enter Your Full Name" class="pe-5 me-3 p-2 mb-2">
            <input type="email" placeholder="Enter Your Email Address" class="pe-5 p-2">    
            </div>
         <div class="mb-4">
            <input type="tel" placeholder="Enter Your Phone Number" class="pe-5 me-3 p-2 mb-2">
            <input type="date" placeholder="Enter Your Date of Birth" class="pe-5 p-2">
         </div>
            
            <textarea name="" id="" placeholder="Enter Your Message" class="mb-5 p-2"></textarea><br>
            <span>
                <span><input type="checkbox"></span>
            <span style="color:#152238; "><p class="w-75">I would like to receive exclusive offers and news from Avenue Cafe to the email address entered above.</p></span>
            </span>
           


            <button class="btn10 ">Send Message</button>
            </div>

            <div class="w-50 ms-5">
                <h4 style="color: orange;">CONTACT</h4>
                <h5>ICAFE</h5>
                <pre style="font-size: 21px; overflow:hidden; " class="mt-5">15 Street ,
China Town ,
Yangon,Myanmar</pre>


                    <p class="mt-5">Phone: 09887734832</p>
                    <p class="mb-5">Email: icafe@gmail.com</p>

                    <h4 style="color: orange;">OPENING HOURS</h4>

                    <p>MONDAY  ------------- <span>9:00am – 5:00pm </span></p>
                    <p>TUESDAY  ------------- <span>9:00am – 5:00pm</span> </p> 
                    <p>WEDNESDAY  ---------<span> 9:00am – 5:00pm</span></p> 
                    <p>THURSDAY  -----------<span>  9:00am – 5:00pm</span></p>
                    <p>FRIDAY  ---------------<span>  9:00am – 5:00pm</span></p>
                    <p>SUNDAY  --------------<span>10:00am – 3:00pm </span> </p>

            </div>
        </div>
    </section>

    <?php
   include "footer.php"; 
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>