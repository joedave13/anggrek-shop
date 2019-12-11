<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
						</div>
						<form class="user" action="" method="post">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="name" name="name"
									placeholder="Full Name" value="<?= set_value('name'); ?>">
								<?php echo form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="email" name="email"
									placeholder="Email Address" value="<?= set_value('email'); ?>">
								<?php echo form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-user" id="password1"
									name="password1" placeholder="Password">
								<?php echo form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-user" id="password2"
									name="password2" placeholder="Confirm Password">
								<?php echo form_error('password2', '<small class="text-danger pl-2">', '</small>'); ?>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Register Account
							</button>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="forgot-password.html">Forgot Password?</a>
						</div>
						<div class="text-center">
							<a class="small" href="<?= base_url('admin/auth/index'); ?>">Already have an account?
								Login!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
