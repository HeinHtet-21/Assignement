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
    *{
      line-height: 20px;
     letter-spacing: 1.5px;
      
    }
    .btn1{
      background-color: #ffb141;
      color: white;
      padding: 5px 20px;
      border:2px solid white;
      border-radius: 7px;
      box-shadow: 2px 4px 1px 0px black;


    }
    .btn1:hover{
      background:linear-gradient(100deg,chocolate 50%,#152238 50%); 
      color:white; 
    }

    .nav-link{
 position: relative;
  
}


.nav-link::before {
  content: '';
  width: 0;
  height: 2px;
  border-radius: 2px;
  background-color:#ffb141;
  position: absolute;
  bottom: -.25rem;
  left: 50%;
  transition: width .4s, left .4s;
}

.nav-link:hover::before {
  
  width: 100%;
  left: 0;
}

.nav-link:hover{
  color:#ffb141; 
}

  </style>
  <body>

  <nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand" href="#">ICAFE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto me-auto">
        <li class="nav-item ms-3">
          <a class="nav-link active" aria-current="page" href="home1.php">HOME</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item ms-3 dropdown">
          <a class="nav-link " href="#" >
            SHOP
          </a>
          
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link " aria-disabled="true">PAGES</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link " aria-disabled="true">BLOG</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link " aria-disabled="true" href="contact.php">CONTACT US</a>
     </li>
      </ul>
       <ul class="navbar-nav align-items-center" >
        <li class="nav-item ms-3">
          <a class="nav-link " aria-disabled="true"><i class="fa-solid fa-magnifying-glass"  style="color:navy; "></i></a>
        </li>
        <li class="nav-item  ms-3" style="color:orange; ">

          <a class="nav-link " aria-disabled="true"><i class="fa-solid fa-cart-shopping" style="color:navy; "></i></a>
        </li>

        <li class="nav-item ms-3">
         <a href=""> <button class="btn1">DOWNLOAD OUR APP</button></a>
        </li>
       </ul> 
    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>