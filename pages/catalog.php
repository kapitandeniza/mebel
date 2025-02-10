<?php require("../template-parts/header.php"); ?>
<div class='container mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Каталог</span>
	</div>
</div>
<div class='container mt-3 ps-0 pe-0'>
	<h1 class='fs-11 fw-bolder text-black mb-0'>Каталог</h1>
</div>
<div class="container d-flex flex-wrap gap-4 ps-0 pe-0 mt-4">
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
<div class="container d-flex flex-wrap gap-4 ps-0 pe-0 mt-5 mb-5">
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
<?php require("../template-parts/footer.php"); ?>