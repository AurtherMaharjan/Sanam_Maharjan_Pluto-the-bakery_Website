<?php
session_start();
if(isset($_SESSION['ticket'])){
    header('location:dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title >Pluto: The Bakery</title>
    <link type="text/css" rel="stylesheet" href="firstpage.css" > 
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>

    <style>
      #intro {
        background-image: ('images/cake4.jpg');
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }
      body{
        width: 1354px;
}

</style>
  </head>
  

<body>
<?php include('navbar.php'); ?>  

  <div class="welcome"> 
  <p class="impre">Welcome to the base of the PLUTO. We serve you closet to the further and invisible.</p>

      <video class="img-fluid video" autoplay loop muted cointain>
        <source src="images/cake4.mp4" type="video/mp4" />
      </video>
      
</div>
   
<style>
    .welcome{
        width: 1360px;
        height: 500px;
}

    p{
        align: center;
        margin-top: 100px;
        margin-right: 100px;
    }

    .video{
  width: 1362px;
  margin-top:-300px;

}
.impre{
        font-size: 20px;
        text-align: center;
}
    </style>

  <header>
    <style>
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
          height: 50vh !important;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

  </header>

  <main class="mt-5">
    <div class="container">
        </div>

      <hr class="col-5-my-5" />
      <h3 class="mb-5 text"><strong>Futher Than You Imagine</strong></h3>
        <section class="text-center">
        
<style>
.text{
    font-family: 'Alegreya'; font-size: 30px;
    color: blue;
    text-align: center;
   }
   .up{
    margin-top:70px;
   }
   .margin-left{
    margin-left: 80px;
   }
   .radius{
    border-radius: 0px 25px 0px 25px;
   }
.radius2{
  border-radius: 25px 0px 25px 0px;
  width: 445px;
}
.radius3{
  border-radius: 25px 25px 0px 0px;
}
</style>

    </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card radius">
              <div class="bg-image hover-overlay ripple " data-mdb-ripple-color="light">
                <img src="images/bakeryimage1.jpg" class="img-fluid radius" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card">
                <h5 class="card-title">Outstanding making process</h5>
                <div class="margin-left">
                <p class="card-text up">
                We produce the goods like no one has ever did and will never be done.  
                  </p>
  </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card radius3">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/bakeryimages3.jpg" class="img-fluid radius3" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>


              <div class="card">
                <h5 class="card-title">Quality Products.</h5>
                <p class="card-text margin-left">
                  Quality products are on the hands of qualified and certified chefs.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card radius2">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/bakery2.jpg" class="img-fluid radius2" />
                <a href="#!">
                  <div class="mask radius2" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card">
                <h5 class="card-title">We Stand Out</h5>
                <p class="card-text margin-left">
                  Bakery For every occassion, tradtion, Festivals as per the wishes.
                </p>
                <style>
                  .p{
                   text-align: center; 

                  }
                  </style>
              </div>
            </div>
          </div>
        </div>
      </section>
          </div>
        </div>
      </section>
    </div>
  </main>

    <hr class="m-1" />

    <div class="text-center py-4 align-items-center">
      <p class="follow">Follow Pluto Bakery on social media</p>
      <style>
        .follow{
          margin-left: 100px;
        }
        </style>

      <a href="https://www.youtube.com" role="button" target="_blank">
        <img src="images/youtube.png" class="youtube">
      </a>
      <style>
        .youtube{
          width: 20px;
          height:20px;

        }
        </style>

      <a href="https://www.facebook.com/login.php" role="button" rel="nofollow"
        target="_blank">
       <img src="images/faceboook.png" class="facebook"></a>
      <style>
        .facebook{
          width: 20px;
          height:20px;
        }
        </style>

      <a href="https://twitter.com/i/flow/login" role="button" rel="nofollow"
        target="_blank">
        <img src="images/twittter.png" class="twitter">
      </a>
      <style>
        .twitter{
          width: 20px;
          height:20px;

        }
        </style>
      
      <a href="https://github.com/login" role="button" rel="nofollow"
        target="_blank">
        <img src="images/github.png" class="github">
      </a>
      <style>
        .github{
          width: 20px;
          height:20px;

        }
        </style>

    </div>

</body>
</html>
