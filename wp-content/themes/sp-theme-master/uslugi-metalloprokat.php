<?php
/*
Template Name: uslugi-metalloprokat
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
                     'menu'            => 'uslugi-metalloprokat',
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
               <div class="uslugi-content"><?php the_content(); ?></div>
            </div>
         </div>

      </div>
   </div>


   <section class="aboutprice">
      <div class="container">
         <?php $the_query = new WP_Query('p=182'); ?>
         <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="entry-header">
               <h1><?php the_title(); ?></h1>
               <div class="title-lines"></div>
            </div>
            <?php the_content(); ?>
            <?php edit_post_link(__('Редактировать')); ?>
         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?></div>
   </section>


   <section class="order" id="order">
      <div class="container">
         <div class="order__title">Простой заказ вывоза металла в 4 шага</div>
         <div class="wrapper">
            <div class="order__steps order__step1 active">Шаг 1 <br><span>Вид металла</span></div>
            <div class="order__steps order__step2">Шаг 2 <br><span>Местоположение</span></div>
            <div class="order__steps order__step3">Шаг 3 <br><span>Демонтажные работы</span></div>
            <div class="order__steps order__step4">Шаг 4 <br><span>Информация о клиенте</span></div>
         </div>
         <div class="order__body">
            <form action="" method="get" name="form-order">
               <div class="order__inputs itemorder1">
                  <div class="order__column">Выберете вид металла: <select class="select forms focused" name="vid-metalla">
                        <option name="vid-metalla" value="null">Сделайте выбор</option>
                        <option name="vid-metalla" value="select-1">1</option>
                        <option name="vid-metalla" value="select-2">2</option>
                        <option name="vid-metalla" value="select-3">3</option>
                        <option name="vid-metalla" value="select-4">4</option>
                        <option name="vid-metalla" value="select-5">5</option>
                     </select>
                  </div>
                  <div class="order__column">Тип металла: <select class="select forms focused" name="tip-metalla">
                        <option name="tip-metalla" value="null">Сделайте выбор</option>
                        <option name="tip-metalla" value="select-1">1</option>
                        <option name="tip-metalla" value="select-2">2</option>
                        <option name="tip-metalla" value="select-3">3</option>
                        <option name="tip-metalla" value="select-4">4</option>
                        <option name="tip-metalla" value="select-5">5</option>
                     </select>
                  </div>
                  <div class="order__column">Вес: <input type="text" class="forms focused" name="ves" placeholder="">
                  </div>
               </div>
               <div class="order__inputs itemorder2">
                  <div class="order__column">Город:<input type="text" class="forms focused" name="gorod" placeholder="">
                  </div>
                  <div class="order__column">Нужен ли вывоз?<select class="select forms focused" name="vivoz">
                        <option name="vivoz" value="null">Сделайте выбор</option>
                        <option name="vivoz" value="select-1">1</option>
                        <option name="vivoz" value="select-2">2</option>
                        <option name="vivoz" value="select-3">3</option>
                        <option name="vivoz" value="select-4">4</option>
                        <option name="vivoz" value="select-5">5</option>
                     </select>
                  </div>
               </div>
               <div class="order__inputs itemorder3">
                  <div class="order__column">Нужен ли демонтаж?<select class="select" class="select forms focused" name="dem">
                        <option name="ddd" value="null">Сделайте выбор</option>
                        <option name="ddd" value="select-1">1</option>
                        <option name="ddd" value="select-2">2</option>
                        <option name="ddd" value="select-3">3</option>
                        <option name="ddd" value="select-4">4</option>
                        <option name="ddd" value="select-5">5</option>
                     </select>
                  </div>
               </div>
               <div class="order__inputs itemorder4">
                  <div class="order__column">Ваше имя:<input type="text" class="forms focused" name="name" placeholder="">
                  </div>
                  <div class="order__column">Номер телефона:
                     <input type="text" class="forms focused" name="tell" placeholder="">
                  </div>
               </div>
               <div class="order__buttons">
                  <div style="cursor: pointer" class="order__button previous stap1"><img src="<?php echo vm_get_image('arrow.svg') ?>" alt="">Назад</div>
                  <div style="cursor: pointer" class="order__button next">Далее <img src="<?php echo vm_get_image('arrow.svg') ?>" alt=""></div>
                  <div style="cursor: pointer" class="order__button send buttons feedback" name="send">Отправить <img src="<?php echo vm_get_image('arrow.svg') ?>" alt=""></div>
               </div>
            </form>
         </div>

      </div>
   </section>
   <section class="how uslugipage">
      <div class="container">
         <div class="entry-header">
            <h1>Как сдать металл</h1>
            <div class="title-lines"></div>
         </div>
         <div class="how__line"></div>
         <div class="wrapper">

            <div class="how__column"><img src="<?php echo vm_get_image('u01.svg') ?>" alt="">Заявка по телефону или через сайт
            </div>
            <div class="how__column"><img src="<?php echo vm_get_image('u02.svg') ?>" alt="">Обговариваем условия и цену на ваш объем
            </div>
            <div class="how__column"><img src="<?php echo vm_get_image('u03.svg') ?>" alt="">Приезжают наши сотрудники и необходимая техника
            </div>
            <div class="how__column"><img src="<?php echo vm_get_image('u04.svg') ?>" alt="">Демонтируем, режем, грузим лом
            </div>
            <div class="how__column"><img src="<?php echo vm_get_image('u05.svg') ?>" alt="">Взвешиваем лом и оплачиваем наличными или
               безналично
            </div>

         </div>

      </div>
   </section>
   <section class="about uslugipage">
      <div class="container">
         <div class="entry-header">
            <h1>Наши преимущества </h1>
            <div class="title-lines"></div>
         </div>

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
