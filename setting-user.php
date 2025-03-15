
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
								<a class="nav-link " href="announcements.php">
									<i class="bi bi-bell-fill d-none d-lg-inline"></i>
									<span class="d-inline d-lg-none">Announcements</span>
																	</a>								
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="setting-user.php">
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
		<div class="col-12 col-lg-6">
		    <div class="card my-3">
		        <div class="card-header p-3">
		            <h5 class="card-title text-center mb-0">Setting Telegram</h5>
		        </div>
		        <div class="card-body py-3">
		            <form method="POST" action="https://triplezero.world/setting-user.php">
		            	<input type="hidden" name="type" value="chatid-telegram" />
		            	<div class="mb-3">
		                    <label for="id_telegram" class="form-label">ChatID Telegram</label>
		                    <input type="text" class="form-control" id="id_telegram" name="id_telegram" value="6913380052,5834160002,5397310319,5783927496,5318123951,6617899100,6223309891,6912696052" />		                    
		                </div>
						<div class="mb-3">
		                    <label for="id_telegram_channel" class="form-label">ChatID Telegram Private Channel</label>
		                    <input type="text" class="form-control" id="id_telegram_channel" name="id_telegram_channel" value="" />		                    
		                </div>
						<div class="mb-3">
		                    <label for="id_telegram_group" class="form-label">ChatID Telegram Group</label>
		                    <input type="text" class="form-control" id="id_telegram_group" name="id_telegram_group" value="" />		                    
		                </div>
		                <div class="mb-3">
		                    <label for="id_telegram" class="form-label">Billing Notification</label>
		                    <input type="text" class="form-control" id="id_telegram_billing" name="id_telegram_billing" value="" />
		                </div>
		                <div class="mb-3">
		                    <ul class="small my-3">
								<li>Masukkan ChatID Telegram di sini</li>
								<li>Pisahkan dengan koma tanpa spasi apabila ada beberapa Telegram</li>
								<li><strong>Contoh:</strong> 11111,22222,33333,44444</li>								
								<li><strong>Untuk ChatID Group & Channel</strong> silahkan kontak ke Admin terlebih dahulu</li>				            	
				            </ul>
				            <p>Untuk memasukkan notifikasi Telegram</p>
				            <ul class="small my-3">
				            	<li>Chat ke <strong>@jagadomainbot</strong></li>
								<li>Klik <strong>start</strong></li>
								<li>Ketik <strong>/chatid</strong></li>
								<li>Ke dashboard <strong>triplezero.world</strong></li>
								<li>Masukkan ChatID-nya di kolom notifikasi telegram</li>
				            </ul>
		                </div>
		            	<button type="submit" class="btn btn-lg btn-dark btn-block w-100 mb-3">Submit</button>
		            </form>
		        </div>
		    </div>
		</div>
		<div class="col-12 col-md-6">
		    <div class="card my-3">
		        <div class="card-header p-3">
		            <h5 class="card-title text-center mb-0">Change Password</h5>
		        </div>
		        <div class="card-body py-3">
		            <form method="POST" action="https://triplezero.world/setting-user.php">
		            	<input type="hidden" name="type" value="change-password" />
		                <div class="mb-3">
		                    <label for="password" class="form-label">Current Password</label>
		                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your current password" required>
		                </div>
		                <div class="mb-3">
		                    <label for="new_password" class="form-label">New Password</label>
		                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter your new password" required>
		                </div>
		                <button type="submit" class="btn btn-lg btn-dark btn-block w-100 mb-3">Submit</button>
		            </form>
		        </div>
		    </div>
		    <div class="card my-3">
		        <div class="card-header p-3">
		            <h5 class="card-title text-center mb-0">JagaDomain Redirect</h5>
		        </div>
		        <div class="card-body py-3">
		            <form method="POST" action="https://triplezero.world/setting-user.php">
		            	<input type="hidden" name="type" value="status-jagadomain" />
		                <div class="my-3 ms-3">
		                	<div class="form-check">
		                		<input class="form-check-input" name="status_jagadomain" type="checkbox" value="1" id="status_jagadomain" checked>
		                		<label class="form-check-label" for="status_jagadomain">
		                			Aktifkan JagaDomain Redirect
		                		</label>
		                	</div>
		                </div>
		                <div class="mb-3">
		                    <ul class="small my-3">
				            	<li>Centang <strong>(ON)</strong> untuk mengaktifkan username di dalam JagaDomain Redirect</li>
								<li>Hapus Centang <strong>(OFF)</strong> untuk menonaktifkan username di dalam JagaDomain Redirect</li>								
								<li>Link JagaDomain Redirect: <strong><a href="https://linkresmi.org/" target="_blank">https://linkresmi.org/</a></strong></li>
				            </ul>				            
		                </div>
		                <button type="submit" class="btn btn-lg btn-dark btn-block w-100 mb-3">Submit</button>
		            </form>
		        </div>
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
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"920b5b7b0a3b895a","version":"2025.1.0","r":1,"token":"e8d2aa4247f64abc8d9f8a202a71b46d","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
</body>

	</html>