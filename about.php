<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Bangers&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merienda:wght@300..900&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yanone+Kaffeesatz:wght@200..700&display=swap');


@import url('https://fonts.googleapis.com/css2?family=Acme&family=Bangers&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merienda:wght@300..900&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yanone+Kaffeesatz:wght@200..700&display=swap');


    *{

        letter-spacing: 1.5px;
      font-weight: 600;
      line-height: 40px;
      font-family: "Yanone Kaffeesatz", serif;
      font-size: 20px;
     
      
      
    }
#page1{
    height: 50vh;
    background-image: url("imgs/pexels-edwardeyer-2923034.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    font-family: "Merienda", cursive;
        font-optical-sizing: auto;
        font-style: normal;
        color: orange;

}

.textstyle{
    font-family: "Merienda", cursive;
        font-optical-sizing: auto;
        font-style: normal;
        color: orange;

}

#page2{
    background-image: url("imgs/3.png"); 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    

}
  
@media screen and (max-width:1200px) {
    
    .responsive{
        flex-direction: column;
    }
.textadjust{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
   text-align: center;
    
}


}

</style>
<body>

<?php
include "navbar.php"; 

?>
    <section id="page1">

        <div class="container d-flex align-items-end justify-content-center h-75">
            <div class=" text-center w-50" style="color: orange;">
                  <h1>Welcome to ICAFE</h1>
       <p> At ICAFE, we craft each cup with passion and love, creating a community hub where every visit feels like home. Join us and share our love for coffee.</p>
            </div>
          
      
        </div>
      
    </section>

    <section id="page2" class="p-5">
        
      <div class="container d-flex align-items-center justify-content-center h-100 p-5 w-auto responsive">
        
            <div class="w-100  text-center ">
                <img src="imgs/about us bg.jpg" alt="" width="400px" height="420px" class="image-fluid">
            </div>
            <div class="w-100  mt-5 ms-5">
                <div class=" textadjust">
                <h1 class="textstyle">ICAFE SINCE 2000</h1>
               <p class="w-75" style="line-height: 35px;">Founded in 2005, ICAFE began as a small, cozy café in the heart of China Town,Yangon . It all started with our founders, Hein Htet, who shared a deep passion for coffee and a dream of creating a community space where people could connect over a perfect cup. Over the years, we’ve grown from a humble coffee shop to a beloved local institution, known for our dedication to quality, sustainability, and community. Our journey has seen us partnering with local farmers, hosting countless events, and becoming a cherished gathering spot for friends and families alike. Despite our growth, we’ve stayed true to our roots, continuing to brew each cup with the same love and care that started it all.</p>     
                </div>
                
            </div>
        </div>
  
    </section>


    <section id="page3" style="background-color: orange; color:white; ">

    <div class="row">
        <div class="col-12 text-center">

        <h4 class="text-center">WHAT CUSTOMERS SAY</h4>
                <div class="container justify-content-center d-flex p-3">
        <div id="carouselExampleInterval" class="carousel slide w-75" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <p class="w-50 ms-auto me-auto" style="line-height: 35px;">I can't get enough of the cozy atmosphere and the amazing espresso at ICAFE. The pastries are to die for, and the baristas are true artists. Whether I'm grabbing a quick coffee or settling in with a book, it's always a delightful experience."</p>
      <i>Justin</i>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
     <p class="w-50 ms-auto me-auto" style="line-height: 35px;">"Every visit to ICAFE feels like a warm hug. The coffee is perfection in a cup, and the staff always make me feel right at home. It's my favorite spot to unwind and catch up with friends. Highly recommend!"</p>
     <i>Laura</i>
    </div>
    <div class="carousel-item">
     <p class="w-50 ms-auto me-auto" style="line-height: 35px;">"ICAFE is the hidden gem I've been searching for! The ambiance is perfect for both work and relaxation. The menu is diverse, and everything I've tried has been outstanding. It's my go-to place for a mid-day coffee break."</p>
     <i>Bruce</i>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
        </div>
    </div>
    
    </section>


  <?php
   include "footer.php"; 
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>