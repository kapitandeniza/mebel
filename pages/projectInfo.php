<?php require('../template-parts/header.php') ?>
<div class='container mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='text-primary fs-10 fw-bolder'>Реализованные проекты</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Проект 1</span>
	</div>
</div>
<div class='container ps-0 pe-0 mt-3'>
	<h1 class='fs-11 fw-bolder text-black'>ООО «Бомонд» - сервис грузового транспорта и магазин запчастей</h1>
</div>
<div class='project__wrapper'>
	<div class='container d-flex pe-0 ps-0'>
		<div class='row mt-4 gap-3'>
			<div class='project__container'>
				<img src='/images/opt.png' alt='' />
			</div>
			<div class='col-6'>
				<p class='project__info'>Наша компания выполнила заказ по доставке, сборке и установке металлических шкафов для
					раздевалки ПРАКТИК
					LS-21-60.</p>
				<p class='project__info'>Наша компания выполнила заказ по доставке, сборке и установке металлических шкафов для
					раздевалки ПРАКТИК LS-21-60.</p>
			</div>
		</div>
	</div>
	<div id="carouselProjects" class="carousel slide mt-4" data-bs-ride="false">
		<div class="d-flex justify-content-center align-items-center">
			<div class="me-2">
				<button type='button' class='bg-primary border-0 rounded-circle' data-bs-target="#carouselProjects"
					data-bs-slide="prev">
					<img class="info__chevron-img" src='/images/chevron_left.svg' alt='' />
				</button>
			</div>
			<div class="container ps-0 pe-0 ms-0 me-0">
				<div class='carousel-inner'>
					<div class='carousel-item active'>
						<div class="container d-flex ps-0 pe-0 align-items-center gap-2 justify-content-between">
							<?php for ($i = 0; $i < 4; $i++) : ?>
								<div class="projects__item">
									<img src='/images/itemproject.png' alt='' />
								</div>
							<?php endfor; ?>
						</div>
					</div>
					<div class='carousel-item'>
						<div class="container d-flex ps-0 pe-0 align-items-center gap-2 justify-content-between">
							<?php for ($i = 0; $i < 4; $i++) : ?>
								<div class="projects__item">
									<img src='/images/itemproject.png' alt='' />
								</div>
							<?php endfor; ?>
						</div>
					</div>
				</div>
			</div>
			<div class='ms-2'>
				<button type='button' class='bg-primary border-0 rounded-circle' data-bs-target="#carouselProjects"
					data-bs-slide="next">
					<img class='info__chevron-img' src='/images/chevron_right.svg' alt='' />
				</button>
			</div>
		</div>
	</div>
	<div class='container ps-0 pe-0 d-flex justify-content-center mt-4'>
		<h2 class='fw-bolder fs-11 text-black'>Другие работы</h2>
	</div>
	<div class='row mt-4'>
		<div class='container d-flex gap-5 pe-0 ps-0'>
			<div class='project__container'>
				<div class="project__container background"></div>
				<div class="project__container layout">
					<div class='row'>
						<div class='col-8'>
							<div class='project__container-text'>
								<p class='text-white fs-8 fw-semibold'>
									Выполнили монтаж под ключ стеллажей на складе Теле2 в Оренбурге
								</p>
							</div>
						</div>
						<div class='col-4'>
							<div class='project__container-btn'>
								<button class="project__button">
									подробнее
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='project__container'>
				<div class="project__container background"></div>
				<div class="project__container layout">
					<div class='row'>
						<div class='col-8'>
							<div class='project__container-text'>
								<p class='text-white fs-8 fw-semibold'>
									Выполнили монтаж под ключ стеллажей на складе Теле2 в Оренбурге
								</p>
							</div>
						</div>
						<div class='col-4'>
							<div class='project__container-btn'>
								<button class="project__button">
									подробнее
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require('../template-parts/footer.php') ?>