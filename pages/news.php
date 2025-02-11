<?php require('../template-parts/header.php'); ?>
<div class='container mb-2 mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Новости</span>
	</div>
</div>
<div class='container ps-0 pe-0 mt-3 mb-4'>
	<h1 class='fw-bolder fs-11 text-black'>Новости</h1>
</div>
<?php for ($newscount = 0; $newscount < 4; $newscount++) : ?>
	<div class='container d-flex ps-0 pe-0 mb-3'>
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
<?php endfor; ?>
<div class='d-flex justify-content-center align-items-center mt-5 mb-5 gap-2'>
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

<?php require('../template-parts/footer.php'); ?>