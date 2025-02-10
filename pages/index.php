<?php require("../template-parts/header.php"); ?>
<div id="carouselExampleControls" class='carousel slide' data-bs-ride="false">
	<div class='carousel-inner'>
		<div class="carousel-item active">
			<div class='home__page'>
				<div class="ps-5 d-flex w-100 justify-content-center flex-column">
					<h1 class="text-white fw-bolder fs-1 text-wrap">Промышленная<br> металлическая мебель</h1>
					<p class='text-white fs-4 fw-bolder'>с гарантией от 12 месяцев в Тюмени</p>
					<button class="home__button">подробнее</button>
				</div>
			</div>
		</div>
		<div class=' carousel-item'>
			<div class="home__page">
				<div class="d-flex ps-5 w-100 justify-content-center flex-column">
					<h1 class="text-white fw-bolder fs-1 text-wrap">Промышленная<br> металлическая мебель</h1>
					<p class='text-white fs-4 fw-bolder'>с гарантией от 12 месяцев в Тюмени</p>
					<button class="home__button">подробнее</button>
				</div>
			</div>
		</div>
		<div class='carousel-item'>
			<div class='home__page'>
				<div class="ps-5 d-flex w-100 justify-content-center flex-column">
					<h1 class="text-white fw-bolder fs-1 text-wrap">Промышленная<br> металлическая мебель</h1>
					<p class='text-white fs-4 fw-bolder'>с гарантией от 12 месяцев в Тюмени</p>
					<button class="home__button">подробнее</button>
				</div>
			</div>
		</div>
		<div class='position-absolute bottom-0 end-0 translate-middle'>
			<button type='button' class="border-0 bg-primary rounded-circle" data-bs-slide="prev"
				data-bs-target="#carouselExampleControls">
				<img class="home__chevron-img" src='/images/chevron_left.svg' />
			</button>
			<button type='button' class="border-0 bg-primary rounded-circle" data-bs-slide='next'
				data-bs-target='#carouselExampleControls'>
				<img class="home__chevron-img" src='/images/chevron_right.svg' />
			</button>
		</div>
	</div>
</div>
<div class="d-flex justify-content-center align-items-center mt-5 mb-5">
	<h2 class="text-black fw-bolder">Популярные товары<h2>
</div>
<div id="carouselProducts" class="carousel slide">
	<div class="d-flex justify-content-center align-items-center">
		<div class="pe-2">
			<button type="button" class="border-0 bg-primary rounded-circle" data-bs-target="#carouselProducts"
				data-bs-slide="prev">
				<img class='home__chevron-img' src='/images/chevron_left.svg' />
			</button>
		</div>
		<div class='container ps-0 pe-0 ms-0 me-0'>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container d-flex ps-0 pe-0 justify-content-between gap-2 ms-0 me-0">
						<?php for ($i = 0; $i < 4; $i++) : ?>
							<div class='home__item'>
								<img class="d-block" src='/images/popularitem.svg' />
								<div class="fw-bolder">
									<p class='mb-1 fs-6'>
										Шкаф&nbsp;для&nbsp;раздевалок
									</p>
									<p class="fs-8">
										ПРАКТИК&nbsp;Стандарт
									</p>
								</div>
								<p class="fs-8 mb-1">
									ВхШхГ,&nbsp;мм:&nbsp;1830х418х500
								</p>
								<p class="fs-8 mb-1">
									Вес,&nbsp;кг:&nbsp;52.5
								</p>
								<div class="d-flex gap-3 align-items-end">
									<p class="fw-bolder fs-6">
										20&nbsp;320&nbsp;руб.
									</p>
									<p class="fs-8 text-muted text-decoration-line-through">
										20&nbsp;320&nbsp;руб.
									</p>
								</div>
								<div class="d-flex mt-0">
									<div class="d-flex align-items-center me-2">
										<button class="counter__button-decrement">-</button>
										<div class="d-flex align-items-center">
											<input value=1 class="counter" />
										</div>
										<button class='counter__button-increment'>+</button>
									</div>
									<div>
										<button class='home__button'>в корзину</button>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container d-flex ps-0 pe-0 justify-content-between gap-2 ms-0 me-0">
						<?php for ($i = 0; $i < 4; $i++) : ?>
							<div class='home__item'>
								<img class="d-block" src='/images/popularitem.svg' />
								<div class="fw-bolder">
									<p class='mb-1 fs-6'>
										Шкаф&nbsp;для&nbsp;раздевалок
									</p>
									<p class="fs-8">
										ПРАКТИК&nbsp;Стандарт
									</p>
								</div>
								<p class="fs-8 mb-1">
									ВхШхГ,&nbsp;мм:&nbsp;1830х418х500
								</p>
								<p class="fs-8 mb-1">
									Вес,&nbsp;кг:&nbsp;52.5
								</p>
								<div class="d-flex gap-3 align-items-end">
									<p class="fw-bolder fs-6">
										20&nbsp;320&nbsp;руб.
									</p>
									<p class="fs-8 text-muted text-decoration-line-through">
										20&nbsp;320&nbsp;руб.
									</p>
								</div>
								<div class="d-flex mt-0">
									<div class="d-flex align-items-center me-2">
										<button class="counter__button-decrement">-</button>
										<div class="d-flex align-items-center">
											<input value=1 class="counter" />
										</div>
										<button class='counter__button-increment'>+</button>
									</div>
									<div>
										<button class='home__button'>в корзину</button>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="ps-2">
			<button type="button" class="border-0 bg-primary rounded-circle" data-bs-target="#carouselProducts"
				data-bs-slide="next">
				<img class='home__chevron-img' src='/images/chevron_right.svg' />
			</button>
		</div>
	</div>
</div>
<div class='container ps-0 pe-0'>
	<div class='home__consultation'>
		<div class="d-flex align-items-center">
			<img class="ps-5 pe-4" src='/images/consult.svg' alt='' />
			<div class="d-flex flex-column">
				<p class='fw-bolder text-white mb-1 fs-5'>Закажите бесплатную консультацию</p>
				<p class='fw-bolder text-white mb-0 fs-6'>Перезвоним за 5 минут и подробно расскажем про товар</p>
			</div>
			<button class='home__button-consult'>Получить консультацию</button>
		</div>
	</div>
</div>
<div class="d-flex justify-content-center">
	<h3 class="fw-bolder text-black pb-5 pt-5 fs-11">
		Продажа металлической офисной и производственной мебели
	</h3>
</div>
<div class="container d-flex flex-wrap gap-4 ps-0 pe-0">
	<?php for ($i = 0; $i < 6; $i++): ?>
		<div class='home__item-office'>
			<div class='d-flex flex-column'>
				<img class='item__office-img' src='/images/item_office.svg' alt='' />
				<p class="fw-bolder mb-2 fs-8">Шкафы металлические</p>
				<p class="mb-1 fs-8 text-muted">Шкафы для раздевалок</p>
				<p class="mb-1 fs-8 text-muted">Шкафы для сумок металлические</p>
				<p class="mb-1 fs-8 text-muted">Шкафы сушильные</p>
				<p class="mb-1 fs-8 text-muted">Архивные шкафы</p>
				<p class="mb-1 fs-8 text-muted">Бухгалтерские шкафы</p>
				<div class="d-flex align-items-center justify-content-center mt-2">
					<span class="fs-8">Ещё+</span>
				</div>
			</div>
		</div>
	<?php endfor; ?>
</div>
<div class="d-flex justify-content-center mt-5 mb-5">
	<a class="text-primary fw-bolder fs-9 text-uppercase text-decoration-underline" href='#'>
		Все товары
	</a>
</div>
<div class='container mb-5'>
	<div class="row gap-3 flex-nowrap">
		<div class="col-5 ps-0 pe-0 overflow-hidden rounded-1">
			<img src='/images/about.png' class="h-100" alt='' />
		</div>
		<div class="bg-primary col rounded-1 pe-0 ps-0">
			<div class="about__wrapper">
				<h4 class="text-white fw-bolder fs-11">
					О компании
				</h4>
				<p class="text-white fs-9">
					Компания «Бизнес-Комплект» предлагает широкий выбор металлических стеллажей и
					мебели для
					бизнеса. Мы поможем
					подобрать решение, которое обеспечит надежное хранение вашего груза и оптимизирует использование
					пространства.
				</p>
				<p class="text-white fs-9">
					В любой сфере бизнеса хранение предметов — будь то товары, документы или
					оборудование —
					является важной
					задачей. Металлические стеллажи стали незаменимым инструментом для эффективной организации хранения,
					благодаря
					своей прочности, долговечности и универсальности.
				</p>
				<p class="text-white fs-9">
					Металлический стеллаж — это сборно-разборная конструкция из стальных элементов,
					предназначенная для хранения
					различных видов груза.
				</p>
			</div>
		</div>
	</div>
</div>
<div class="d-flex container ps-0 pe-0">
	<div class="d-flex pe-2">
		<div class="d-flex align-items-center">
			<button class="bg-primary border-0 rounded-circle">
				<img class="info__chevron-img" src='/images/chevron_right.svg' alt='' />
			</button>
		</div>
		<div class="ps-2 align-items-center col">
			<p class="mb-1 fs-8">
				35 городов присутствия
			</p>
			<p class="text-muted mb-0 fs-8">
				отправляем по всей России
			</p>
		</div>
	</div>
	<div class="d-flex pe-2">
		<div class="d-flex align-items-center">
			<button class="bg-primary border-0 rounded-circle">
				<img class="info__chevron-img" src='/images/chevron_right.svg' alt='' />
			</button>
		</div>
		<div class="ps-2 align-items-center col">
			<p class="mb-1 fs-8">
				Бесплатная доставка
			</p>
			<p class="text-muted mb-0 fs-8">
				от 4000р по Тюмени
			</p>
		</div>
	</div>
	<div class="d-flex pe-2">
		<div class="d-flex align-items-center">
			<button class="bg-primary border-0 rounded-circle">
				<img class="info__chevron-img" src='/images/chevron_right.svg' alt='' />
			</button>
		</div>
		<div class="ps-2 align-items-center col">
			<p class="mb-1 fs-8">
				Гарантия от 12 месяцев и более
			</p>
			<p class="text-muted mb-0 fs-8">
				на всю продукцию от заводов
			</p>
		</div>
	</div>
	<div class="d-flex">
		<div class="d-flex align-items-center">
			<button class="bg-primary border-0 rounded-circle">
				<img class="info__chevron-img" src='/images/chevron_right.svg' alt='' />
			</button>
		</div>
		<div class="ps-2 align-items-center col">
			<p class="mb-1 fs-8">
				Все способы оплаты
			</p>
			<p class="text-muted mb-0 fs-8">
				для физ и юр лиц, с НДС и без
			</p>
		</div>
	</div>
</div>
<div class="container d-flex justify-content-center mt-5 mb-4">
	<h5 class="fw-bolder fs-11 text-black">
		Наши партнеры
	</h5>
</div>
<div id="carouselPartners" class="carousel slide" data-bs-ride="false">
	<div class="d-flex justify-content-center align-items-center">
		<div class="me-2">
			<button type='button' class='bg-primary border-0 rounded-circle' data-bs-target="#carouselPartners"
				data-bs-slide="prev">
				<img class="info__chevron-img" src='/images/chevron_left.svg' alt='' />
			</button>
		</div>
		<div class="container ps-0 pe-0 ms-0 me-0">
			<div class='carousel-inner'>
				<div class='carousel-item active'>
					<div class="container d-flex ps-0 pe-0 align-items-center gap-2 justify-content-between">
						<?php for ($i = 0; $i < 7; $i++) : ?>
							<div class="partner">
								<img class='partner__img' src='/images/partner.png' alt='' />
							</div>
						<?php endfor; ?>
					</div>
				</div>
				<div class='carousel-item'>
					<div class="container d-flex ps-0 pe-0 align-items-center gap-2 justify-content-between">
						<?php for ($i = 0; $i < 7; $i++) : ?>
							<div class="partner">
								<img class='partner__img' src='/images/partner.png' alt='' />
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
		<div class='ms-2'>
			<button type='button' class='bg-primary border-0 rounded-circle' data-bs-target="#carouselPartners"
				data-bs-slide="next">
				<img class='info__chevron-img' src='/images/chevron_right.svg' alt='' />
			</button>
		</div>
	</div>
</div>
<div class="container d-flex justify-content-center pe-0 ps-0 mt-4 mb-4">
	<h6 class="fw-bolder fs-11 text-black">
		Покупателям
	</h6>
</div>
<div class='row'>
	<div class='container d-flex gap-5 pe-0 ps-0'>
		<div class='buyer__opt'>
			<div class="buyer__opt background"></div>
			<div class="buyer__opt layout">
				<div>
					<p class="text-white fw-bolder fs-5">
						Оптовикам
					</p>
					<p class="text-white fw-bolder fs-8 mb-1">
						Мы предлагаем индивидуальные условия
					</p>
					<p class="text-white fw-bolder fs-8">
						для крупных оптовых закупок
					</p>
				</div>
				<div class='buyer__opt-container'>
					<button class="buyer__opt-button">
						подробнее
					</button>
				</div>
			</div>
		</div>
		<div class="buyer__auc">
			<div class="buyer__auc background"></div>
			<div class="buyer__auc layout">
				<p class="text-white fw-bolder fs-5">
					Торги и Аукционы
				</p>
				<p class="text-white fw-bolder fs-8 mb-1">
					Оказываем комплексное содействие
				</p>
				<p class="text-white fw-bolder fs-8">
					по участию в торгах
				</p>
				<div class='buyer__auc-container'>
					<button class='buyer__auc-button'>
						подробнее
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='container d-flex mt-5 mb-4 justify-content-center'>
	<h7 class='fs-11 fw-bolder text-black'>
		Новости
	</h7>
</div>
<div class='container d-flex ps-0 pe-0'>
	<div class='row d-flex justify-content-between'>
		<div class="d-flex col-5-5 pe-0 ps-0 mr-4">
			<div>
				<img src='/images/news.png' alt='' />
			</div>
			<div class="news__container">
				<p class='fs-10 mb-1-25 text-muted'>
					23 сентября 2024
				</p>
				<p class='fw-bolder fs-9 mb-1-25'>
					Металлический шкаф: советы и рекомендации по выбору
				</p>
				<p class='fs-10 mb-1-25 text-muted'>
					В современном бизнесе организации хранения различных предметов — будь то документы....
				</p>
				<div class='news__container-btn'>
					<button class='news__button'>
						подробнее
					</button>
				</div>
			</div>
		</div>
		<div class="d-flex ml-5 col-5-5 pe-0 ps-0">
			<div>
				<img src='/images/news.png' alt='' />
			</div>
			<div class='news__container'>
				<p class='fs-10 mb-1-25 text-muted'>
					23 сентября 2024
				</p>
				<p class='fs-9 fw-bolder mb-1-25'>
					Металлический шкаф: советы и рекомендации по выбору
				</p>
				<p class='fs-10 mb-1-25 text-muted'>
					В современном бизнесе организации хранения различных предметов — будь то документы....
				</p>
				<div class='news__container-btn'>
					<button class='news__button'>
						подробнее
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="d-flex justify-content-center mt-5 mb-5">
	<a class='text-primary fw-bolder fs-9 text-uppercase text-decoration-underline' href='#'>
		Все новости
	</a>
</div>
<div class='questions__background'>
	<div>
		<div>
			<div class="d-flex justify-content-center align-items-center pt-5 flex-column">
				<h8 class='fw-bolder fs-11 text-white'>
					Остались вопросы?
				</h8>
				<div class="container mt-5 d-flex flex-row ps-0 pe-0">
					<label for="feedback_name"
						class="col-1 fs-9 text-end d-flex justify-content-center align-items-center text-white fw-bolder">
						*Имя
					</label>
					<input id="feedback_name" name="name" class="col-3 border-0 rounded-1" />
					<label for="feedback_phone"
						class="col-1 fs-9 text-end d-flex justify-content-center align-items-center text-white fw-bolder">
						*Телефон
					</label>
					<input id="feedback_phone" class='col-3 border-0 rounded-1' />
					<label for="feedback_email"
						class="col-1 fs-9 text-end d-flex justify-content-center align-items-center fw-bolder text-white">
						e-mail
					</label>
					<input id="feedback_email" class='col-3 border-0 rounded-1' />
				</div>
				<div class='container d-flex flex-row mt-3 ps-0 pe-0'>
					<label for="feedback_question" class="fs-9 text-end col-1 d-flex justify-content-center fw-bolder text-white">
						*Вопрос
					</label>
					<textarea id="feedback_question" name="question" type="text" class='w-100 border-0 rounded-1'
						style='height: 113px'></textarea>
				</div>
			</div>
			<div class='container mt-2 d-flex justify-content-end align-items-center pe-0 ps-0 pb-4'>
				<div class="toggle-container">
					<input type="checkbox" id="toggle" class="toggle-input" />
					<label for="toggle" class="toggle-label">
						<div class="toggle-slider"></div>
					</label>
				</div>
				<label class='fs-10 ms-2 me-3 d-flex align-items-center text-white'>Я согласен на&nbsp;<label
						class='fw-bolder fs-10 text-white'>обработку персональных
						данных</label></label>
				<button class="question__button">
					Отправить
				</button>
			</div>
		</div>
	</div>
</div>
</div>

<?php require("../template-parts/footer.php"); ?>