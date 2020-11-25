<?php
/*
Template Name: Шаблон для отзывы
*/

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>
   <div class="container">
      <div class="page">

         <div class="entry-header">
            <h1><?php $sp_obj->get_title(); ?></h1>
            <div class="title-lines"></div>
         </div>

         <div class="entry-content">
            <div class="about-wrapper">

               <div class=""><?php the_content(); ?></div>
            </div>
         </div>

      </div>
   </div>





<?php endwhile;

get_sidebar();
get_footer();
