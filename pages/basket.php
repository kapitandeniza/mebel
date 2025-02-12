<?php require('../template-parts/header.php'); ?>
<div class='container mb-2 mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Корзина</span>
	</div>
</div>
<div class='container ps-0 pe-0 mt-3 mb-4'>
	<h1 class='fw-bolder fs-11 text-black'>Корзина</h1>
</div>
<div class='container d-flex justify-content-between'>
	<div class='row gap-4 d-flex justify-content-between'>
		<div class='col-8 d-flex flex-column gap-3'>
			<?php for ($productBasket = 1; $productBasket < 3; $productBasket++): ?>
				<div class='row gap-5 d-flex justify-content-between'>
					<div class=' product__image col-3 pe-4 ps-4'>
						<img src="/images/product.png" alt="">
					</div>
					<div class='product__info col-8'>
						<div class='row'>
							<div class='col-6 pb-2 mt-3 pe-0'>
								<span class=' fs-8-5 fw-bolder'>Шкаф для раздевалок ПРАКТИК Стандарт LS 21-50</span>
								<div class='d-flex align-items-center gap-2 mb-1 mt-1'>
									<label class='text-muted fs-9'>Артикул:</label>
									<span class='fs-9'>12625163</span>
								</div>
								<div class='d-flex align-items-center gap-2'>
									<label class='text-muted fs-9'>Бренд:</label>
									<span class='fs-9'>Natura Siberica</span>
								</div>
								<div class="d-flex mt-2">
									<div class="d-flex align-items-center me-2">
										<button class="counter__button-decrement">-</button>
										<div class="d-flex align-items-center">
											<input value=1 class="counter" />
										</div>
										<button class='counter__button-increment'>+</button>
									</div>
								</div>
							</div>
							<div class='col-4 mt-3 pe-0 ps-0'>
								<div class='d-flex align-items-center gap-2'>
									<label class='fs-10 text-muted text-semibold'>Цена:</label>
									<span class='fs-5-5 fw-bolder'>20&nbsp;320&nbsp;руб.</span>
								</div>
								<p class='ms-4-5 fs-8 text-muted text-decoration-line-through'>20&nbsp;320&nbsp;руб.</p>
							</div>
							<div class='col-1 ms-4 mt-1'>
								<img src='/images/close.svg' alt='' />
							</div>
						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>

		<!-- Блок с итоговой суммой и кнопками -->
		<div class='product__buy col-3 ps-1 pe-1'>
			<div class='product__wrapper text-end'>
				<p class='product__buy-sum fw-bold'>Итого: 20 320 руб.</p>
				<p class='product__buy-discount text-muted'>Без скидки: 40 320 руб.</p>
				<div class='gap-2 mt-2 d-flex flex-column'>
					<button class='product__button-order'>Оформить заказ</button>
					<button class='product__button-fastorder'>Быстрый заказ</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='container ps-0 pe-0 d-flex justify-content-center mt-5 mb-2'>
	<h2 class='fs-11 fw-bolder text-black'>Ранее вы смотрели</h2>
</div>
<div class="container ps-2 pe-4 d-flex justify-content-between gap-2">
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
<?php require('../template-parts/footer.php') ?>