<?php require('../template-parts/header.php') ?>
<div class='errorPage__wrapper container ps-0 pe-0'>
	<div class='d-flex flex-column align-items-center'>
		<h1 class='fs-0-1 fw-bolder text-primary'>404</h1>
		<label class='fs-11 fw-bolder'>Упс, страница не найдена...</label>
	</div>
	<div class='d-flex align-items-center justify-content-center mt-5'>
		<p class='errorPage__text'>Возможно, был неправильно набран адрес страницы или ссылка, по которой Вы перешли, уже не
			существует! Пожалуйста,
			попробуйте вернуться на <a href='#'>Главную страницу.</a></p>
	</div>
	<div class='d-flex justify-content-center mt-5'>
		<button class='errorPage__button'>На главную</button>
	</div>
</div>

<?php require('../template-parts/footer.php') ?>