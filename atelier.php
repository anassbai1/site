<!DOCTYPE html>
<html>
<head>
  <title>
    LRTI - En Atelier
  </title><link rel="shortcut icon" type="text/css" href="LOGO LRTI1.png">
</head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="lightbox.css">
  <meta charset="UTF-8">
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@500&family=Croissant+One&family=Inter:wght@700;900&family=Open+Sans:ital,wght@0,400;0,700;0,800;1,300;1,400;1,600&family=Oswald:wght@300&family=Poppins:wght@500&family=Roboto+Slab:wght@500&family=Roboto:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Arimo:wght@500&family=Croissant+One&family=Inter:wght@700&family=Open+Sans:ital,wght@0,400;0,700;0,800;1,300;1,400;1,600&family=Oswald:wght@300&family=Poppins:wght@500&family=Roboto+Slab:wght@500&family=Roboto:ital,wght@0,400;0,900;1,400&display=swap');
 body{
    background: #FFFAFA;
    height: 100vh;
    display: flex;
    flex-direction: column;

font-family: 'Inter', sans-serif;


  }

  .ff{
    background: yellow;
    height: 25px;
    width: 100%;
  }
  
    .container{
    max-width: 1170px;
    margin: auto;

  }
  .row{
    display: flex;
    flex-wrap: wrap;
  }
  ul{
    list-style: none;
  }
  
    .footer{
    background-color: #34495E;
    padding: 70px 0;

  }
  .footer-col{
    width: 25%;
    padding: 0 15px;
  }
  .footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;

  }
  .footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }
  .footer-col ul li :not(:last-child){
    margin-bottom: 10px;
      }
  .footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
  }
  .footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;

  }
  .footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
  }
  .footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
  }
  @media (max-width: 767px){
    .footer-col{
      width: 50%;
      margin-bottom: 30px;
    }
  }
  @media (max-width: 574px){
    .footer-col{
      width: 100%;
    }
  }

   
header{
    position: fixed;
    top: 40px;
    left: 0;
    right: 0;
    background: #ffffff;
    box-shadow: 0 3px 20px rgba(0,0,0,.1);
    padding: 0px 3%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
   }

   header .logo{
    font-size: 25px;
    font-weight: bolder;
    color: #333;
   }

   header .navbar ul{
    list-style: none;
    text-decoration: none;
   }

   header .navbar ul li{
    position: relative;
    padding: 1px 1px;
    float: left;
    text-decoration: none;
   }

   header .navbar ul li a{
    font-size: 14px;
    padding: 5px 27px;
    margin-top: 10px;
    color: #383C44;
    display: block;
    text-decoration: none;
   }

   header .navbar ul li a:hover{
    
    
    color: #3D92D5;
    
   }
   .navbar a::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 3px;
    bottom: -5px;
    left: 0;
    background-color: #ffcc00;
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.3s ease-out;
}

   header .navbar ul li ul{
    position: absolute;

    left: 0;right: 0;
    width: 300px;
    background: #ffffff;
    color: #000;
     padding: 1em 5px;


    display: none;
    text-decoration: none;
   }
   header .navbar ul li ul li{
    width: 100%;
    font-size: 5px;
    border-top: 1px solid rgba(0,0,0,0.4)
   }
   header .navbar ul li ul li ul {
    left: 300px;
    top: 41px;
   }
   header .navbar ul li:hover >ul{
    display: initial;
    color: #000;
   }
   #menu-bar{
    display: none;

   }

   header label{
    font-size: 17px;
    color: #131111;
    cursor: pointer;
    display: none;
   }
   @media(max-width: 991px){

    header{
      padding: 10px;
    }
    header label{
      display: initial;
      font-size: 30px;
      margin-right: 20px;
    }
    header .navbar{
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      background: #FAFAFA;
      border-top: 1px solid rgba(0,0,0,.1);
      display: none;
    }
    header .navbar ul li{
      width: 100%;
    }
    header .navbar ul li ul{
      position: relative;
      width: 100%;
    }
    header .navbar ul li ul li{
      color: 
      background: #F1F5F5;
  }
  header .navbar ul li ul li:hover{
    background: #3D92D5;

  }
  header .navbar ul li a:hover{
  
    color: #000;

   }
  header .navbar ul li ul li ul{
    width: 100%;
    left: 0;
  }

  #menu-bar:checked ~ .navbar{
    display: initial;

  }
}
  .cc{
      padding-top: 150px
    }
    h2{
      text-align: center;
      padding: 30px;
    }
    .slick-slide{
      margin: 0 20px;
    }
    .slick-slide img{
      width: 100;
    }
    .slick.slider{
      position: relative;
      display: block;
      box-sizing: border-box;
    }
    .slick-list{
      position: relative;
      display: block;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }
    .slick-track{
      position: relative;
      top: 0;
      left: 0;
      display: block;
    }
    .slick-slide{
      display: none;
      float: left;
      height: 100%;
      min-height: 1px;
    }
    .slick-slide img{
      display: block;
    }
    .slick-initialized .slick-slide{
      display: block;
    }
    .copy{
       color: #ffffff;
      text-align:center;
      position: relative;
      top: 60px;
      font-size: 12px;
    
      
    }


 h5{
  color: #ffffff;
  font-size: 15px;
 }
 .kk{
  display: flex;
  justify-content: space-between;
  padding: 50px;
  margin: 1rem auto;
 }
 .kk img{
  height: 300px;
  

 }
 .dd p{
  padding: 40px;
  font-size: 25px;}
 }
  .po{
  display: flex;
  justify-content: space-between;
  padding: 50px;
  margin: 1rem auto;
}
 .zz{
  display:flex;
  justify-content: space-between;
  padding: 50px;
  margin: 1rem auto;
}

 .zz img{
  height: 300px;

 }
  .zz p{
  padding: 40px;
  font-size: 25px;}

  header.sticky ul li a{
  color: #000;}
  .me{
    width: 200px;

  }
  .gr{
    text-align: center;

  }
  .grr{
    color: #00000;
      text-align:center;
      padding:20px;
  }
  .bt{
    background: #90ee90  ;
    padding: 10px;
    border-radius: 30px;
    color: #ffffff;
    padding: 15px 22px;
      text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
  .bttn {
    height: 70px;
    width: 70px;
    background: crimson;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    right: 20px;
    bottom: 20px;
    cursor: pointer;
}
.iio {
    width: 50px;
    color: #fff;
}

 

.txt{
  position: absolute;
  top: 350px;

  color: #ffffff;
  margin: 0px;
  font-size: 80px;
  text-align: center;


}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  top: 90px;
    background-blend-mode: darken;
        background: rgba(0,0,0,0.4);
        background-size: cover;    }  
}

/* Hide the images by default */
.mySlides {
  display: none;
  padding: 80px;
  width: 100%;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: 22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 12000000s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
.ktab h2{
  padding: 100px;
  color: #00008B  ;
  font-size: 30px;
  text-align: center;
}
.ktab p{
  padding: 1em;
  color: #1E90FF  ;
  text-align: center;
  font-size: 20px;
  padding: -50px;
  margin: -113px;
}
.cv p{
  color: #708090;
  top: 50px;
  margin: 150px;
  text-align: center;
}
.gl {
text-align: center;
display: grid;
grid-template-columns: repeat(5,1fr);
  padding-left: 23em;
  font-size: 16px;
  cursor: pointer;
  margin: 90px 0;
  


}
.gl h1{
  font-size: 40px;
}
.gr{
  color: #708090;
  background-color: blue;
  
  text-align: center;
}

.slidos{
  width: 100%;
  top: 50px;
  height: 400px;
  background-blend-mode: darken;
  background-size: cover;
  background: rgba(0,0,0,0.3)url("p1.jpe");
  
}
.slidos h1{
  font-size: 50px;
  color: #fff;
  text-align: center;
  top: 40%;
  margin: 80px;
  padding-bottom: 5px;
  justify-content: center;
  align-items: center;
  cursor:pointer;
  animation: movedown 1s linear 1;


}
@keyframes movedown{
  0%{
    transform: translateY(-100%);
  }
   100%{
    transform: translateY(0%);
  }
}

.btv{
  background: #228B22  ;
  position: relative;
  color: #fff;
  border-radius: 20px;
  font-size: 20px;
}
.ts{
  text-align: center;
  padding-left: 10em;
  font-size: 16px;
  cursor: pointer;
  margin: 90px 0;
}
.dd{
  
  padding-left: 10px;
  margin: 80px;

}
.cb span{
  color: #778899    ;
  text-align: center;
  display: block;
  margin: 25px 0px;
  font-size: 25px;
}
.al p{
  color: #778899;
  font-size: 20px;
  margin-top: 20px 0;
  padding-left: 5px;
}

.gallery{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        justify-content: center;
        align-items: center;
        text-align: center;
        grid-gap: 5px;
        transition: 2s;
      }
      .gallery img{
        border-radius: 20px;
        width: 280px;
        margin: 50px;
        transition: 1s;

      }
      .gallery img:hover{
        transform: scale(1.2);
        z-index: 2;
      }
      .galleryy{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        grid-gap: 5px;
        transition: 2s;
      }
      .galleryy img{
        border-radius: 10px;
        width: 280px;
        margin: 50px;
        transition: 1s;

      }
      .galleryy img:hover{
        transform: scale(1.2);
        z-index: 2;
      }
       @media (max-width: 991px){
        .gallery{
         flex-direction: column;
    grid-gap: 50px;
    grid-template-columns: 1fr;
  }
      }
      .galleryy{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        grid-gap: 5px;
        transition: 2s;
      }
      .galleryy img{
        border-radius: 10px;
        width: 280px;
        margin: 50px;
        transition: 1s;

      }
      .galleryy img:hover{
        transform: scale(1.2);
        z-index: 2;
      }
      .qq{
         width: 100%;
  top: 50px;
  height: 40px;
  text-align: center;
      }
      .loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #F4F4F6;
  transition: opacity 0.75s, visibility 0.75s;
}

.loader--hidden {
  opacity: 0;
  visibility: hidden;
}

.loader::after {
  content: "";
  width: 65px;
  height: 65px;
  border: 2px solid #dddddd;
  border-top-color: #5555B8;
  border-radius: 50%;
  animation: loading 0.75s ease infinite;
}

@keyframes loading {
  from {
    transform: rotate(0turn);
  }
  to {
    transform: rotate(1turn);
  }
}

      .qq p{
        color: #13B3E7;
        align-items: center;
        font-size: 25px;
        text-align: center;
        justify-content: center;
      }
      .qq span{
         font-size: 30px;
  color: #5175BB;
  text-align: center;
  top: 40%;
  margin: 80px;
  justify-content: center;
  align-items: center;
  cursor:pointer;
      }
      .cc p{
        font-size: 30px;
        text-align: center;
      }
       .db{position: fixed;
    background: #000;
    height: 50px;
   
    width: 100%;
    display: flex;
    display: grid;
    z-index: 1000;
    grid-template-columns: repeat(4,1fr);
    
  }
  .db p{
     color: #fff;
     font-size: 11px;

     margin-top: 15px;     align-items: center;
     justify-content: center;
    margin-left: 80px;
  }
   .db h5{
     color: #fff;
     font-size: 11px;
     margin-top: 15px; 
    margin-left: 110px;
    margin-bottom: 80px;
  }
  .db a{
    text-decoration: none;
    color: #fff;
    margin-top: 11px; 
    margin-left: 220px;
    
    
    
  }
   @media(max-width: 890px){
   
  .db p{

    font-size: 7.5px;
    height: auto;
    width: 170px;
    margin: 15px;
  }
  .db h5{
    margin:15px;
      width: 200px;
      height: auto;
      font-size: 7.5px;

  }
  .db a{
    margin: 15px;
    font-size: 7.5px;
    width: 90px;
    display: flex;
    }

}


   </style>
<body><div class="loader"></div>
   <div class="db">
    <h5>APPELEZ-NOUS : +33 4 67 80 22 19</h5>
    <h5>Contact : salaris.laurent@sasmetis.fr</h5>
     <div class="ss"><a href="acceuil.php"><img src="France.jpg" width="25px" > FR</img></a></div>
              <div class="ss1"><a href="home.php"><img src="uk.webp" width="25px" > EN</img></a></div>
  </div>

  </div>  <br>
  <div class="ff"></div>
<header>
    <a href="acceuil.php" class="logo"><img src="LOGO LRTI1.png" width="140px"></a>

    <input type="checkbox" name="" id="menu-bar">
    <label for="menu-bar"><i class="fa-solid fa-bars"></i>    </label>

    <nav class="navbar">
      <ul>
      <li><a href="Acceuil.php">Acceuil</a></li>
      <li><a href="#">Qui sommes nous <i class="fa-solid fa-caret-down"></i></a>
        <ul>
          <li><a href="presentation.php">Presentation</a></li>
          <li><a href="tuyauterie.php">Tuyauterie</a></li>
          <li><a href="chaudronnerie.php">chaudrennerie</a></li>
          <li><a href="qualite.php">Sécurité et qualité</a></li>
          
        </ul>
      </li>

       <li><a href="#">Realisation <i class="fa-solid fa-caret-down"></i></a>
        <ul>
          <li><a href="skid.php">Skid d'injection</a></li>
          <li><a href="pomperie.php">Pomperie</a></li>
          <li><a href="bac.php">Bac</a></li>
          <li><a href="chargement.php">Poste de chargement</a></li>
          <li><a href="rack.php">Rack Aérien</a></li>
          <li><a href="inox.php">Inox</a></li>
          <li><a href="atelier.php">En Atelier</a></li>
          <li><a href="manchete.php">Manchette SEA LINE </a></li>
          <li><a href="raccordement.php">Raccordement</a></li>
          <li><a href="projet.php">Creation avant projet</a></li>
          
        </ul>
      </li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="recrutement.php">Recrutement</a></li>


    </ul>
  </header>
      

  <br><br><br>
  <div class="sl">
  <figure>
     <div class="slidos"><p></p><br><br>
      <h1>En Atelier</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      

      
    
    <br></div><br>
    <div class="qq">
  <p>L’expérience et le savoir faire de LRTI sont mis au service de nos clients dans la réalisation de leurs divers projets,
tel que les skids injection aux postes de chargements</p>
  <h2>Projet Numero 1</h2>
      </div>
  

  <br><br><br><br>
  <div class="gallery">
      <a href="p11.jpg" data-lightbox="models" data-title="Caption1">
      <img src="p11.jpg" width=""></a>
      <a href="p2.jpg" data-lightbox="models" data-title="Caption2">
      <img src="p2.jpg" width="400px"></a>
      <a href="p4.jpg" data-lightbox="models" data-title="Caption2">
      <img src="p4.jpg" width="400px"></a>
      
  </div>
<div class="gallery">
      <a href="p5.jpg" data-lightbox="models" data-title="Caption4">
      <img src="p5.jpg" width=""></a>
      <a href="p6.jpg" data-lightbox="models" data-title="Caption5">
      <img src="p6.jpg" width="400px"></a>
      <a href="p7.jpg" data-lightbox="models" data-title="Caption6">
      <img src="p7.jpg" width="400px"></a>
  </div>
  <div class="gallery">
      <a href="p8.jpg" data-lightbox="models" data-title="Caption4">
      <img src="p8.jpg" width=""></a>
      <a href="p9.jpg" data-lightbox="models" data-title="Caption5">
      <img src="p9.jpg" width="400px"></a>
      <a href="p10.jpg" data-lightbox="models" data-title="Caption6">
      <img src="p10.jpg" width="400px"></a>
  </div>
   <div class="bttn">
  <img src="haut.jpg" class="iio">
</div>
<script type="text/javascript">
const bttn = document.querySelector('.bttn');

bttn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})
</script>
<script type="text/javascript">
      window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});</script>

  
  <script src="lightbox-plus-jquery.js">
  
</script>


   

        
        <section class="sec1"></section>
        <section class="content">

<script type="text/javascript">
 $(window).on('scroll',function(){
            if($(window).scrollTop()){
                $('nav').addClass('black');
            }
            else{
                $('nav').removeClass('black');
            }
        })
  /*menu button onclick function*/         $(document).ready(function(){
                $('.menu h4').click(function(){
                    $("nav ul").toggleClass("active")
            })
            })
</script>

   



    
    <script>

                $(document).ready(function(){
                    $('.customer-logos').slick({
                        slidesToShow: 6,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 1500,
                        arrows: false,
                        dots: false,
                        pauseOnHover: false,
                        responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 4
                            }
                        }, {
                            breakpoint: 520,
                            settings: {
                                slidesToShow: 3
                            }
                        }]
                    });
                });
                
      </script>
</div>



<hr>
 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Information</h4>
          <h5><i class="fa-solid fa-location-dot"></i>  Parc Aquatechnique
              3 rond point du Luxembourg
                34000 Sète</h5><br>
          <h5> <i class="fa-sharp fa-solid fa-phone"></i> +33 (0) 4 67 80 22 19</h5><br>
          <h5> <i class="fa-solid fa-fax"></i></i>  0467481662 </h5><br>
          <h5><i class="fa-solid fa-envelope"></i> salaris.laurent@sasmetis.fr  </h5>
        </div>
        <div class="footer-col">
          <h4>A propos</h4>
          <ul>
            <li><a href="presentation.php">Presentation</a></li><br>
            <li><a href="tuyauterie.php">Tuyauterie & chaudrennerie</a></li><br>
            <li><a href="qualite.php">Qualité & sécurité</a></li><br>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Realisation</h4></a>
            <ul>
            <li><a href="skid.php">Skid d'injection</a></li>
          <li><a href="pomperie.php">Pomperie</a></li>
          <li><a href="chargement.php">Poste de chargement</a></li>
          <li><a href="rack.php">Rack Aérien</a></li>
          <li><a href="jetty.php">Jetty</a></li>
          <li><a href="inox.php">Inox</a></li>
          <li><a href="atelier.php">En Atelier</a></li>
          <li><a href="manchete.php">Manchette SEA LINE </a></li>
          <li><a href="raccordement.php">Raccordement</a></li>
          <li><a href="project.php">Creation avant projet</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Suivez-nous</h4>
          <div class="social-links">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.linkedin.com/company/lrti/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          </div><br><br>
             <div class="footer-col">
          <a href="#"><h4> Nous-Contactez</h4></a>
        </div>
           
      </div><br><br><br>
      <div class="copy">
        <br>
        <footer>&copy; Copyright 2024  LRTI, tous droits réservés | Mentions Légale</footer>

      </div>
    </div>
  </footer>


</body>
</html>
