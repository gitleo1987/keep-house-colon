<?php include('procesar_form.php'); ?>
<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">
	<head>
		<title>Keep House</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="Description" content="KeepHouse - Cuidado y mantenimiento de propiedades.">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/keep.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	</head>
    	<body class="is-preload">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
            <!-- jQuery Modal -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
            <?php
            $mensaje = "";
            if(isset($_SESSION['mensaje']))
            {
                echo "<script> $(function() {
                $('html, body').animate({
                scrollTop: $('#resultado').offset().top}, 1000);
                });
            </script>";
                $mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
            ?>
		<!-- Header -->
			<div id="header">
                <div class="header-logo">
				    <img class= "img-responsive logotipo" id="logokeep" src="images/logo.png" alt="logo">
                </div>
                <div class="logo-vertical">
                <img class="img-responsive" id= "logocel" src= "images/logo-vertical2.png" alt="logo">
                </div>
                <div class="header-slogan"><img class="img-responsive" id="slogan" src="images/slogan.png" alt="slogan"></div>
                <div class="header-consulta"><a href="https://wa.me/5492921408809?text=Me%20interesa%20saber%20m??s%20del%20servicio" target="_blank"><img class="tel img-responsive" id="telefono" src="images/consulta.png" alt="consulta"></a></div>
			</div>

		<!-- Main -->
			<div id="main">

				<header class="major container medium">
					<h2>Disfrut?? la tranquilidad de que alguien se ocupe de tu casa mientras no est??s.
                    <br>As?? cuando vuelvas vas a encontrar "todo bien y en funcionamiento".
                    <br>Y si hubiera alg??n inconveniente, te lo avisaremos a tiempo y nos ocuparemos de resolverlo.
                    </h2><br>
                    <h2>Por un conveniente abono mensual te ofrecemos un servicio b??sico, al que pod??s sumar los adicionales que te parezcan.
                    <br/>A continuaci??n clique?? sobre las fotos de los servicios que te interesen y solicit?? presupuesto.
                    </h2>
				</header>
                <!-- Servicios -->
                <!-- Servicio B??sico -->
				<div class="box alt container">
					<section class="feature left">
						<div class="image icon fas keep-letra-b"> <img src="images/serv-basico.jpg" alt="basico" /></div>
						<div class="content">
                            <a id="wssp" style="display: scroll;border:none; width: 50px; height: 50px; position: fixed; bottom: 50px; right: 20px; z-index: 2000;" title="Contactanos por Whatsapp" href="https://wa.me/5492921408809?text=Me%20interesa%20saber%20m??s%20del%20servicio" target="_blank"><img class="img-responsive" src="images/whatsapp.png" alt="whatsapp"></a>
                            <div id="logoflot" style="display: scroll;border:none; width: 50px; height: 50px; position: fixed; top: 50px; left: 20px; z-index: 2000;"><img class="img-responsive" src="images/logo-flotante.png" alt="logo-flotante"></div>
							<h3>Servicio B??sico</h3>
                            <p>   Visita quincenal con revisi??n de:</p>
                            <ul class="keep-lista-servicios">
                                <li>Grifer??a y sanitarios, para evitar p??rdidas de agua.</li>
                                <li>Luces y sistema de alarma.</li>
                                <li>Adecuado cierre de puertas y ventanas.</li>
                                <li>Chequeo de humedad interior y exterior.</li>
                                <li>Gas y electricidad.</li>
                                <li>Airear la vivienda.</li>
                            </ul>
                                 <a href="#ex1" rel="modal:open">Ver m??s..</a>

                            <!-- The Modal -->
                            <div id="ex1" class="modal">
                                <h3>Servicio B??sico</h3>
                            <p>   Visita quincenal con revisi??n de:</p>
                            <ul class="keep-lista-servicios">
                                <li>Grifer??a y sanitarios, para evitar p??rdidas de agua.</li>
                                <li>Luces y sistema de alarma.</li>
                                <li>Adecuado cierre de puertas y ventanas.</li>
                                <li>Chequeo de humedad interior y exterior.</li>
                                <li>Gas y electricidad.</li>
                                <li>Airear la vivienda.</li>
                                <li>Puesta en marcha de electrodom??sticos, aire acondicionados, etc.</li>
                                <li>Custodia de Llaves: Nos ocupamos de la entrega de llaves a invitados y personas autorizadas.</li>
                                <li>Informe mensual del estado de la propiedad, incluye material fotogr??fico.</li>
                            </ul>

                              <a href="#" rel="modal:close">Cerrar</a>
                            </div>
                        </div>
                        </section>
                      <!-- Control de aver??as -->
					<section class="feature right">
						<div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="GA" class="service-selector" onclick="seleccionarServicio('GA')"></div>
                            <img src="images/serv-averias.jpg" alt="averias" />
                        </div>
						<div class="content">
							<h3>Gesti??n de aver??as</h3>
                            <p>Nuestra tarea es prever los problemas. Pero si ocurren, contamos con un robusto equipo de expertos en Plomer??a,
                            Aire Acondicionado y Calefacci??n, Electricidad, Carpinter??a, Cerrajer??a y reparaciones en general. Detectado el inconveniente, informamos, presupuestamos y supervisamos la reparaci??n hasta su conclusi??n.
                            </p>
                        </div>
  					</section>
                     <!-- Casa Lista -->
					<section class="feature left">
                        <div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="CL" class="service-selector" onclick="seleccionarServicio('CL')"></div>
                            <img src="images/serv-casa-lista.jpg" alt="casa-lista" />
                        </div>
						<div class="content">
							<h3>Casa Lista</h3>
                            <p>Si est??s por venir a pasar la temporada o un fin de semana en cualquier momento del a??o, avisanos con 48hs de anticipaci??n y nos ocuparemos de que la casa est?? ventilada,
                            calefaccionada y con una compra m??nima de supermercado en la heladera, para aprovechar la estad??a a pleno.
                            </p>

						</div>
					</section>
				 <!-- Otras opciones nuevas!-->
                 <!-- Representaci??n ante el consorcio-->

					<section class="feature right">
                        <div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="RC" class="service-selector" onclick="seleccionarServicio('RC')"></div>
                            <img src="images/serv-representacion.jpg" alt="representacion" />
                        </div>
						<div class="content">
							<h3>Representaci??n ante el consorcio</h3>
                            <p>Venir a Monte s??lo por una reuni??n del edificio es muy molesto. Autorizaci??n mediante te representaremos y rendiremos un informe para mantenerte al tanto. </p>
						</div>
  					</section>
                     <!-- Gesti??n y pago de proveedores-->
					<section class="feature left">
                        <div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="PP" class="service-selector" onclick="seleccionarServicio('PP')"></div>
                            <img src="images/serv-gestion-pago.jpg" alt="gestion-pago" />
                        </div>
						<div class="content">
							<h3>Gesti??n y pago de proveedores</h3>
							<p>Desligate del pago de servicios, proveedores y gestiones municipales. </p>
                        </div>
                    </section>
                    <!-- Reformas en la Vivienda -->
					<section class="feature right">
                        <div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="RV" class="service-selector" onclick="seleccionarServicio('RV')"></div>
                            <img src="images/serv-reformas.jpg" alt="reformas" />
                        </div>
						<div class="content">
							<h3>Reformas en la Vivienda</h3>
							<p>Cambiar un piso del departamento, instalar una reja y proyectos m??s ambiciosos, todo proyecto se puede abordar.</p>
						</div>
					</section>
				 <!-- Transfer desde el Aeropuerto o Bah??a Blanca -->
					<section class="feature left">
                        <div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="TA" class="service-selector" onclick="seleccionarServicio('TA')"></div>
                            <img src="images/serv-transfer.jpg" alt="transfer" />
                        </div>
						<div class="content">
							<h3>Transfer desde el Aeropuerto <br>o Bah??a Blanca</h3>
                            <p>??Visitas que llegan en otro medio que no sea en auto? Nosotros nos ocupamos de traerlos sin que pierdas un minuto de playa. Contrataci??n puntual, no se incorpora al abono.
                            </p>
						</div>
                    </section>
                      <!-- Env??o / Recepci??n -->
					<section class="feature right">
                        <div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="ER" class="service-selector" onclick="seleccionarServicio('ER')"></div>
                            <img src="images/serv-envio-recep.jpg" alt="envio-recepcion" />
                        </div>
						<div class="content">
							<h3>Env??o / Recepci??n</h3>
							<p>??Compraste una heladera o un mueble nuevo? Nosotros lo recibimos, instalamos y damos el destino que indiques al aparato reemplazado.
                            Lo mismo ocurre con paqueter??a de todos los tama??os.
                            </p>

                        </div>
                    </section>
                      <!-- Le??a y Carb??n  -->
					<section class="feature left">
                        <div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="LC" class="service-selector" onclick="seleccionarServicio('LC')"></div>
                            <img src="images/serv-lena-carbon.jpg" alt="carbon-le??a" />
                        </div>
						<div class="content">
							<h3>Le??a y Carb??n</h3>
							<p>Nos ocupamos de mantener tu le??era y carbonera siempre lista para un buen asado o un c??lido fuego en el invierno. </p>
						</div>
					</section>

                    <!-- Servivio antiplagas -->
                    <section class="feature right">
                        <div class="image icon fas keep-check imagen-no-seleccionada">
                            <div id="SA" class="service-selector" onclick="seleccionarServicio('SA')"></div>
                            <img src="images/serv-antiplagas.jpg" alt="antiplagas" />
                        </div>
						<div class="content">
							<h3>Servicio antiplagas</h3>
							<p>Fumigaci??n sistem??tica del hogar, jard??n y parque, para mantener la higiene y asegurarte que tu momento de relax no se convierta en algo desagradable.</p>

                        </div>
                    </section>
                </div>
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container medium">

					<header class="major last">
						<h2>Solicitud de Presupuesto</h2>
					</header>
                    <span id="resultado" class="exito"><?= $mensaje ?></span>
					<p>??Quer??s saber cu??l es el valor de nuestro servicio? <br>Agreg?? los adicionales que sean de tu inter??s y te enviaremos un presupuesto a medida. </p>

					<form  id="form-solicitud" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
						<div class="row">
                            <div class="col-12">
                             <ul class="actions special">
						          <li><div class="button abrir-selector-servicios">Agreg?? Servicio</div></li>
					           </ul>

                                <select id="mySelect2" class="js-servicios-basic-multiple" name="servicios[]" multiple="multiple" lang="es">
                                    <option value="BA" disabled="disabled">Servicio B??sico</option>
                                    <option value="GA">Gesti??n de Aver??as</option>
                                    <option value="CL">Casa Lista</option>
                                    <option value="RC">Representaci??n ante el consorcio</option>
                                    <option value="PP">Gesti??n y pago de proveedores</option>
                                    <option value="RV">Reformas en la Vivienda</option>
                                    <option value="TA">Transfer desde el Aeropuerto o Bah??a Blanca</option>
                                    <option value="ER">Env??o/Recepci??n</option>
                                    <option value="LC">Le??a y Carb??n</option>
                                    <option value="SA">Servicio antiplagas</option>
                                </select>
                            </div>

							<div class="col-6 col-12-mobilep">
								<input type="text" name="nombre" required value="<?= $nombre ?>" placeholder="Nombre" />
                                <span class="error"><?= $nombre_error ?></span>
							</div>
                            <div class="col-6 col-12-mobilep">
								<input type="text" name="apellido" required value="<?= $apellido ?>" placeholder="Apellido" />
							</div>
							<div class="col-12">
								<input type="email" name="email" required value="<?= $email ?>" placeholder="Correo Electr??nico" />
                                <span class="error"><?= $email_error ?></span>
							</div>
                            <div class="col-6 col-12-mobilep">
								<input type="text" id="input-tel" required name="telefono" value="<?= $telefono ?>" placeholder="Tel??fono / WhatsApp" />
                                <span class="error"><?= $telef_error ?></span>
							</div>
							<div class="col-6 col-12-mobilep">
								<select id="mySelect2-inm" required class="js-inmueble-basic-single" name="inmueble" lang="es">
                                    <option></option>
                                    <option value="CA">Casa</option>
                                    <option value="DE">Departamento</option>
                                    <option value="LC">Local Comercial</option>
                                    <option value="PH">PH</option>
                                    <option value="TE">Terreno</option>
                                </select>
                                <span class="error"><?= $inmueble_error ?></span>
							</div>
							<div class="col-12">
								<input type="text" name="calle" required value="<?= $calle ?>" placeholder="Calle y N??mero" />
							</div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Enviar" /></li>
								</ul>
							</div>
						</div>
					</form>
                    <div class="mapa">
                        <a href="https://goo.gl/maps/33EEmmv5euf6x3uBA" target="_blank"><img src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/static/-58.14240428206472,-32.22515584756239,14,0/800x600?access_token=pk.eyJ1IjoiZW1pcndlYiIsImEiOiJja3FnMmxxM2IwdWFwMnhwZTV0dHkwZHQwIn0.w8PTNo02lbwRfbk7_vCrVg&attribution=false&logo=false" alt="Mapa de Colon"></a>
                    </div>
                    <br>
                    <ul>
                        <li>+54 9 344 751-8811</li>
                    </ul>
					<ul class="icons">
						<li><a href="https://wa.me/5493447518811?text=Me%20interesa%20saber%20m??s%20del%20servicio" target="_blank" class="icon brands fa-whatsapp"><span class="label">WhatsApp</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<ul class="copyright">
						<li>Keep-House Cuidado y mantenimiento de propiedades. De Marcelo Lemus ??? Col??n ??? Entre R??os</li>
					</ul>

				</div>
                <div class="container medium">
                <ul class="desarrollador">
                    <li>Desarrollado por <a href="https://wa.me/5492915227801" target="_blank"> Waiser Creatividad Publicitaria</a></li>
				</ul>
                </div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/jquery.inputmask.min.js"></script>
            <script src="assets/js/bindings/inputmask.binding.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
            <!-- Libreria espa??ol -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>
            <script>
                $('#mySelect2-inm').val('<?= $inmueble ?>');
                $('#mySelect2-inm').trigger('change');
                $('#mySelect2').val([<?= $servicios ?>]);
                $('#mySelect2').trigger('change');
            </script>


	</body>
</html>
