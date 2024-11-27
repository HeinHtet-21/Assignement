<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    #home1{
        height: 100vh;
        background-image: url('imgs/background image3.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Merienda", cursive;
        font-optical-sizing: auto;
        
        font-style: normal;
        
        letter-spacing: 1.5px;
       

    }

    #home1 h1{
        font-size: 60px;
    }

    #home1 h5{
        font-size: 30px;
    }

    /* .btn{
        border:1px solid white; 
    } */

    .btn1{
        background-color: orange;
        color:white; 
        border-radius: 7px;
        padding:5px 20px; 
        outline: none;
        border: 1px solid orange;
        box-shadow: 2px 4px 1px 0px black;
    }


    .btn2{
        border: 1px solid orange;
        color:white; 
        background-color: transparent;
        border-radius: 7px;
        padding:5px 20px; 
        outline: none;
        border: 2px solid orange;
        box-shadow: 2px 4px 1px 0px black;
    }

    .custom{
        height: 90vh;
    }


       .btn2:hover{
        transform: translateY(-10%);
       }
       .btn1:hover{
        transform: translateY(-10%);
       }


       #home2{
        background-color:#152238;
       }

       .imgcustom1{
       width: 100%;
       margin-bottom: 10px;
       }

       
       

      .column{
        flex: 100%;
        max-width: 90%; 
    
      }

      .btn3{
        border: 2px solid orange;
        color:white; 
        background-color: orange;
       box-shadow: 2px 4px 1px 0px black;
       border-radius: 7px;
       padding:5px 20px; 
      }

      .btn3:hover{
        border: 2px solid orange;
        transform: translateY(-10%);
      }

      .btn4{
        background-color: chocolate;
       color: white;
       box-shadow: 2px 4px 1px 0px black;
       padding: 5px 20px;
       border-radius: 7px;

       

      }

      .btn4:hover{
        color:white;
        border: 2px solid white;
        background-color: transparent; 
      }

      h4{
        font-family: "Merienda", cursive;
        font-optical-sizing: auto;
        
        font-style: normal;
      }

      .img0{
        width: 150px; 
        height: 130px;
        margin:0px 20px; 
        border:2px solid #061442;
        border-radius: 10px;
      }

      .adjust{
        margin-left:50px; 
      }

      #home3{
        background-color: orange;
      }

  

    

      @media (max-width:1000px) {

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

        @media (max-width:767px) {
.menures{
  flex-direction: column;

}

.adjust{
  margin-left: 0px;
}

          
        }
        
      
    
    

  </style>
  <body>

  <?php
include "navbar.php"; 
    ?>

    <section id="home1">
        <div class="container d-flex align-items-center justify-content-center text-center custom ">
        <div>

            <h1 style="color: orange; font-weight: 600;" class="mb-3">Welcome to ICAFE</h1>
            <h5 style="color: orange; font-weight: 1000;">Sip, savor, and unwind—every cup tells a story at our cozy cafe.</h5>

            <button class=" btn1 mt-4 me-3">Explore</button>
            <button class="btn2 mt-4 ">Order Now</button>
        </div>
        </div>
    </section>

    <section id="home2">
      <div class="container-fluid">
        <div class=" d-flex align-items-center justify-content-center  p-2 text-light responsive">


            <div class="imgs2 d-flex felx-wrap w-100 ">
                

                    <img src="imgs/party1.jpg" alt="" class="imgcustom1"> 
                   
           
            </div>


            <div class="w-100 mb-auto mx-5 textadjust">
                <h4 class="mb-4 ">HOST YOUR NEXT CELEBRATION AT ICAFE</h4>
                <p class="mb-4 " style="line-height: 30px;">Step into the enchanting ambiance of ICAFE for your next special event. Be it a birthday celebration, an anniversary milestone, or simply a joyful get-together with friends, our cafe offers the perfect blend of warmth and elegance to make your occasion truly unforgettable. Indulge in our tailored menus, featuring the finest brews and delectable treats, all crafted with love and care. Our dedicated team will assist you in decorating the space to reflect your unique theme, ensuring every detail is perfect. With flexible seating arrangements and personalized service, we'll create a memorable experience that leaves your guests delighted. Come celebrate life’s precious moments with us, and let the charm of our cafe add a magical touch to your festivities.</p>
                 <button class=" btn3 mb-3">Book your event</button>
                 <button class="btn4 ">View Buffet Menu</button>

            </div>
            
        </div>
      </div>
        
    </section>


 <section id="home3" >

        <div class="container d-flex align-items-center justify-content-center pt-5">
            <div class="w-75">
                <h4 style="color:rgb(255, 231, 213);">Sip, Savor, Smile</h4>
                <h4 style="color:#152238; ">Discover Our Menu</h4>
                <p style="line-height: 30px;">Dive into a world of flavors with our expertly crafted espressos, refreshing teas, freshly baked pastries, and hearty sandwiches. Each item is made with love, ensuring every sip and bite is a delight.</p>
            </div>

            <div class="w-75 flex-row d-flex flex-wrap ">
                <img src="imgs/img2.jpg" alt=""  class="img0 mt-2">
                <img src="imgs/img4.jpg" alt=""  class="img0 mt-2">
                <img src="imgs/img5.jpg" alt=""  class="img0 mt-2">
            </div>
        </div>
    </section>

    <section id="home4">
        <div class="container  text-center">
         <h4 class="mb-5 mt-5">SPECIAL MENU FOR YOU</h4> 

         <div class="d-flex align-items-center justify-content-center  menures ">
           <ul class="list-unstyled " style="font-size: 21px; text-align: left;">
            <li class="mb-4">DRIP COFFEE-----------$2.4</li>
            <li class="mb-4">COLD BREW------------$3.95</li>
            <li class="mb-4">ESPRESSO--------------$2.95</li>
            <li class="mb-4">MACCHIATO------------$3.55</li>
            <li class="mb-4">CORTADO---------------$3.65</li>
            <li class="mb-4">CAPPUCCINO-----------$3.65</li>
        </ul>   

        <ul class="list-unstyled   adjust " style="font-size:21px; text-align: left;">
            <li class="mb-4">LATTE-------------------$2.4</li>
            <li class="mb-4">TEA LATTE--------------$4.10</li>
            <li class="mb-4">TEA---------------------$3.99</li>
            <li class="mb-4">MATCHA LATTE --------$2.95</li>
            <li class="mb-4">FRAPPE -----------------$4.5</li>
            <li class="mb-4">CHAI LATTE-------------$3.95</li>
        </ul>
         </div>
       
         
        </div>
        
       
        
    </section>


   

    <?php
include "footer.php"; 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>