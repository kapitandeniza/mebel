<?php require('../template-parts/header.php'); ?>
<?php $type = $_GET['type'] ?? 'individual'; ?>
<div class='container mb-2 mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Оформление заказа</span>
	</div>
</div>
<div class='container ps-0 pe-0 mt-3 mb-3'>
	<h1 class='fs-11 fw-bolder text-black'>Оформление заказа</h1>
</div>
<div class='container pb-5'>
	<div class='row gap-2 d-flex justify-content-between'>
		<div class='order__container ps-0 pe-0 col-8'>
			<div class='ms-4 me-4'>
				<div class='ps-0 pe-0 d-flex mt-3 gap-2'>
					<button class='order__button'>
						<a href='?type=individual'
							class='<?= $type == 'individual' ? 'active' : ''; ?> order__link'>Физическое&nbsp;лицо</a>
					</button>
					<button class='order__button'>
						<a href='?type=company'
							class='<?= $type == 'company' ? 'active' : ''; ?> order__link'>Юридическое&nbsp;лицо</a>
					</button>
				</div>
				<div class='mt-3 mb-3 ps-0 pe-0'>
					<h2 class='fs-5-5 fw-bolder'>Информация&nbsp;о&nbsp;покупателе</h2>
				</div>
				<?php if ($type == 'individual'): ?>
					<div class='d-flex justify-content-between gap-2'>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Имя<span class='order__info-star'>*</span>
							</label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Фамилия<span class='order__info-star'>*</span></label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Отчество</label>
							<input class='order__input' />
						</div>
					</div>
				<?php else: ?>
					<div class='d-flex justify-content-between gap-2'>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>ИНН<span class='order__info-star'>*</span>
							</label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Название компании<span class='order__info-star'>*</span></label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Юридический адрес</label>
							<input class='order__input' />
						</div>
					</div>
				<?php endif; ?>
				<?php if ($type == 'individual'): ?>
					<div class='d-flex gap-3 mt-2'>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Телефон<span class='order__info-star'>*</span></label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1 ms-1'>
							<label class='order__info'>Email</label>
							<input class='order__input' />
						</div>
					</div>
				<?php else: ?>
					<div class='d-flex justify-content-between gap-2 mt-2'>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>КПП</label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Имя<span class='order__info-star'>*</span></label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Отчество</label>
							<input class='order__input' />
						</div>
					</div>
				<?php endif; ?>
				<?php if ($type == 'company'): ?>
					<div class='d-flex justify-content-between gap-2 mt-2'>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Фамилия</label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Телефон<span class='order__info-star'>*</span></label>
							<input class='order__input' />
						</div>
						<div class='d-flex flex-column gap-1'>
							<label class='order__info'>Email<span class='order__info-star'>*</span></label>
							<input class='order__input' />
						</div>
					</div>
				<?php endif; ?>
				<div class='d-flex flex-column mt-2 gap-1'>
					<label class='order__info'>Комментарий к заказу</label>
					<textarea class='order__input' name="Комментарий к заказу" id=""></textarea>
				</div>
				<div class='mt-4'>
					<h3 class='fs-5-5 fw-bolder'>Способ и адрес доставки</h3>
				</div>
				<div class="d-flex flex-column gap-2">
					<div class="custom-radio">
						<input type="radio" id="pickup" name="delivery" checked>
						<label class='radio__label' for="pickup">Самовывоз</label>
					</div>
					<div class="custom-radio">
						<input type="radio" id="manager" name="delivery">
						<label class='radio__label' for="manager">Расчёт доставки менеджером</label>
					</div>
					<div class="custom-radio">
						<input type="radio" id="tyumen" name="delivery">
						<label class='radio__label' for="tyumen">Доставка по Тюмени (бесплатно)</label>
					</div>
				</div>
				<div class='mt-3'>
					<h4 class='fs-5-5 fw-bolder'>Способ оплаты</h4>
				</div>
				<div class="custom-radio">
					<input type="radio" id="qr" name="payment">
					<label class='radio__label' for="qr">Оплата по QR-коду при получении</label>
				</div>
				<div class='mt-3'>
					<p class='fs-9'>Нажимая на кнопку, вы даете&nbsp;<a class='fs-9 text-primary fw-semibold' href='#'>согласие на
							обработку
							персональных
							данных</a></p>
				</div>
				<div class='pt-3 pb-5'>
					<button class='order__create'>Оформить&nbsp;заказ</button>
				</div>
			</div>
		</div>
		<div class='order__container ps-0 pe-0 col-3-5'>
			<div class='ps-3 pe-3 pt-3'>
				<div class='d-flex justify-content-between'>
					<h2 class='fs-5-5 fw-bolder'>Ваш заказ</h2>
					<a class='fs-8 text-primary fw-bolder' href="#">Изменить</a>
				</div>
				<div class='mt-1'>
					<p class='fs-6 fw-bolder mb-0'>Итого:&nbsp;20&nbsp;320&nbsp;руб.</p>
					<p class='fs-8 fw-normal text-muted mb-0'>Без&nbsp;скидки:&nbsp;40&nbsp;320&nbsp;руб.</p>
				</div>
				<div class='mt-4 d-flex flex-column gap-2'>
					<div class="d-flex pe-2">
						<div class="d-flex align-items-center">
							<button class="bg-primary border-0 rounded-circle">
								<img class="info__chevron-img" src='/images/chevron_right.svg' alt='' />
							</button>
						</div>
						<div class="ps-2 align-items-center col">
							<p class="mb-0 fs-8">
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
							<p class="mb-0 fs-8">
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
							<p class="mb-0 fs-8">
								Гарантия от 12 месяцев и более
							</p>
							<p class="text-muted mb-0 fs-8">
								на всю продукцию от заводов
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
							<p class="mb-0 fs-8">
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
	</div>
</div>
<?php require('../template-parts/footer.php'); ?>