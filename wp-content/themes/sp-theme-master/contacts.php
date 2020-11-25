<?php
/*
Template Name: Шаблон для contacts
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




   <section class="order contacts" id="order">
      <div class="container">
         <div class="order__title contacts">Простой заказ вывоза металла в 4 шага</div>
         <div class="wrapper">
            <div class="contacts order__steps order__step1 active">Шаг 1 <br><span>Вид металла</span></div>
            <div class="contacts order__steps order__step2">Шаг 2 <br><span>Местоположение</span></div>
            <div class="contacts order__steps order__step3">Шаг 3 <br><span>Демонтажные работы</span></div>
            <div class="contacts order__steps order__step4">Шаг 4 <br><span>Информация о клиенте</span></div>
         </div>
         <div class="order__body contacts">
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
<?php endwhile;

get_sidebar();
get_footer();
