<?php require('../template-parts/header.php'); ?>
<div class='container mb-2 mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Оплата и доставка</span>
	</div>
</div>
<div class='container ps-0 pe-0 mt-3 mb-3'>
	<h1 class='fs-11 fw-bolder text-black'>Способы оплаты и доставки</h1>
</div>
<div class='container ps-0 pe-0'>
	<strong class='fs-9 text-muted fw-semibold'>Для физических лиц.</strong>
	<ul class='fs-9 text-muted fw-semibold mt-3'>
		<li>Оплата по QR-коду</li>
		<li>Онлайн оплата на сайте</li>
		<li>Оплата по терминалу</li>
		<li>Наличными</li>
	</ul>
</div>
<div class='container ps-0 pe-0'>
	<strong class='fw-semibold fs-9 text-muted'>Для юридических лиц.</strong>
	<ul class='fw-semibold fs-9 text-muted mt-3'>
		<li>Оплата заказа по расчетному счету с НДС и без НДС.</li>
	</ul>
</div>
<div class='container ps-0 pe-0'>
	<h2 class='fs-11 fw-bolder text-black'>Способы доставки</h2>
</div>
<div class='container ps-0 pe-0 mt-3'>
	<ul class='fw-semibold text-muted fs-9'>
		<li>Самовывоз со склада (35 городов присутствия)</li>
		<li>Бесплатная доставка в день заказа в черте города Тюмень от 4000 р</li>
		<li>Отправка силами ТК в любой город России</li>
		<li>Доставка силами проверенных подрядчиков в вашем городе</li>
	</ul>
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