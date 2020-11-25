<?php

/**
 * The template for displaying the footer
 */

wp_footer(); ?>

<footer class="footer">
   <div class="container">
      <div class="wrapper">
         <div class="footer__info">
            <div class="footer__title">Информация</div>
            <p><?php the_field("footer__info01", 15); ?>
            </p>
            <p><?php the_field("footer__info02", 15); ?>
            </p>
            <p> <a href="<?php echo get_permalink(3); ?>"> Соглашение о конфиденциальности.</a>
            </p>
         </div>
         <div class="footer__menu">
            <div class="footer__title">меню</div>
            <?php
            $menuM = wp_nav_menu([
               'theme_location'  => '',
               'menu'            => 'footer-menu',
               'container'       => 'false',
               'menu_class'      => '',
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
         <div class="footer__contacts">
            <div class="footer__title">Контакты</div>
            <p> <span>Работаем </span><br>
               <?php the_field("grafik", 15); ?></p>
            <p>
               <span>Адрес </span><br>
               <?php the_field("adress", 15); ?></p>
            <p>
               <span>Телефон </span><br>
               <?php the_field("phone", 15); ?></p>
         </div>
         <div class="footer__connection">
            <div class="footer__title">Быть на связи</div>
            <div class="footer__social">
               <a href="<?php the_field("vk", 15); ?>"><img src="<?php echo vm_get_image('vk.svg') ?>" alt=""></a>
               <a href="<?php the_field("inst", 15); ?>"><img src="<?php echo vm_get_image('inst.svg') ?>" alt=""></a>
               <a href="<?php the_field("ok", 15); ?>"><img src="<?php echo vm_get_image('ok.svg') ?>" alt=""></a>
               <a href="<?php the_field("fb", 15); ?>"><img src="<?php echo vm_get_image('fb.svg') ?>" alt=""></a>
            </div>
            <div style="cursor: pointer" class="footer__pricebutton"><img src="<?php echo vm_get_image('wapp.svg') ?>" alt="">Хочу получать <br> цены</div>

            <div class="footer__orderbutton"><a href="../#order"><img src="<?php echo vm_get_image('whitetrack.svg') ?>" alt="">заявка на вывоз</a></div>

         </div>
      </div>
   </div>
</footer>


<script>
   $(function() {
      $("#accordion").accordion({
         heightStyle: "content",
         collapsible: true
      });
   });
</script>
</body>

</html>