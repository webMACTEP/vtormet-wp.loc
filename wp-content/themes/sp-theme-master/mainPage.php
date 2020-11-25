<?php
/*
Template Name: Шаблон для главной
*/

get_header(); ?>

<section class="intro">
	<div class="container">
		<h1 class="intro__title"><?php the_field("intro__title", 15); ?></h1>
		<div class="intro__subtitle"><?php the_field("intro__subtitle", 15); ?>
			<br><span><?php the_field("intro__span", 15); ?></span></div>
		<a href="../#order">
			<div style="cursor: pointer" class="intro__button">Узнать условия и цены</div>
		</a>
	</div>
</section>
<section class="wappgroup">
	<div class="container">
		<div class="wappgroup__blok">
			<div class="wappgroup__title">Хотите быть в курсе изменений цен на металл?<br>
				Добавляйтесь в нашу группу whatsapp</div>
			<div style="cursor: pointer" class="wappgroup__button"><img src="<?php echo vm_get_image('wapp.svg') ?>" alt="">Хочу получать цены</div>
		</div>
	</div>
</section>
<section class="uslugi">
	<div class="container">
		<div class="uslugi__title">наши услуги</div>
		<div class="wrapper">
			<a href="<?php echo get_permalink(186); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('01.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title">Прием лома и чёрных металлов</div>
				</div>
			</a>
			<a href="<?php echo get_permalink(188); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('02.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title">приём лома кабель </div>
				</div>
			</a>
			<a href="<?php echo get_permalink(190); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('03.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title">лома цветных
						металлов </div>
				</div>
			</a>
			<a href="<?php echo get_permalink(192); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('04.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title">утилизация
						спецтехники</div>
				</div>
			</a>
			<a href="<?php echo get_permalink(194); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('05.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title">скупка металлопрокат</div>
				</div>
			</a>
			<a href="<?php echo get_permalink(196); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('06.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title"> утилизация кораблей</div>
				</div>
			</a>
			<a href="<?php echo get_permalink(198); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('07.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title">утилизация
						автомобилей </div>
				</div>
			</a>
			<a href="<?php echo get_permalink(200); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('08.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title">демонтажи
						металлоконструкций </div>
				</div>
			</a>
			<a href="<?php echo get_permalink(202); ?>">
				<div class="uslugi__item"><img src="<?php echo vm_get_image('09.jpg') ?>" alt="">
					<div class="uslugi__bg"></div>
					<div class="uslugi__border"></div>
					<div class="uslugi__item-title">вывоз металлолома</div>
				</div>
			</a>
		</div>
	</div>
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
<section class="price">
	<div class="container">
		<div class="price__title">Стоимость приема металлолома</div>
		<div class="price__subtitle">Цены актуальны на 22.10.2020</div>
		<?php $the_query = new WP_Query('p=98'); ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

			<?php the_content(); ?>
			<?php edit_post_link(__('Редактировать')); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<div style="cursor: pointer" class="price__button">показать ещё</div>
	</div>
</section>
<section class="price-sm">
	<div class="container">
		<div class="price__title">Стоимость приема металлолома</div>
		<div class="price__subtitle">Цены актуальны на 22.10.2020</div>
		<?php $the_query = new WP_Query('p=574'); ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

			<?php the_content(); ?>
			<?php edit_post_link(__('Редактировать')); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<div style="cursor: pointer" class="price__button">показать ещё</div>
	</div>
</section>
<section class="price-dis">
	<div class="container">
		<div class="price-dis__title">Демонтажные работы</div>
		<?php $the_query = new WP_Query('p=138'); ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

			<?php the_content(); ?>
			<?php edit_post_link(__('Редактировать')); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>
<!-- <section class="price-dis-sm">
	<div class="container">
		<div class="price-dis__title">Демонтажные работы</div>
		<?php $the_query = new WP_Query('p=138'); ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

			<?php the_content(); ?>
			<?php edit_post_link(__('Редактировать')); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section> -->
<section class="how">
	<div class="container">
		<div class="how__title">Как сдать металл</div>
		<div class="how__line"></div>
		<div class="wrapper">

			<div class="how__column"><img src="<?php echo vm_get_image('how01.svg') ?>" alt="">Заявка по телефону или через сайт
			</div>
			<div class="how__column"><img src="<?php echo vm_get_image('how02.svg') ?>" alt="">Обговариваем условия и цену на ваш объем
			</div>
			<div class="how__column"><img src="<?php echo vm_get_image('how03.svg') ?>" alt="">Приезжают наши сотрудники и необходимая техника
			</div>
			<div class="how__column"><img src="<?php echo vm_get_image('how04.svg') ?>" alt="">Демонтируем, режем, грузим лом
			</div>
			<div class="how__column"><img src="<?php echo vm_get_image('how05.svg') ?>" alt="">Взвешиваем лом и оплачиваем наличными или
				безналично
			</div>

		</div>
		<a href="../#order">
			<div class="how__button">заявка на вывоз</div>
		</a>
	</div>
</section>
<section class="about">
	<div class="container">
		<div class="about__title">о компании</div>
		<div class="about__text">
			<?php $the_query = new WP_Query('p=140'); ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

				<?php the_content(); ?>
				<?php edit_post_link(__('Редактировать')); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
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
<section class="faq">
	<div class="container">
		<div class="faq__title">Часто задаваемые вопросы</div>
		<div class="wrapper">
			<div id="accordion" class="faq__item">
				<h3><?php the_field("faq__title01", 15); ?></h3>
				<div>
					<p><?php the_field("faq__item01", 15); ?></p>
				</div>
				<h3><?php the_field("faq__title02", 15); ?></h3>
				<div>
					<p><?php the_field("faq__item02", 15); ?></p>
				</div>
				<h3><?php the_field("faq__title03", 15); ?></h3>
				<div>
					<p><?php the_field("faq__item03", 15); ?></p>
				</div>
				<h3><?php the_field("faq__title04", 15); ?></h3>
				<div>
					<p><?php the_field("faq__item04", 15); ?></p>
				</div>
				<h3><?php the_field("faq__title05", 15); ?></h3>
				<div>
					<p><?php the_field("faq__item05", 15); ?></p>
				</div>
			</div>
		</div>
		<a href="../#order">
			<div class="faq__button">заявка на вывоз</div>
		</a>

	</div>

</section>
<section class="news">
	<div class="container">
		<div class="news__title">Новости</div>
		<div class="wrapper">

			<?php
			$pc = new WP_Query('cat=8&orderby=date&posts_per_page=4'); ?>
			<?php while ($pc->have_posts()) : $pc->the_post(); ?>
				<div class="news__column">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(array()); ?></a>
					<p><?php the_date(); ?></p>
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

				</div>
			<?php endwhile; ?>

		</div>
		<div class="news__button">читать все новости</div>
	</div>
</section>
<section class="map">
	<div class="map__container">
		<?php the_field("map__container", 15); ?>
	</div>
	<div class="container">
		<div class="map__blok">
			<div class="map__row"><img src="<?php echo vm_get_image('map01.svg') ?>" alt="">Работаем<br>
				<span><?php the_field("grafik", 15); ?></span></div>
			<div class="map__row"><img src="<?php echo vm_get_image('map02.svg') ?>" alt="">Адрес<br>
				<span><?php the_field("adress", 15); ?></span></div>
			<div class="map__row"><img src="<?php echo vm_get_image('map03.svg') ?>" alt="">Телефон<br>
				<span><?php the_field("phone", 15); ?></span></div>
		</div>
	</div>
</section>



<?php
get_footer();
