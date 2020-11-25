<?php

/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script src="http://vtormet-wp.loc/feedback/js/feedback.js"></script>
	<script src="http://vtormet-wp.loc/feedback/js/jquery.arcticmodal.js"></script>
	<script src="http://vtormet-wp.loc/feedback/js/jquery.jgrowl.js"></script>

	<link rel="stylesheet" type="text/css" href="http://vtormet-wp.loc/feedback/css/jquery.arcticmodal.css">
	<link rel="stylesheet" type="text/css" href="http://vtormet-wp.loc/feedback/css/jquery.jgrowl.css">
	<link rel="stylesheet" type="text/css" href="http://vtormet-wp.loc/feedback/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<section class="bt-top">

		<div id="button-up">
			<img src="<?php echo vm_get_image('btn-top.svg') ?>" alt="">
		</div>
	</section>

	<section class="modals">
		<div class="modals__bg">
		</div>
		<div class="modals__body">
			<div class="modals__close"></div>


			<div class="modals__01">
				<div class="modals__title-sm">хочу получать цены</div>
				<form action="" method="get" name="form-price">
					<p>Ваше Имя:</p>
					<input type="text" class="forms focused" name="name" placeholder="">
					<p>Номер телефона:</p>
					<input type="text" class="forms focused" name="tell" placeholder="">
					<div style="cursor: pointer" class="modals__button buttons feedback" name="send">отправить заявку</div>
					<div class="checkbox">
						<input type="checkbox" value="да" name="checkbox" checked="checked">
						<span>Согласен с условиями обработки персональных данных</span></div>
				</form>
			</div>


			<div class="modals__02">
				<div class="modals__title-sm">оставить отзыв</div>
				<form action="" method="get" name="form-rew">
					<p>Ваше Имя:</p>
					<input type="text" class="forms focused" name="name" placeholder="">
					<p>Номер телефона:</p>
					<input type="text" class="forms focused" name="tell" placeholder="">
					<p>E-mail:</p>
					<input type="text" class="forms focused" name="e-mail" placeholder="">
					<p>Рейтинг</p>
					<img src="<?php echo vm_get_image('stars.svg') ?>" alt="">
					<div class="radio">
						<input type="radio" value="1 звезда" name="radio">
						<input type="radio" value="2 звезды" name="radio">
						<input type="radio" value="3 звезды" name="radio">
						<input type="radio" value="4 звезды" name="radio">
						<input type="radio" value="5 звезд" name="radio">
					</div>
					<p>Отзыв:</p>
					<textarea name="text" placeholder=""></textarea>
					<div style="cursor: pointer" class="modals__button buttons feedback" name="send">отправить отзыв</div>
					<div class="checkbox">
						<input type="checkbox" value="да" name="checkbox" checked="checked">
						<span>Согласен с условиями обработки персональных данных</span></div>
				</form>
			</div>

			<div class="modals__03">
				<div class="modals__title-big">Спасибо!</div>
				<img src="<?php echo vm_get_image('spasibo.svg') ?>" alt="">
				<div class="modals__title-mdl">Ваша заявка успешно отправлена</div>

			</div>



		</div>
	</section>
	<header class="header">
		<nav class="header__menu">

			<?php
			$menuM = wp_nav_menu([
				'theme_location'  => '',
				'menu'            => 'mobile-menu',
				'container'       => 'false',
				'menu_class'      => 'header__list',
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
			?> <div class="wrapper">
				<div class="header__item"><img src="<?php echo vm_get_image('grafik.svg') ?>" alt="">Работаем <br><span>с 8:00 до 23:00</span>
				</div>
				<div class="header__item"><img src="<?php echo vm_get_image('adress.svg') ?>" alt="">Адрес<br><span>Москва, ул. Чичерина,
						124</span>
				</div>
				<div class="header__item"><img src="<?php echo vm_get_image('phone.svg') ?>" alt="">Телефон<br><span>8 800-000-00-00</span></div>
			</div>
			<div class="header__menu-button"> <img src="<?php echo vm_get_image('whitetrack.svg') ?>" alt=""> Заявка на вывоз</div>
		</nav>

		<div class="header__row1">
			<div class="container">
				<div class="wrapper">
					<div class="header__logo-small">
						<a href="../"><img src="<?php echo vm_get_image('header-logo-sm.svg') ?>" alt=""></a></div>
					<div class="header__burger">
						<span></span>
					</div>

					<div class="header__title"><?php the_field("header__title", 15); ?></div>
					<div class="header__social">
						<a href="<?php the_field("vk", 15); ?>"><img src="<?php echo vm_get_image('vk.svg') ?>" alt=""></a>
						<a href="<?php the_field("inst", 15); ?>"><img src="<?php echo vm_get_image('inst.svg') ?>" alt=""></a>
						<a href="<?php the_field("ok", 15); ?>"><img src="<?php echo vm_get_image('ok.svg') ?>" alt=""></a>
						<a href="<?php the_field("fb", 15); ?>"><img src="<?php echo vm_get_image('fb.svg') ?>" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		<div class="header__row2">
			<div class="container">
				<div class="wrapper">
					<div class="header__logo">
						<a href="../"><img src="<?php echo vm_get_image('header-logo.svg') ?>" alt=""></a></div>

					<div class="header__item"><img src="<?php echo vm_get_image('grafik.svg') ?>" alt="">Работаем <br><span><?php the_field("grafik", 15); ?></span>
					</div>
					<div class="header__item"><img src="<?php echo vm_get_image('adress.svg') ?>" alt="">Адрес<br><span><?php the_field("adress", 15); ?></span>
					</div>
					<div class=" header__item"><img src="<?php echo vm_get_image('phone.svg') ?>" alt="">Телефон<br><span><?php the_field("phone", 15); ?></span></div>
					<a href="../#order">
						<div class="header__item button"><img src="<?php echo vm_get_image('truck.svg') ?>" alt="">Заявка <br>на вывоз</div>
					</a>
				</div>
			</div>
		</div>
		<nav class="header__nav">
			<div class="container">
				<div class="wrapper">
					<div style="cursor: pointer" class="header__burger1">
						<span></span>
					</div>
					<?php
					$menuM = wp_nav_menu([
						'theme_location'  => '',
						'menu'            => 'header-menu',
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
				<div class="header__menu1">
					<?php
					$menuM = wp_nav_menu([
						'theme_location'  => '',
						'menu'            => 'uslugi01',
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
					<?php
					$menuM = wp_nav_menu([
						'theme_location'  => '',
						'menu'            => 'uslugi02',
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
					<?php
					$menuM = wp_nav_menu([
						'theme_location'  => '',
						'menu'            => 'uslugi03',
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
			</div>

		</nav>

	</header>