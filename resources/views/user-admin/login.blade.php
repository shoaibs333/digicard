
<!doctype html>
<html lang="en" class="semi-dark">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{url('user-admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('user-admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('user-admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{url('user-admin/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{url('user-admin/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{url('user-admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('user-admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{url('user-admin/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{url('user-admin/assets/css/icons.css')}}" rel="stylesheet">
	<title>User Admin | Digi Card</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card my-5 my-lg-0 shadow-none border">
							<div class="card-body">
								<div class="p-4">
									<div class="text-center mb-4">
										<h5 class="">Hello! Admin</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" action="{{url('user-admin/login')}}" method="POST">
                                            @csrf
											<div class="col-12">
												<label for="user_email" class="form-label">Email</label>
												<input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter Email Address" required>
											</div>
											<div class="col-12">
												<label for="user_password" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="user_password" name="user_password" placeholder="Enter Your Password" required> 
													<a href="javascript:;" class="input-group-text"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center">
													<p class="mb-0">Don't have an account yet? <a href="#">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>
									

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<footer class="bg-body shadow-none border-top p-2 text-center fixed-bottom">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{url('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{url('user-admin/assets/js/jquery.min.js')}}"></script>
	<script src="{{url('user-admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('user-admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('user-admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<script src="assets/js/app.js"></script>
</body>
</html>