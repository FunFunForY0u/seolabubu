
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
							<li class="nav-item"><a class="nav-link active" href="serp.php">SERP</a></li>
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
					<h5 class="card-title text-center mb-0">List SERP
													
					</h5>
				</div>
				<div class="card-body py-3">	
					<div class="table-responsive">				
						<table class="table table-striped">					
							<thead>
								<tr>
									<th scope="col" width="50">Rank</th>
									<th scope="col" width="200">Title</th>
									<th scope="col" width="275">Link</th>
									<th scope="col" width="275">Displayed Link</th>									
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
		            <h5 class="card-title text-center mb-0">Add New SERP</h5>			            
		        </div>
		        <div class="card-body py-3">
		            <form method="POST" action="https://triplezero.world/serp.php">
		            	<input type="hidden" name="insert" value="true" />
		                <div class="mb-3">
		                    <label for="query" class="form-label">Query</label>
		                    <input type="text" class="form-control" id="query" name="query" placeholder="Enter your query" required>		                    
		                </div>
		                <div class="mb-3">
		                	<label for="city" class="form-label">City</label>
							<select class="form-select" id="city" name="city">
								<option value="Indonesia" selected>Indonesia</option>
								<option value="Jakarta, Indonesia">Jakarta</option>
								<option value="Surabaya, Indonesia">Surabaya</option>
								<option value="Semarang, Indonesia">Semarang</option>
								<option value="Yogyakarta, Indonesia">Yogyakarta</option>
							</select>							
		                </div>
		                <div class="mb-3">
		                	<label for="device" class="form-label">Device</label>
							<select class="form-select" id="device" name="device">
								<option value="desktop">Desktop</option>
								<option value="mobile" selected>Mobile</option>
							</select>							
		                </div>
		                <div class="mb-3">
		                    <label for="quota" class="form-label">Daily Quota</label>
		                    <input type="text" class="form-control" id="quota" name="quota" value="50" disabled readonly>		                    
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
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"920b57168e198961","version":"2025.1.0","r":1,"token":"e8d2aa4247f64abc8d9f8a202a71b46d","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
</body>

	</html>