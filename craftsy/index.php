<?php
	$title = "Home";

	$productos = [
		[
			"id" => 1,
			"titulo" => "Nombre del Producto",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"imagen" => "img-phone-01.jpg",
			"precio" => 300,
			"estaEnOferta" => false,
		],
		[
			"id" => 2,
			"titulo" => "Nombre del Producto",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"imagen" => "img-phone-02.jpg",
			"precio" => 400,
			"estaEnOferta" => true,
		],
		[
			"id" => 3,
			"titulo" => "Nombre del Producto",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"imagen" => "img-phone-03.jpg",
			"precio" => 250,
			"estaEnOferta" => true,
		],
		[
			"id" => 4,
			"titulo" => "Nombre del Producto",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"imagen" => "img-phone-01.jpg",
			"precio" => 300,
			"estaEnOferta" => false,
		],
		[
			"id" => 5,
			"titulo" => "Nombre del Producto",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"imagen" => "img-phone-02.jpg",
			"precio" => 400,
			"estaEnOferta" => false,
		],
		[
			"id" => 6,
			"titulo" => "Nombre del Producto",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"imagen" => "img-phone-03.jpg",
			"precio" => 250,
			"estaEnOferta" => true,
		],
	];

	function precioFinal($unProducto){
			if ($unProducto["estaEnOferta"] == true) {
				return $unProducto["precio"] * 0.8;
			} else {
				return $unProducto["precio"];
			}
	}

	function descripcionLarga($unProducto){
			return $unProducto["descripcion"] . "<br>$ " . precioFinal($unProducto) . ".-";
		}
 ?>

<!DOCTYPE html>
<html>
	<?php require_once "head.php" ?>
	<body>
		<div class="container"> <!-- Contenedor ppal -->

			<?php include_once "header.php" ?>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
					<?php foreach ($productos as $unProducto) : ?>
					<article class="producto"><!-- Contenedor de cada producto -->
						<img class="main-photo" src="img/<?=$unProducto["imagen"]?>" alt="">
						<h2 class="name"><?=$unProducto["titulo"]?></h2>
						<p><?=descripcionLarga($unProducto)?></p>
						<a class="more" href="#">ver más</a>
					</article>
				<?php endforeach; ?>
				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
