@extends('layouts.template')

@section('title', 'SAMAPA')

@section('content')
	<!-- Sub Header -->
	<div class="sub-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-8">
					<div class="left-content">
						<p>SAMAPA<em>SERVICIO DE INFORMACIÓN DE CONTAMINACIÓN DE AGUA</em></p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-4">
					<div class="right-icons">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="{{ url('/') }}" class="logo">
							SAMAPA - ZONGO
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
							<li class="scroll-to-section"><a href="#apply">Reportes</a></li>
							<li class="has-sub">
								<a href="javascript:void(0)">Dirección</a>
								<ul class="sub-menu">
									<li><a href="/firemaps">Mapa</a></li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:void(0)">Administrador</a>
								<ul class="sub-menu">
									<li><a href="/admin">Iniciar sesión</a></li>
								</ul>
							</li>
						</ul>
						<a class="menu-trigger">
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<!-- ***** Main Banner Area Start ***** -->
	<section class="section main-banner" id="top" data-section="section1">
		<video autoplay muted loop id="bg-video">
			<source src="{{ asset('assets/images/zongo.mp4') }}" type="video/mp4">
		</video>

		<div class="video-overlay header-text">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="caption">
							<h6></h6>
							<h2>Bienvenido a SAMAPA - LA PAZ</h2>
							<p>
								El Servicio de Agua Potable y Alcantarillado – SAMAPA-Zongo, ubicado en el municipio de La Paz, Bolivia, es una empresa pública responsable del abastecimiento y saneamiento del agua en zonas como Zongo y sus alrededores. Su labor es fundamental para garantizar el acceso a agua segura y de calidad para la población.
								Dada la cercanía de actividades mineras en la cuenca del río Zongo, SAMAPA ha implementado sistemas de vigilancia y monitoreo ambiental enfocados en la detección temprana de contaminación del agua por la actividad minera. Estos sistemas incluyen análisis físico-químicos periódicos, control de metales pesados como mercurio, plomo y arsénico, y el monitoreo constante de las fuentes de agua.
								A través de estas acciones, SAMAPA-Zongo contribuye activamente a la protección de los recursos hídricos, previniendo riesgos para la salud humana y el medio ambiente. Además, la empresa promueve la educación ambiental y la participación comunitaria, fortaleciendo el compromiso colectivo con el uso sostenible del agua.
							</p>
							<div class="main-button-red">
								<div class="scroll-to-section"><a href="#contact">Contactarse</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Main Banner Area End ***** -->

	<section class="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-service-item owl-carousel">

						<div class="item">
							<div class="icon">
								<img src="{{ asset('assets/images/service-icon-01.png') }}" alt="Contacto">
							</div>
							<div class="down-content">
								<h4>Contacto Web con la institución</h4>
								<p>Se le proporciona la forma de conectar con el mundo</p>
							</div>
						</div>

						<div class="item">
							<div class="icon">
								<img src="{{ asset('assets/images/service-icon-02.png') }}" alt="Analisis">
							</div>
							<div class="down-content">
								<h4>Los mejores análisis</h4>
								<p>Proporcionamos los mejores datos analizados</p>
							</div>
						</div>

						<div class="item">
							<div class="icon">
								<img src="{{ asset('assets/images/service-icon-03.png') }}" alt="Alerta">
							</div>
							<div class="down-content">
								<h4>Alerta efectiva</h4>
								<p>Con el sistema podrá alertarse sobre una posible intoxicación</p>
							</div>
						</div>

						<div class="item">
							<div class="icon">
								<img src="{{ asset('assets/images/service-icon-02.png') }}" alt="Servicios">
							</div>
							<div class="down-content">
								<h4>Servicios Online</h4>
								<p>Le proporcionamos la mejor forma de solicitar servicios</p>
							</div>
						</div>

						<div class="item">
							<div class="icon">
								<img src="{{ asset('assets/images/service-icon-03.png') }}" alt="Plataforma">
							</div>
							<div class="down-content">
								<h4>Plataforma administrativa</h4>
								<p>Ahora le damos a nuestra empresa una mejor forma de controlar la situación</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="upcoming-meetings" id="meetings">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h2>SAMAPA - ZONGO</h2>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="categories">
						<h4>Categorías</h4>
						<ul>
							<li><a href="#">Detección precisa</a></li>
							<li><a href="#">&nbsp;</a></li>
							<li><a href="#">Análisis predictivo</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6">
							<div class="meeting-item">
								<div class="thumb">
									<div class="price">
										<span>1</span>
									</div>
									<a href="#" title="Detección de contaminación">
										<img src="{{ asset('assets/images/LecturaBrailleNiña.png') }}" alt="Clase Braille">
									</a>
								</div>
								<div class="down-content">
									<div class="date">
										<h6>gestión<span>2025</span></h6>
									</div>
									<h4>Detección de Contaminación</h4>
									<p>Aprendizaje básico para lectura y escritura en Braille.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="meeting-item">
								<div class="thumb">
									<div class="price">
										<span>A</span>
									</div>
									<a href="#" title="Tecnología adaptada">
										<img src="{{ asset('assets/images/MaestraEnseñando.png') }}" alt="Tecnología para Ciegos">
									</a>
								</div>
								<div class="down-content">
									<div class="date">
										<h6>MAR<span>29</span></h6>
									</div>
									<h4>Tecnología de Apoyo</h4>
									<p>Uso de dispositivos adaptados para personas con discapacidad visual.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="meeting-item">
								<div class="thumb">
									<div class="price">
										<span>B</span>
									</div>
									<a href="#" title="Lectura táctil">
										<img src="{{ asset('assets/images/LecturaTactilGuiada.png') }}" alt="Lectura Táctil">
									</a>
								</div>
								<div class="down-content">
									<div class="date">
										<h6>MAR<span>29</span></h6>
									</div>
									<h4>Lectura Táctil Guiada</h4>
									<p>Desarrollo de habilidades para interpretación táctil.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="meeting-item">
								<div class="thumb">
									<div class="price">
										<span>B</span>
									</div>
									<a href="#" title="Bienvenida educativa">
										<img src="{{ asset('assets/images/bienvenida.png') }}" alt="Inicio de Clases">
									</a>
								</div>
								<div class="down-content">
									<div class="date">
										<h6>MAR<span>30</span></h6>
									</div>
									<h4>Bienvenida Educativa</h4>
									<p>Inicio de clases para estudiantes nuevos. Formando futuros independientes.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apply-now" id="apply">
		<div class="container">
			<div class="row" style="margin-bottom: 50px;">
				<div class="col-md-6">
					<div class="info-card">
						<h3 style="color: #2c3e50;">Misión</h3>
						<p style="font-size: 16px; color: #34495e;">Educar, rehabilitar e integrar a las personas con discapacidad visual en Bolivia, promoviendo su independencia, inclusión social y calidad de vida.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="info-card">
						<h3 style="color: #2c3e50;">Visión</h3>
						<p style="font-size: 16px; color: #34495e;">Ser una institución líder en educación y rehabilitación para personas con discapacidad visual, reconocida por su compromiso, innovación y calidad humana.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 align-self-center">
					<div class="row">
						<div class="col-lg-12">
							<div class="item" style="background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 30px;">
								<h3 style="color: #2c3e50;">Únete a APRECIA</h3>
								<p style="color: #34495e;">Sé parte de nuestra comunidad educativa inclusiva.</p>
								<div class="main-button-red" style="margin-top: 15px;">
									<div class="scroll-to-section">
										<a href="#contact" style="background-color: #e74c3c; color: #fff; padding: 10px 25px; border-radius: 6px;">Solicitar Información</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="item" style="background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
								<h3 style="color: #2c3e50;">Comunícate con Nosotros</h3>
								<p style="color: #34495e;">Resolvemos todas tus dudas y consultas.</p>
								<div class="main-button-yellow" style="margin-top: 15px;">
									<div class="scroll-to-section">
										<a href="#contact" style="background-color: #f1c40f; color: #fff; padding: 10px 25px; border-radius: 6px;">Contáctanos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="accordions is-first-expanded">
						<article class="accordion">
							<div class="accordion-head">
								<span>Programas Educativos</span>
								<span class="icon"><i class="icon fa fa-chevron-right"></i></span>
							</div>
							<div class="accordion-body">
								<div class="content">
									<p>Educación inicial, primaria, secundaria e integración escolar especializada para estudiantes con discapacidad visual.</p>
								</div>
							</div>
						</article>

						<article class="accordion">
							<div class="accordion-head">
								<span>Servicios de Rehabilitación</span>
								<span class="icon"><i class="icon fa fa-chevron-right"></i></span>
							</div>
							<div class="accordion-body">
								<div class="content">
									<p>Programas de orientación, movilidad, habilidades de vida diaria y rehabilitación sensorial para lograr autonomía personal.</p>
								</div>
							</div>
						</article>

						<article class="accordion">
							<div class="accordion-head">
								<span>Prevención Visual</span>
								<span class="icon"><i class="icon fa fa-chevron-right"></i></span>
							</div>
							<div class="accordion-body">
								<div class="content">
									<p>Campañas oftalmológicas gratuitas y entrega de lentes correctivos a poblaciones vulnerables.</p>
								</div>
							</div>
						</article>

						<article class="accordion last-accordion">
							<div class="accordion-head">
								<span>Nuestra Comunidad</span>
								<span class="icon"><i class="icon fa fa-chevron-right"></i></span>
							</div>
							<div class="accordion-body">
								<div class="content" style="text-align: center;">
									<img src="{{ asset('assets/images/aprecia-comunidad.jpg') }}" alt="Comunidad APRECIA" style="max-width: 100%; height: auto; border-radius: 8px; margin-top: 15px;">
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="our-courses" id="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h2>NUESTROS SERVICIOS</h2>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="owl-courses-item owl-carousel">

						<div class="item">
							<img src="{{ asset('assets/images/educacionespecializada.jpg') }}" alt="Educación Especializada">
							<div class="down-content">
								<h4>Educación Especializada</h4>
								<div class="info">
									<div class="row">
										<div class="col-12">
											<p>Atención educativa a estudiantes con discapacidad visual o discapacidad visual múltiple en modalidades Directa e Indirecta.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<img src="{{ asset('assets/images/rehabilitacion.png') }}" alt="Rehabilitación Visual">
							<div class="down-content">
								<h4>Programa de Rehabilitación</h4>
								<div class="info">
									<div class="row">
										<div class="col-12">
											<p>Fortalecimiento de habilidades sensoriales, motrices y de autonomía personal para personas con baja visión o ceguera.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<img src="{{ asset('assets/images/lectoescritura.jpg') }}" alt="Lectoescritura Braille">
							<div class="down-content">
								<h4>Lectoescritura Braille</h4>
								<div class="info">
									<div class="row">
										<div class="col-12">
											<p>Enseñanza del sistema Braille para facilitar el acceso a la lectura, escritura y conocimientos académicos de manera inclusiva.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<img src="{{ asset('assets/images/terapiafamiliar.jpg') }}" alt="Trabajo con familias">
							<div class="down-content">
								<h4>Apoyo a Familias</h4>
								<div class="info">
									<div class="row">
										<div class="col-12">
											<p>Orientación, acompañamiento y talleres para fortalecer el rol de las familias en el proceso educativo y rehabilitador de sus hijos.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<img src="{{ asset('assets/images/integracionescolar.jpg') }}" alt="Integración Escolar">
							<div class="down-content">
								<h4>Integración Escolar</h4>
								<div class="info">
									<div class="row">
										<div class="col-12">
											<p>Acciones para apoyar la inclusión de estudiantes en escuelas regulares, proporcionando adaptaciones curriculares y asesoramiento.</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-us" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 align-self-center">
					<div class="row">
						<div class="col-lg-12">
							<form id="contact" action="#" method="post">
								<div class="row">
									<div class="col-lg-12">
										<h2>Contáctate con APRECIA</h2>
									</div>
									<div class="col-lg-4">
										<fieldset>
											<input name="name" type="text" id="name" placeholder="Tu Nombre Completo*" required>
										</fieldset>
									</div>
									<div class="col-lg-4">
										<fieldset>
											<input name="email" type="email" id="email" placeholder="Tu Correo Electrónico*" required>
										</fieldset>
									</div>
									<div class="col-lg-4">
										<fieldset>
											<input name="subject" type="text" id="subject" placeholder="Asunto del Mensaje*" required>
										</fieldset>
									</div>
									<div class="col-lg-12">
										<fieldset>
											<textarea name="message" class="form-control" id="message" placeholder="Escribe tu mensaje aquí..." required></textarea>
										</fieldset>
									</div>
									<div class="col-lg-12">
										<fieldset>
											<button type="submit" id="form-submit" class="button">Enviar Mensaje</button>
										</fieldset>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="right-info">
						<ul>
							<li>
								<h6>Teléfono</h6>
								<span>+591 2 2445078</span>
							</li>
							<li>
								<h6>Correo Electrónico</h6>
								<span>contacto@apreciabolivia.org</span>
							</li>
							<li>
								<h6>Dirección</h6>
								<span>Zona Pichincha, Calle Comercio, La Paz, Bolivia</span>
							</li>
							<li>
								<h6>Sitio Web</h6>
								<span>www.apreciabolivia.org</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<p>© 2025 APRECIA La Paz. Todos los derechos reservados.<br>Desarrollado con ❤️ para promover la inclusión y la educación visual.</p>
		</div>
	</section>
@endsection

@push('scripts')
	<script>
		(function () {
			const activateFirstItem = () => {
				const firstItem = document.querySelector('.nav li');
				if (firstItem) {
					firstItem.classList.add('active');
				}
			};

			const showSection = (section, isAnimate) => {
				const direction = section.replace(/#/, '');
				const reqSection = document.querySelector(`.section[data-section="${direction}"]`);

				if (!reqSection) {
					return;
				}

				const reqSectionPos = reqSection.getBoundingClientRect().top + window.pageYOffset;

				if (isAnimate) {
					window.scrollTo({ top: reqSectionPos, behavior: 'smooth' });
				} else {
					window.scrollTo(0, reqSectionPos);
				}
			};

			const checkSection = () => {
				const wScroll = window.pageYOffset;
				document.querySelectorAll('.section').forEach((section) => {
					const topEdge = section.getBoundingClientRect().top + window.pageYOffset - 80;
					const bottomEdge = topEdge + section.offsetHeight;

					if (topEdge < wScroll && bottomEdge > wScroll) {
						const currentId = section.dataset.section;
						document.querySelectorAll(`a[href*="\#${currentId}"]`).forEach((link) => {
							const li = link.closest('li');
							if (li) {
								li.classList.add('active');
								li.parentElement?.querySelectorAll('li').forEach((sibling) => {
									if (sibling !== li) {
										sibling.classList.remove('active');
									}
								});
							}
						});
					}
				});
			};

			document.querySelectorAll('.main-menu a, .responsive-menu a, .scroll-to-section a').forEach((link) => {
				link.addEventListener('click', (e) => {
					const href = link.getAttribute('href');
					if (href && href.startsWith('#')) {
						e.preventDefault();
						showSection(href, true);
					}
				});
			});

			window.addEventListener('scroll', checkSection);
			activateFirstItem();
		})();
	</script>
@endpush
