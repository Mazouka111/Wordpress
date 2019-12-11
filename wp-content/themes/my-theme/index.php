<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();

?>

<!-- CODE HTML COMMENCE ICI -->
<section class="section-1">
  <p class="section-titre"><?php the_field('banner_baseline'); ?></p>
  <h1 class="titre_1">Chaîne alimentaire végétale et durabilité :</h1>
  <h1 class="titre_2">une question d'équilibre !</h1>
  <a href="#">S'INSCRIRE AUX RENCONTRES</a>
</section>

<section class="section-2">
  <h1> LA CONFERENCE </h1>
  <p>_________</p>
  <p>Les rencontres de la Fondation s'intitulent cette année "chaine alimentaire <br> vegetale et durabilité : une question d'équilibre" ! Elles se tiendront le 3 decembre prochain a Bruxelles <br> et auront pour objectif
  de decrypter la transition nutritionnelle des systémes alimentaires a travers le monde, <br> qui appelle a favoriser une alimentation plus vegetale. </p>
</section>

<section class="section-3">
<p> <br>
<br>
<br> <br> <br>  </p>
</section>

<?php

  }
}
?>

</div>

<?php get_footer(); ?>
