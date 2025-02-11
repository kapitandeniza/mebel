<?php require("../template-parts/header.php"); ?>
<div class='container mb-2 mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='text-primary fw-bolder fs-10'>Каталог</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='text-primary fw-bolder fs-10'>Металлическая мебель</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='text-primary fw-bolder fs-10'>Шкафы для раздевалок</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='text-primary fw-bolder fs-10'>Шкафы ПРАКТИК Стандарт</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Офисный шкаф ПРАКТИК СВ-11</span>
	</div>
</div>
<div class='container ps-0 pe-0 mt-5'>
	<div class='row'>
		<div class='col-5 pe-0 ps-0'>
			<div class='shelf__container'>
				<img class='shelf__image' src='/images/shelf.png' alt='shelf' />
			</div>
			<div id='carouselShelf' class='carousel slide d-flex align-items-center justify-content-center'
				data-bs-ride="false" data-bs-interval="false">
				<div class='pt-3'>
					<button class='border-0 bg-transparent' data-bs-target='#carouselShelf' data-bs-slide='prev'>
						<img src='/images/item_chevron_prev.svg' alt='' />
					</button>
				</div>
				<div class='d-flex align-items-center'>
					<div class='carousel-inner'>
						<div class='carousel-item active'>
							<div class='shelfmini__container'>
								<?php for ($i = 0; $i < 5; $i++) : ?>
									<div class='shelfmini__item'>
										<img class='shelfmini__image' src='/images/shelfmini.png' alt='' />
									</div>
								<?php endfor; ?>
							</div>
						</div>
						<div class='carousel-item'>
							<div class='shelfmini__container'>
								<?php for ($i = 0; $i < 5; $i++) : ?>
									<div class='shelfmini__item'>
										<img class='shelfmini__image' src='/images/shelfmini.png' alt='' />
									</div>
								<?php endfor; ?>
							</div>
						</div>
					</div>
				</div>
				<div class='pt-3'>
					<button class='border-0 bg-transparent' data-bs-target='#carouselShelf' data-bs-slide='next'>
						<img src='/images/item_chevron_next.svg' alt='' />
					</button>
				</div>
			</div>
		</div>
		<div class='col-6 ps-4 pe-0'>
			<div class='container ps-0 pe-0'>
				<h1 class='fs-11 mb-3 fw-semibold text-black'>
					Офисный шкаф для ПРАКТИК СВ-11
				</h1>
			</div>
			<div class='container pe-0 ps-0'>
				<div class='row gap-5 d-flex justify-content-between'>
					<div class='col-5 pe-0'>
						<div class='d-flex align-items-center gap-3'>
							<span class='text-muted fs-10'>Цена:</span>
							<label class='fw-semibold fs-5'>20&nbsp;320&nbsp;руб.</label>
						</div>
						<div class='d-flex justify-content-center pe-3'>
							<p class='fs-6 text-muted fw-semibold text-decoration-line-through'>20&nbsp;320&nbsp;руб.</p>
						</div>
						<div class='d-flex'>
							<div class="d-flex align-items-center me-2">
								<button class="counter__button-decrement">-</button>
								<div class="d-flex align-items-center">
									<input value=1 class="counter" />
								</div>
								<button class='counter__button-increment'>+</button>
							</div>
							<div>
								<button class='home__button'>в&nbsp;корзину</button>
							</div>
						</div>
					</div>
					<div class='col-5 pe-0'>
						<div class='d-flex align-items-center gap-2 mb-1'>
							<label class='text-muted fs-9'>Артикул:</label>
							<span class='fw-semibold fs-9'>12625163</span>
						</div>
						<div class='d-flex align-items-center gap-2'>
							<label class='text-muted fs-9'>Бренд:</label>
							<span class='fw-semibold fs-9'>Natura Siberica</span>
						</div>
						<div>
							<a href='' class='text-underline text-primary fs-9 fw-semibold'>Доставка и оплата</a>
						</div>
					</div>
				</div>
				<div class='container ps-0 pe-0 mt-3'>
					<table class="table-custom table">
						<tbody>
							<tr>
								<td class='stats__info'>Размеры внешние, мм (ВхШхГ)</td>
								<td class='stats__info-value'>390х300х160</td>
							</tr>
							<tr>
								<td class='stats__info'>Вес, кг</td>
								<td class='stats__info-value'>2.5</td>
							</tr>
							<tr>
								<td class='stats__info'>Количество полок</td>
								<td class='stats__info-value'>2</td>
							</tr>
							<tr>
								<td class='stats__info'>Цвет</td>
								<td class='stats__info-value'>белый</td>
							</tr>
							<tr>
								<td class='stats__info'>Тип покрытия</td>
								<td class='stats__info-value'>гигиенически безопасное, коррозионно-устойчивое порошковое покрытие</td>
							</tr>
							<tr>
								<td class='stats__info'>Гарантия</td>
								<td class='stats__info-value'>1 год</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class='container d-flex justify-content-center ps-0 pe-0 mt-5 mb-2'>
		<h2 class='fs-11 fw-bolder text-black'>Описание</h2>
	</div>
	<div class="container pe-0 ps-0">
		<span class="text-muted fs-9">1. Предназначен для хранения большого объема документов
			Изделия сертифицированы на соответствие требованиям ГОСТ 16371-2014</span>
		<ul class='text-muted fs-9'>
			<li>Ригели из оцинкованной стали и пластиковые втулки обеспечивают бесшумный ход дверей и надежное запирание
				шкафа</li>
			<li>Комплектуются ключевыми замками с ручками</li>
			<li>2 уровня хранения (1 полка в комплекте)</li>
			<li>Максимальная нагрузка на полку – 60 кг</li>
			<li>Под заказ возможна окраска передних панелей в другие цвета из палитры производителя</li>
			<li>Поставляются в разобранном виде</li>
		</ul>
	</div>
	<div class='container ps-0 pe-0 d-flex justify-content-center mt-1 mb-4'>
		<h3 class='fs-11 fw-bolder text-black'>Похожие&nbsp;товары</h3>
	</div>
	<div class='container ps-0 pe-0 d-flex gap-3 justify-content-between mb-5'>
		<?php for ($shelf = 0; $shelf < 4; $shelf++) : ?>
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
	<div class='container ps-0 pe-0 d-flex justify-content-center mt-5 mb-3'>
		<h4 class='fw-bolder fs-11 text-black'>Наши партнеры</h4>
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
	<div class='container ps-0 pe-0 d-flex justify-content-center mt-5 mb-3'>
		<h5 class='fw-bolder fs-11 text-black'>Новости</h5>
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
	<div class='container ps-0 pe-0 d-flex justify-content-center mt-5'>
		<a href='#' class='fs-9 fw-semibold text-underline text-primary text-uppercase'>все новости</a>
	</div>
</div>
<div class='mt-5'>
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
						<label for="feedback_question"
							class="fs-9 text-end col-1 d-flex justify-content-center fw-bolder text-white">
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