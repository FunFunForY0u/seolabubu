
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
							<li class="nav-item"><a class="nav-link active" href="jagalink.php">JagaLink</a></li>
							<li class="nav-item"><a class="nav-link " href="billings.php">Billings</a></li>
							<li class="nav-item">
								<a class="nav-link " href="announcements.php">
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
        <div class="col-12 col-lg-8 order-2 order-lg-1">
            <div class="card my-3">
                <div class="card-header p-3">
                    <h5 class="card-title text-center mb-0">List JagaLink</h5>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Short URL</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="col-12 col-lg-4 order-1 order-lg-2">
                <div class="card my-3">
                    <div class="card-header p-3">
                        <h5 class="card-title text-center mb-0">Add New JagaLink</h5>
                    </div>
                    <div class="card-body py-3">
                        <form method="POST" action="https://triplezero.world/jagalink.php">
                            <input type="hidden" name="insert" value="true" />
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="1">Standard</option>
                                    <option value="2">Custom</option>
                                </select>
                                <ul class="small my-3">
                                    <li><strong>Standard</strong> URL random untuk redirect url yang dituju.</li>
                                    <li><strong>Custom</strong> URL random untuk redirect ke database triplezero (domain aktif di dalam [username])</li>                                    
                                </ul>
                            </div>
                            <div id="url-address" class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="url" class="form-label">URL Address</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your URL address">
                                        <ul class="small my-3">
                                            <li>Alamat URL harus lengkap menggunakan awalan <strong>https://</strong> or <strong>http://</strong></li>
                                            <li>Kesalahan menginput alamat URL akan memberikan redirect yang salah</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="branded_link" class="form-label">Branded Link</label>
                                        <input type="text" class="form-control" id="branded_link" name="branded_link" placeholder="Enter your Branded Link">
                                        <ul class="small my-3">
                                            <li><strong>Kosongkan</strong> bila anda menginginkan random redirect url</li>
                                            <li>Atau <strong>isilah</strong> dengan Branded Link yang anda inginkan. Contoh: <strong>triplezero</strong>, akan menghasilkan https://jaga.li/triplezero</li>
                                        </ul>
                                    </div>
                                </div>
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
	    
	        $(document).ready(function() {
	            $('#status').change(function() {
	                if ($(this).val() == '1') {
	                    $('#url-address').show();
	                } else {
	                    $('#url-address').hide();
	                }
	            });

	            if ($('#status').val() == '1') {
	                $('#url-address').show();
	            } else {
	                $('#url-address').hide();
	            }
	        });

	    
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
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"920b58e92c75a1b1","version":"2025.1.0","r":1,"token":"e8d2aa4247f64abc8d9f8a202a71b46d","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
</body>

	</html>