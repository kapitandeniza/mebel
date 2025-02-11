<?php require("../template-parts/header.php"); ?>
<div class='container mb-2 mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Каталог</span>
	</div>
</div>
<div class='container ps-0 pe-0 mt-4'>
	<div class='row gap-3 d-flex justify-content-between'>
		<div class='contact__map col-5'>
			<img src='/images/map.png' alt='' />
		</div>
		<div class='contact__info col-6 ps-5 pe-5'>
			<div class='container mt-3'>
				<h1 class='fs-11 text-black fw-bolder'>Наши контакты</h1>
			</div>
			<div class='contact__value container'>
				<img src="/images/mailcontact.svg" alt="" />
				<p class='contact__value-p'>biznes-komplekt-tmn@yandex.ru</p>
			</div>
			<div class='contact__value container'>
				<img src="/images/geocontact.svg" alt="" />
				<p class='contact__value-p'>г. Тюмень, ул. Клары Цеткин, д. 61/1</p>
			</div>
			<div class='contact__value-time container'>
				<div>
					<img src="/images/timecontact.svg" alt="" />
				</div>
				<div class=''>
					<p class='contact__value-p'>График работы:</p>
					<p class='contact__value-p'>Пн – пц: с 10:00 до 18:00, без перерыва</p>
					<p class='contact__value-p'>Сб – вс: выходной</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="d-flex mt-4 justify-content-evenly container ps-0 pe-0">
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
<div class='questions__background mt-5'>
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
<?php require('../template-parts/footer.php'); ?>