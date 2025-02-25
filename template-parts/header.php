<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="/assets/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
	<header class="bg-white">
		<div class="container">
			<div class="row bg-white py-3">
				<div class="col-3">
					<img src="/images/logo.svg" alt="logo" />
				</div>
				<div class="col-4">
					<div class="d-flex gap-4 fw-bolder">
						<div>
							<img src='/images/geo.svg' alt='geo' />
							<a class="text-primary fs-8" href="javascript:alert('Выберите город')">Тюмень</a>
							<img src='/images/polygon.svg' alt='polygon' />
						</div>
						<div class="text-muted fs-8">ул. Клары Цеткин 61к1</div>
					</div>
					<div class="mt-2 text-muted fw-bolder fs-9">
						Ежедневно: с 09:00 до 19:00
					</div>
				</div>
				<div class='col-3'>
					<div class='gap-4'>
						<div class="d-flex align-items-center fw-bolder justify-content-end">
							<img class='me-1' src='/images/phone.svg' alt='phone' />
							<div>+7 982 785 03 57</div>
						</div>
						<div class='mt-2 d-flex align-items-center justify-content-end fw-bolder'>
							<img class='me-1' src='/images/mail.svg' alt='mail' />
							<div class="text-muted fs-8">mebelev-ural@yandex.ru</div>
						</div>
					</div>
				</div>
				<div class="col-2">
					<div class="gap-4">
						<div class='d-flex justify-content-center fw-bolder'>
							<img class='me-2' src='/images/cart.svg' alt='cart' />
							<div class="text-muted fs-8">Корзина(<span class="text-primary">16</span>)</div>
						</div>
						<div class="d-flex justify-content-center mt-3">
							<a id="openPopup" class="cursor-pointer text-primary text-uppercase fs-10">заказать звонок</a>
							<?php require("../pages/orderCallWindow.php") ?>
							<script>
								const openPopupButton = document.getElementById("openPopup")
								const popup = document.getElementById("popup")
								openPopupButton.addEventListener("click", () => {
									popup.style.display = "flex"
								})
								popup.addEventListener("click", (event) => {
									if (event.target === popup) {
										popup.style.display = "none"
									}
								})
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-primary">
			<nav class="container d-flex align-items-center">
				<ul class="list-inline text-uppercase fw-bold fs-9 mb-0">
					<li class="list-inline-item">
						<a href="#" class="text-white me-3 text-decoration-none">Каталог<img class='ms-1'
								src='/images/chevron_catalog.svg' /></a>
					</li>
					<li class="list-inline-item">
						<a href="#" class="text-white me-3 text-decoration-none">О Нас</a>
					</li>
					<li class="list-inline-item">
						<a href="#" class="text-white me-3 text-decoration-none">Оптовикам</a>
					</li>
					<li class="list-inline-item">
						<a href="#" class="text-white me-3 text-decoration-none">Покупателям</a>
					</li>
					<li class="list-inline-item">
						<a href="#" class="text-white me-3 text-decoration-none">Новости</a>
					</li>
					<li class="list-inline-item">
						<a href="#" class="text-white me-3 text-decoration-none">Контакты</a>
					</li>
				</ul>
				<div class="nav__search">
					<input type="text" class="nav__search-input" placeholder="Поиск по сайту" />
					<img class="icon" src=/images/search.svg />
				</div>
			</nav>
		</div>
	</header>