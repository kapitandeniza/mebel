<?php require('../template-parts/header.php') ?>
<div class='container mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Реализованные проекты</span>
	</div>
</div>
<div class='container ps-0 pe-0 mt-3'>
	<h1 class='fs-11 text-black fw-bolder'>Реализованные проекты</h1>
</div>
<?php for ($projectsI = 0; $projectsI < 2; $projectsI++): ?>
	<div class='row mt-5'>
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
<?php endfor; ?>
<div class="container ps-0 pe-0 d-flex justify-content-center mt-3 mb-5">
	<div class='d-flex justify-content-center align-items-center gap-2'>
		<a href='#' class='d-flex pe-2 ps-2'>
			<img src='/images/pagination_chevron_prev.svg' alt='' />
		</a>
		<?php for ($pagination = 1; $pagination < 5; $pagination++) : ?>
			<a href='#' class='category__pagination'>
				<?= $pagination ?>
			</a>
		<?php endfor; ?>
		<a href='#' class='d-flex cursor-pointer pe-2 ps-2'>
			<img class='cursor-pointer' src='/images/pagination_chevron_next.svg' alt='' />
		</a>
	</div>
</div>
<?php require('../template-parts/footer.php') ?>