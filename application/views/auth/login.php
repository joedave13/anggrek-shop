<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
								</div>
								<?= $this->session->flashdata('message'); ?>
								<form class="user" method="post" action="">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="email"
											name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
										<?php echo form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="password"
											name="password" placeholder="Password">
										<?php echo form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="forgot-password.html">Forgot Password?</a>
								</div>
								<div class="text-center">
									<a class="small" href="<?= base_url('admin/auth/register'); ?>">Create an
										Account!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>
