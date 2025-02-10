<?php require("../template-parts/header.php"); ?>
<div class='container mt-4 ps-0 pe-0'>
	<div class="d-flex align-items-center gap-2">
		<span class='text-primary fs-10 fw-bolder'>Главная</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='text-primary fs-10 fw-bolder'>Каталог</span>
		<img class='catalog__chevron-img' src='/images/catalog_chevron.svg' alt='' />
		<span class='fs-10'>Металлическая мебель</span>
	</div>
</div>
<div class="container ps-0 pe-0 mt-3">
	<h1 class='text-black fw-bolder fs-11'>
		Металлическая мебель
	</h1>
</div>
<div id='carouselCategories' class='carousel slide' data-bs-ride="false" data-bs-interval="false">
	<div class='d-flex justify-content-center align-items-center'>
		<div class="me-2">
			<button class='categories__button' data-bs-target='#carouselCategories' data-bs-slide='prev'>
				<img src='/images/chevron_left.svg' alt='' />
			</button>
		</div>
		<div class="container ms-0 me-0 ps-0 pe-0">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container mt-3 ps-0 pe-0 mb-3">
						<div class='d-flex justify-content-between align-items-center gap-3'>
							<?php for ($i = 0; $i < 4; $i++) : ?>
								<button class="categories">
									<div class='fs-8 fw-bolder'>
										<label>
											Шкафы для раздевалок
										</label>
										<p class='mb-0 d-flex'>
											Практик
										</p>
									</div>
								</button>
							<?php endfor; ?>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container mt-3 ps-0 pe-0 mb-3">
						<div class='d-flex justify-content-between align-items-center gap-3'>
							<?php for ($i = 0; $i < 4; $i++) : ?>
								<button class="categories">
									<div class='fs-8 fw-bolder'>
										<label>
											Шкафы для раздевалок
										</label>
										<p class='mb-0 d-flex'>
											Практик
										</p>
									</div>
								</button>
							<?php endfor; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class='ms-2'>
			<button class='categories__button' data-bs-target="#carouselCategories" data-bs-slide="next">
				<img class='categories__chevron-img' src='/images/chevron_right.svg' alt='' />
			</button>
		</div>
	</div>
</div>
<div class="container mt-4">
	<div class='row'>
		<div class='col-md-3 ps-0 pe-0'>
			<div class="accordion" id="customAccordion">
				<!-- Категория 1 -->
				<div class="accordion-item">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
						<span class='fw-normal fs-8'>Шкафы металлические</span>
					</button>
					<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#customAccordion">
						<div class="accordion-body">
							<ul>
								<li><a class='fs-8' href="#">Шкафы для сумок</a></li>
								<li><a class='fs-8' href="#">Шкафы сушильные</a></li>
								<li><a class='fs-8' href="#">Архивные шкафы</a></li>
								<li><a class='fs-8' href="#">Бухгалтерские шкафы</a></li>
								<li><a class='fs-8' href="#">Картотечные шкафы</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Категория 2 -->
				<div class="accordion-item">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#collapseTwo">
						<span class='fw-normal fs-8'>Медицинская мебель и изделия</span>
					</button>
					<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#customAccordion">
						<div class="accordion-body">
							<ul>
								<li><a class='fs-8' href="#">Шкафы для сумок</a></li>
								<li><a class='fs-8' href="#">Шкафы сушильные</a></li>
								<li><a class='fs-8' href="#">Архивные шкафы</a></li>
								<li><a class='fs-8' href="#">Бухгалтерские шкафы</a></li>
								<li><a class='fs-8' href="#">Картотечные шкафы</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Категория 3 -->
				<div class="accordion-item">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#collapseThree">
						<span class='fs-8 fw-normal'>Шкафы металлические</span>
					</button>
					<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#customAccordion">
						<div class="accordion-body">
							<ul>
								<li><a class='fs-8' href="#">Офисные шкафы</a></li>
								<li><a class='fs-8' href="#">Сейфовые шкафы</a></li>
								<li><a class='fs-8' href="#">Инструментальные шкафы</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Категория 4 -->
				<div class="accordion-item">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#collapseFour">
						<span class='fw-normal fs-8'>Шкафы металлические</span>
					</button>
					<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#customAccordion">
						<div class="accordion-body">
							<ul>
								<li><a class='fs-8' href="#">Лабораторные шкафы</a></li>
								<li><a class='fs-8' href="#">Шкафы для одежды</a></li>
								<li><a class='fs-8' href="#">Архивные шкафы</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class='d-flex justify-content-center align-items-center mt-3 mb-3'>
				<label class='fs-8 fw-semibold text-uppercase'>
					Фильтр по параметрам
				</label>
			</div>
			<div class='d-flex justify-content-arround align-items-center mb-1'>
				<span class='fw-bold text-black fs-9 ps-4'>
					Цена, ₽
				</span>
			</div>
			<div class='filter__price'>
				<div class='container ps-0 pe-0'>
					<div class='d-flex align-items-center justify-content-between ps-3 pe-3 mt-2'>
						<input value="200" id='minPrice' class='text-center form-control' />
						<span class=''>-</span>
						<input value="2000" id='maxPrice' class='text-center form-control' />
					</div>
					<div class="slider-container mt-2">
						<div class="range-track" id='rangeTrack'></div>
						<input type="range" class="form-range" id="priceRangeMin" min="0" max="5000" value="200">
						<input type="range" class="form-range" id="priceRangeMax" min="0" max="5000" value="2000">
					</div>
					<script>
						const minProductPrice = 0;
						const maxProductPrice = 5000;
						const minRange = document.getElementById('priceRangeMin');
						const maxRange = document.getElementById('priceRangeMax');
						const rangeTrack = document.getElementById('rangeTrack');
						const minPrice = document.getElementById("minPrice")
						const maxPrice = document.getElementById("maxPrice")

						let minPercent = minProductPrice
						let maxPercent = maxProductPrice

						function updateTrack() {
							const minVal = parseInt(minRange.value);
							const maxVal = parseInt(maxRange.value);
							minPercent = (minVal / maxProductPrice) * 100;
							maxPercent = (maxVal / maxProductPrice) * 100;
							minPrice.value = minVal
							maxPrice.value = maxVal
							rangeTrack.style.left = minPercent + '%';
							rangeTrack.style.width = (maxPercent - minPercent) + '%';
						}

						function updateRangeFromInput() {
							const minVal = minRange.value = parseInt(minPrice.value);
							const maxVal = maxRange.value = parseInt(maxPrice.value);
							minPercent = (minVal / maxProductPrice) * 100;
							maxPercent = (maxVal / maxProductPrice) * 100;

							rangeTrack.style.left = minPercent + '%';
							rangeTrack.style.width = (maxPercent - minPercent) + '%';
						}

						minRange.addEventListener('input', updateTrack);
						maxRange.addEventListener('input', updateTrack);
						minPrice.addEventListener('input', updateRangeFromInput);
						maxPrice.addEventListener('input', updateRangeFromInput);
						updateTrack();
					</script>
				</div>
			</div>
			<div class='d-flex justify-content-arround align-items-center mt-1 mb-1'>
				<span class='fw-bold text-black fs-9 ps-4'>
					Вес, кг
				</span>
			</div>
			<div class='filter__weight'>
				<div class='container ps-0 pe-0'>
					<div class='d-flex align-items-end gap-4 pt-2 pb-2 pe-3 ps-3'>
						<span class='fs-9 me-3'>
							Вес
						</span>
						<div class='d-flex align-items-end ms-3 gap-1'>
							<span class='weight__text'>
								от
							</span>
							<input class='form-control' />
							<span class='weight__text'>
								до
							</span>
							<input class='form-control' />
						</div>
					</div>
				</div>
			</div>
			<div class='d-flex justify-content-arround align-items-center mt-1 mb-1'>
				<span class='fw-bold text-black fs-9 ps-4'>
					Габариты, мм
				</span>
			</div>
			<div class='filter__weight'>
				<div class='container ps-0 pe-0'>
					<div class='d-flex align-items-end gap-4 pt-2 pb-2 pe-3 ps-3'>
						<span class='fs-9'>
							Ширина
						</span>
						<div class='d-flex align-items-end gap-1'>
							<span class='weight__text'>
								от
							</span>
							<input class='form-control' />
							<span class='weight__text'>
								до
							</span>
							<input class='form-control' />
						</div>
					</div>
					<div class='d-flex align-items-end gap-4 pt-2 pb-2 pe-3 ps-3'>
						<span class='fs-9 me-2'>
							Высота
						</span>
						<div class='d-flex align-items-end gap-1'>
							<span class='weight__text'>
								от
							</span>
							<input class='form-control' />
							<span class='weight__text'>
								до
							</span>
							<input class='form-control' />
						</div>
					</div>
				</div>
			</div>
			<div class='d-flex justify-content-arround align-items-center mt-1 mb-1'>
				<span class='fw-bold text-black fs-9 ps-4'>
					Бренд
				</span>
			</div>
			<div class='container ps-0 pe-0'>
				<div class='brand__container'>
					<div class='d-flex align-items-center pt-2 pe-3 ps-3'>
						<input class='brand__checkbox' type='checkbox' value='' id='flexCheckDefault' />
						<label class='brand__label'>
							Natura&nbsp;Siberica&nbsp;(4)
						</label>
					</div>
					<div class='d-flex align-items-center pt-2 pe-3 ps-3'>
						<input class='brand__checkbox' type='checkbox' value='' id='flexCheckDefault' />
						<label class='brand__label'>
							L’oreal&nbsp;(1)
						</label>
					</div>
					<div class='d-flex align-items-center pt-2 pe-3 ps-3'>
						<input class='brand__checkbox' type='checkbox' value='' id='flexCheckDefault' />
						<label class='brand__label'>
							LUSH&nbsp;(0)
						</label>
					</div>
					<div class='d-flex align-items-center pt-2 pe-3 ps-3'>
						<input class='brand__checkbox' type='checkbox' value='' id='flexCheckDefault' />
						<label class='brand__label'>
							Benefit&nbsp;(3)
						</label>
					</div>
					<div class='d-flex align-items-center pt-2 pe-3 ps-3'>
						<input class='brand__checkbox' type='checkbox' value='' id='flexCheckDefault' />
						<label class='brand__label'>
							Cerastase&nbsp;(5)
						</label>
					</div>
					<div class='d-flex align-items-center pt-2 pe-3 ps-3'>
						<input class='brand__checkbox' type='checkbox' value='' id='flexCheckDefault' />
						<label class='brand__label'>
							Clonique&nbsp;(9)
						</label>
					</div>
				</div>
			</div>
			<div class='d-flex justify-content-center mt-2'>
				<button class='filter__button'>применить</button>
			</div>
		</div>
		<div class='col-md-9 pe-0'>
			<div class="row">
				<div class='d-flex justify-content-end'>
					<div class='category__filter'>
						<div class='category__wrapper'>
							<span class='text-muted fs-10 me-2'>Сортировать:</span>
							<div class='btn-group'>
								<button class='dropdown-toggle border-0 fs-10 text-muted bg-white pt-0 pb-0 ps-0 pe-0' type='button'
									data-bs-toggle='dropdown' aria-expanded='false'>
									По умолчанию
								</button>
								<ul class='dropdown-menu'>
									<li>
										<p class='dropdown-item active fs-10'>По умолчанию</p>
									</li>
									<li>
										<p class='dropdown-item fs-10'>По возрастанию</p>
									</li>
									<li>
										<p class='dropdown-item fs-10'>По убыванию</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class='d-flex gap-3 mt-3'>
					<?php for ($row = 0; $row < 3; $row++) : ?>
						<div class='d-flex flex-column'>
							<?php for ($col = 0; $col < 2; $col++) : ?>
								<div class='home__item mb-4'>
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
					<?php endfor; ?>
				</div>
				<div class='d-flex justify-content-center fw-bolder text-primary mt-3'>
					<label class='text-uppercase text-decoration-underline fs-9'>
						показать еще
					</label>
				</div>
				<div class='d-flex justify-content-end mt-4'>
					<p class='fs-10 fw-normal'>
						Показано&nbsp;с&nbsp;1&nbsp;по&nbsp;12&nbsp;из&nbsp;44&nbsp;(всего страниц&nbsp;4)
					</p>
				</div>
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
		</div>
		<div class='container mb-4 pe-0 ps-0'>
			<h2 class='fw-bold fs-11 text-black mb-3'>
				Виды металлических шкафов
			</h2>
			<label class='fs-9 fw-semibold text-muted'>
				1.&nbsp;Гардеробные&nbsp;шкафы
			</label>
			<p class='types__p'>
				Используются в раздевалках спортивных залов, на предприятиях и в учебных заведениях. Оснащены полками,
				вешалками
				и замками для хранения одежды и личных вещей. Эти шкафы обычно имеют простую конструкцию и надежные
				замки для
				защиты содержимого.
			</p>
			<label class='fs-9 fw-semibold text-muted'>
				2.&nbsp;Архивные&nbsp;шкафы
			</label>
			<p class='types__p'>
				Предназначены для организации и хранения документов, файлов и архивных материалов. Такие шкафы часто
				имеют
				выдвижные ящики или полки с различными уровнями доступа, что позволяет быстро находить нужные документы.
			</p>
			<label class='fs-9 fw-semibold text-muted'>
				3.&nbsp;Инструментальные&nbsp;шкафы
			</label>
			<p class='types__p'>
				Применяются в мастерских и на производствах для хранения инструментов и оборудования. Они отличаются
				высокой
				несущей способностью, большим количеством отделений и часто оснащены замками для безопасности хранения.
			</p>
			<label class='fs-9 fw-semibold text-muted'>
				4.&nbsp;Офисные&nbsp;шкафы
			</label>
			<p class='types__p'>
				Используются в офисах для хранения документации, канцелярских принадлежностей и личных вещей
				сотрудников. Обычно
				эти шкафы оснащены дверями и замками для обеспечения конфиденциальности и безопасности.
			</p>
			<label class='fs-9 fw-semibold text-muted'>
				5.&nbsp;Шкафы&nbsp;для&nbsp;продуктов
			</label>
			<p class='types__p'>
				Применяются в ресторанах, кафе и на коммерческих кухнях для хранения продуктов и посуды. Такие шкафы
				часто
				оснащены регулируемыми полками и встроенными системами вентиляции для поддержания свежести продуктов.
			</p>
		</div>
	</div>
</div>
<div class='mt-5'>
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
						<label for="feedback_question"
							class="fs-9 text-end col-1 d-flex justify-content-center fw-bolder text-white">
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
</div>
<?php require("../template-parts/footer.php"); ?>