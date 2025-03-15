
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TripleZero | Jaga Domain v1.3</title>
	<link href="https://triplezero.world/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://triplezero.world/lib/datatables/datatables.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://triplezero.world/assets/css/style.css" />
</head>
<body class="bg-dark">
	<nav class="navbar navbar-expand-lg navbar-dark bg-black">
		<div class="container">
		    <a class="navbar-brand" href="https://triplezero.world/dashboard.php">
				<img src="https://triplezero.world/assets/img/logo.png" alt="Nawala" height="30">
			</a>

			
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="main-nav">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item"><a class="nav-link " href="dashboard.php">Dashboard</a></li>
							<li class="nav-item"><a class="nav-link " href="domains.php">Domains</a></li>
							<li class="nav-item"><a class="nav-link " href="serp.php">SERP</a></li>
							<li class="nav-item"><a class="nav-link " href="trust-positif.php">TRUST+</a></li>
							<li class="nav-item"><a class="nav-link " href="jagalink.php">JagaLink</a></li>
							<li class="nav-item"><a class="nav-link " href="billings.php">Billings</a></li>
							<li class="nav-item">
								<a class="nav-link active" href="announcements.php">
									<i class="bi bi-bell-fill d-none d-lg-inline"></i>
									<span class="d-inline d-lg-none">Announcements</span>
																	</a>								
							</li>
							<li class="nav-item">
								<a class="nav-link " href="setting-user.php">
									<i class="bi bi-gear-fill d-none d-lg-inline"></i>
									<span class="d-inline d-lg-none">Setting</span>
								</a>								
							</li>
							<li class="nav-item">
								<a class="nav-link" href="logout.php">
									<i class="bi bi-box-arrow-right d-none d-lg-inline"></i>
									<span class="d-inline d-lg-none">Logout</span>
								</a>
							</li>
						</ul>
						</div>
					
		</div>
	</nav>
	<div class="container py-5">

		<div class="row">
			<div class="col-12">
				<div class="card my-3">
					<div class="card-header p-3">
						<h5 class="card-title text-center mb-0">Announcements</h5>
					</div>					
					<ol class="list-group list-group-flush">
													<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto mb-2">
									<div class="fw-bold">JagaLink | Smart Short Link</div>
									Produk terbaru dari TripleZero, memberikan short link yang terintegrasi dengan database kami, sehingga user dapat memilih smart short link, yang secara acak otomatis redirect ke domain aktif di akun user tersebut. Untuk informasi lebih lanjut atau cara pemakaian bisa hubungi support kami di Telegram https://t.me/jagadomainsupport								</div>
							    <span class="badge bg-primary rounded-pill mt-2">2024-08-04 19:25:41</span>
							</li>							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto mb-2">
									<div class="fw-bold">JagaDomain | Redirect</div>
									Produk terbaru dari TripleZero, memberikan fitur tambahan Redirect bagi pengguna. Sistem ini bisa diaktifkan atau tidak diaktifkan melalui tombol setting di dashboard pengguna. Sistem akan secara otomatis mengarahkan member ke domain yang terdaftar dan aktif, di dalam TripleZero. Saat ini kami menggunakan username sebagai keyword unik merek masing-masing pengguna. Link Redirect ini dapat diakses di https://linkresmi.org/. Terima kasih!								</div>
							    <span class="badge bg-primary rounded-pill mt-2">2024-03-11 17:19:17</span>
							</li>							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto mb-2">
									<div class="fw-bold">Notifikasi billing</div>
									Untuk menerima notifikasi tagihan melalui telegram, bisa memasukkan chatID telegram tertentu di halaman setting, agar hanya yang bersangkutan menerima notifikasi tagihan tersebut.

Terima kasih!								</div>
							    <span class="badge bg-primary rounded-pill mt-2">2024-03-05 17:49:00</span>
							</li>							<li class="list-group-item d-flex justify-content-between align-items-start">
								<div class="ms-2 me-auto mb-2">
									<div class="fw-bold">Trust+ Manual Check</div>
									Update terbaru dari TripleZero - Jaga Domain, di menu bagian kanan terdapat fitur baru dari kami untuk melakukan cek domain pada TrustPositif milik kominfo. Fitur ini kami set manual agar tidak menimbulkan spam ke website kominfo.

Terima kasih!								</div>
							    <span class="badge bg-primary rounded-pill mt-2">2024-02-28 17:52:12</span>
							</li>					</ol>	
					<div class="card-footer p-3">
					</div>
				</div>
			</div>
		</div>

		<script src="https://triplezero.world/lib/jquery-3.7.1.min.js"></script>
	<script src="https://triplezero.world/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://triplezero.world/lib/datatables/datatables.min.js"></script>
	<script src="https://triplezero.world/assets/js/main.js"></script>
	<script type="text/javascript">
	    
	        function updateClock() {
	            var chicagoTime = new Date().toLocaleString("en-US", {
	                timeZone: "Asia/Jakarta"
	            });
	            var chicagoDate = new Date(chicagoTime);

	            var hours = chicagoDate.getHours().toString().padStart(2, '0');
	            var minutes = chicagoDate.getMinutes().toString().padStart(2, '0');
	            var seconds = chicagoDate.getSeconds().toString().padStart(2, '0');

	            var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
	            var month = monthNames[chicagoDate.getMonth()];
	            var day = chicagoDate.getDate().toString().padStart(2, '0');
	            var year = chicagoDate.getFullYear();

	            var timeString = hours + ':' + minutes + ':' + seconds;
	            var dateString = month + ' ' + day + ', ' + year;

	            // document.getElementById('clock').textContent = dateString + ' ' + timeString;
                var clockElement = document.getElementById('clock');
                if (clockElement) {
                    clockElement.textContent = dateString + ' ' + timeString;
                }
	        }

	        setInterval(updateClock, 1000); // Update the clock every second
	    	</script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"920b5ab7d97f895a","version":"2025.1.0","r":1,"token":"e8d2aa4247f64abc8d9f8a202a71b46d","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
</body>

	</html>