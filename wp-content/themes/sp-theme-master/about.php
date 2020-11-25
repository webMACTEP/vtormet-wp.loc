<?php
/*
Template Name: Шаблон О компании
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
               <div class="about-leftmenu">
                  <?php
                  $menuM = wp_nav_menu([
                     'theme_location'  => '',
                     'menu'            => 'about-menu',
                     'container'       => 'false',
                     'menu_class'      => 'about-menu',
                     'menu_id'         => '',
                     'echo'            => true,
                     'fallback_cb'     => 'wp_page_menu',
                     'before'          => '',
                     'after'           => '',
                     'link_before'     => '',
                     'link_after'      => '',
                     'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                     'depth'           => 0,
                     'walker'          => '',
                  ]);
                  ?>


               </div>
               <div class="about-content"><?php the_content(); ?></div>
            </div>
         </div>

      </div>
   </div>




   <section class="about pagetemp">
      <div class="container">


         <div class="wrapper">
            <div class="about__column"><img src="<?php echo vm_get_image('about01.svg') ?>" alt="">Проверенные и опломбированные весы
            </div>
            <div class="about__column"><img src="<?php echo vm_get_image('about02.svg') ?>" alt="">Большой автопарк
            </div>
            <div class="about__column"><img src="<?php echo vm_get_image('about03.svg') ?>" alt="">Более 5000 тонн лома вывозим ежемесячно
            </div>
            <div class="about__column"><img src="<?php echo vm_get_image('about04.svg') ?>" alt="">Расчет сразу после взвешивания: нал и безнал
            </div>
            <div class="about__column"><img src="<?php echo vm_get_image('about05.svg') ?>" alt="">Работаем по всей Москве и Московской Области
            </div>
         </div>
      </div>
   </section>
<?php endwhile;

get_sidebar();
get_footer();
