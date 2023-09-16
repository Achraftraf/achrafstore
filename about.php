<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>a propos</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img1.png" alt="">
         <h3>pourquoi choisir nous ?</h3>
         <p>notre site presente plusieurs categorie,notre service donne l'occasion a des offres</p>
         <a href="contact.php" class="btn">contacter nous</a>
      </div>

      <div class="box">
         <img src="images/about-img2.png" alt="">
         <h3>pour quoi notre service?</h3>
         <p></p>
         <a href="shop.php" class="btn">notre service</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">point de vue du clients</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>excelent service avec de la rapidite et la qualite des produits tres luxe,je suis interesse de tous ce qui est en relation avec la sante je vous dire que ce site respecte les conditions de production </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>achraf</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>je recommende ce site a tout le monde il contient tous ce qui est naturel et organique avec de la qualite,j'ai une tres bon experience je vais repeter acheter une deuxieme fois</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>ali</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>excelent site,avec un tres bon service qui offre la surete la rapidite et la qualite des produits avec des promos tres attirant,je conseille tous le monde de visiter ce dernier.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>omar</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>j'ai trouver tous les complements alimentaires que j'ai besoin surtout ce qui est en relation avec le sport</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>amina</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>je suis tres satifait des services de ce site,j'ai rien a dire,juste je souhaite un grand succes a equipe qui prend en compte les demandes des clients avec de fidelite</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>amine</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>j'ai un grand chance,je trouve ce site au hasar,je suis tres satisfait de ce dernier car il presente baucoup de produit avec de la diversite.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>maryam</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>