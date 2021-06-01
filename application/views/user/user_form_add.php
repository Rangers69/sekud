<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Add Users</li>
		</ol>
	</nav>
</section>

<!-- Main Content -->
<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Add Users</h3>
			<div class="float-right">
				<a href="<?= base_url('user') ?>" class="btn btn-warning">
					<i class="fa fa-undo"></i> Back
				</a>
			</div>
		</div>
		<div class="card-body">
			<div class="row justify-content-around">
				<div class="col-md-5 col-md-offset-4">
					<form action="" method="post">
						<div class="form-group <?= form_error('email') ? 'has-error' : null ?>">
							<label for="">Email <span style="color:red">*</span></label>
							<input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('email'); ?></span>   
						</div>
						<div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
							<label for="">Name <span style="color:red">*</span></label>
							<input type="text" name="name" value="<?= set_value('name'); ?>" class="form-control">
                            <span class="help-block text-danger"><?php echo form_error('name'); ?></span>  
						</div>
						<div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
							<label for="">Password <span style="color:red">*</span></label>
							<input type="password" name="password" value="<?= set_value('password'); ?>"
								class="form-control">
                                <span class="help-block text-danger"><?php echo form_error('password'); ?></span>  
						</div>
						<div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
							<label for="">Password Confirmation <span style="color:red">*</span></label>
							<input type="password" name="passconf" value="<?= set_value('passconf'); ?>"
								class="form-control">
                                <span class="help-block text-danger"><?php echo form_error('passconf'); ?></span>  
						</div>
						<div class="form-group <?= form_error('phone') ? 'has-error' : null ?>">
							<label for="">Phone</label>
							<input type="number" name="phone" value="<?= set_value('phone'); ?>" class="form-control">
                        </div>
						<div class="form-group <?= form_error('wa') ? 'has-error' : null ?>">
							<label for="">Whatsapp  <span style="color:red">*</span></label>
							<input type="number" name="wa" value="<?= set_value('wa'); ?>" class="form-control">
                            <span class="help-block text-danger"><?php echo form_error('wa'); ?></span>  
                    	</div>
						<div class="form-group <?= form_error('type') ? 'has-error' : null ?>">
							<label for="">Type <span style="color:red">*</span></label>
							<select name="type" class="form-control">
								<option value="">- Pilih -</option>
								<option value="99" <?= set_value('type') == 99 ? "selected" : null ?>>Admin</option>
								<option value="1" <?= set_value('type') == 1 ? "selected" : null ?>>Siswa</option>
								<option value="2" <?= set_value('type') == 2 ? "selected" : null ?>>Tutor</option>
								<option value="3" <?= set_value('type') == 3 ? "selected" : null ?>>Wali Murid</option>
							</select>
                            <span class="help-block text-danger"><?php echo form_error('type'); ?></span>  
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">
								<i class="fas fa-paper-plan"></i>Save
							</button>
							<button type="reset" class="btn btn-secondary">Reset</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</section>
