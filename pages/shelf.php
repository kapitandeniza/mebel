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
				<div class='stats__container'>
					<div class='container ps-0 pe-0 d-flex'>
						<table class='flex-column'>
							<tr class='d-flex'>
								<td class='stats__info'>
									Размеры внешние, мм (ВхШхГ):
								</td>
								<td class='stats__info-value'>
									390x300x160
								</td>
							</tr>
						</table>
						<table>
							<tr>
								<td class='stats__info'>
									Размеры внешние, мм (ВхШхГ):
								</td>
								<td class='stats__info-value'>
									390x300x160
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php require("../template-parts/footer.php"); ?>