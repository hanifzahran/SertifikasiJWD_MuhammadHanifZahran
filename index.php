<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
?>
<!doctype html>
<html>

<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
	<header class="navbar navbar-dark bg-dark d-flex justify-content-center p-0 shadow">
		<div class="bg-dark text-white rounded-3">
			<div class="container-fluid">
				<h1 class="display-5 fw-bold text-center align-items-center">PERPUSTAKAAN UMUM</h1>
				<p class="display-1 fs-4 text-center">Jl. Kenangan Abang No. 11</p>
			</div>
		</div>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
				<div class="position-sticky pt-3">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php?p=beranda">
								<span data-feather="home"></span>
								Beranda
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?p=anggota">
								<span data-feather="file"></span>
								Data Anggota
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?p=buku">
								<span data-feather="shopping-cart"></span>
								Data Buku
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?p=transaksi-peminjaman">
								<span data-feather="bar-chart-2"></span>
								Transaksi Peminjaman
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<div id="content-container">
						<?php
						$pages_dir = 'pages';
						if (!empty($_GET['p'])) {
							$pages = scandir($pages_dir, 0);
							unset($pages[0], $pages[1]);
							$p = $_GET['p'];
							if (in_array($p . '.php', $pages)) {
								include($pages_dir . '/' . $p . '.php');
							} else {
								echo 'Halaman Tidak Ditemukan';
							}
						} else {
							include($pages_dir . '/beranda.php');
						}
						?>
					</div>
				</div>

				<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


		</div>
		</main>
	</div>
	</div>




	</div>
</body>


</html>