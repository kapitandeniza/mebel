<?php require('../template-parts/header.php'); ?>
<div class='container mb-2 mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Торги и аукционы</span>
	</div>
</div>
<div class='info__wrapper'>
	<div class='container ps-0 pe-0 mt-2'>
		<div class='row'>
			<div class='col-6-5'>
				<h1 class='fs-11 fw-bolder text-black'>Торги и аукционы</h1>
				<p class='info__buyers mb-3'>Бесплатно разработаем для вас Техническое задание</p>
				<p class='fs-9 fw-semibold lh-lg'>Команда компании «Мебелев-Урал» с 2019 года успешно участвует в электронных
					аукционах и торгах. Если и для
					вашей организации необходимо подготовить ТЗ или оказать другие услуги по закупкам, обращайтесь в наш тендерный
					отдел. Работаем на всех тендерных площадках, интернет-магазинах, площадках закупок малого объема</p>
				<div class='row pt-4'>
					<div class='col-6-3 ps-0 pe-0'>
						<div class="d-flex">
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
						<div class="d-flex mt-4">
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
					</div>
					<div class='col-5-3 ps-0 pe-0'>
						<div class="d-flex">
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
						<div class="d-flex mt-4">
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
				</div>
			</div>
			<div class='offer__container col-5-5'>
				<div class='offer__wrapper'>
					<h2 class='fs-5-5 fw-bolder text-primary pe-5'>Получить предложение с экслюзивными условиями</h2>
					<div class='d-flex gap-2'>
						<div class='row mt-2'>
							<div class='col-6'>
								<div class='d-flex flex-column'>
									<label class='offer__label' for="">Имя<span>*</span></label>
									<input class='offer__input' />
								</div>
							</div>
							<div class='col-6'>
								<div class='d-flex flex-column'>
									<label class='offer__label' for="">Телефон<span>*</span></label>
									<input class='offer__input' />
								</div>
							</div>
						</div>
					</div>
					<div class='d-flex flex-column mt-2'>
						<label class='offer__label' for="">Email<span>*</span></label>
						<input class='offer__input' />
					</div>
					<div class='d-flex flex-column mt-2'>
						<label class='offer__label' for="">Комментарий</label>
						<textarea class='offer__input' name="" id=""></textarea>
					</div>
					<div class='container d-flex justify-content-center gap-2 mt-3'>
						<div class="offer__toggle">
							<input type="checkbox" id="toggle" class="offer__toggle-input" />
							<label for="toggle" class="offer__toggle-label">
								<div class="offer__toggle-slider"></div>
							</label>
						</div>
						<span class='fs-9'>Я согласен на&nbsp;<a class='text-primary text-decoration-none'>обработку персональных
								данных</a></span>
					</div>
					<div class='container ps-0 pe-0 d-flex justify-content-center mt-3'>
						<button class='offer__submit'>Отправить</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require('../template-parts/footer.php'); ?>