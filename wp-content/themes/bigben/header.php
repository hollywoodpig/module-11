<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header <?= is_home() ? 'header_active' : '' ?>">
			<div class="container">
				<div class="header__content">
					<button class="hamburger">
						<span class="hamburger__line"></span>
						<span class="hamburger__line"></span>
					</button>
					<a href="#" class="logo">
						<strong>Big</strong>
						<span class="text-accent">Ben</span>
					</a>
					<nav class="nav">
						<ul class="nav__menu">
							<li><a href="#">Главная</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">Наши школы</a></li>
							<li><a href="#">Новости</a></li>
							<li><a href="#">Наши услуги</a></li>
							<li><a href="#">Преподаватели</a></li>
						</ul>
					</nav>
					<a href="tel:88005553535">8-(800)-555-35-35</a>
				</div>
				<div class="header__footer">
					<nav class="nav nav_mobile <?= is_home() ? 'nav_home' : '' ?>">
						<ul class="nav__menu">
							<li><a href="#">Главная</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">Наши школы</a></li>
							<li><a href="#">Новости</a></li>
							<li><a href="#">Наши услуги</a></li>
							<li><a href="#">Преподаватели</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>