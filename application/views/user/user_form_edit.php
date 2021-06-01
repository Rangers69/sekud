<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Edit Users</li>
		</ol>
	</nav>
</section>

<!-- Main Content -->
<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Edit Users</h3>
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
                        <div>
							<input type="hidden" name="id" value="<?= $row->id ?>" class="form-control">
						</div>
						<div class="form-group <?= form_error('email') ? 'has-error' : null ?>">
							<label for="">Email <span style="color:red">*</span></label>
							<input type="text" name="email" value="<?= $this->input->post('email') ?? $row->email ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('email'); ?></span>   
						</div>
						<div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
							<label for="">Name <span style="color:red">*</span></label>
							<input type="text" name="name" value="<?= $this->input->post('name') ?? $row->name ?>" class="form-control">
                            <span class="help-block text-danger"><?php echo form_error('name'); ?></span>  
						</div>
						<div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
							<label for="">Password</label>  <small>(Biarkan kosong jika tidak diganti)</small>
							<input type="password" name="password" value="<?= $this->input->post('password')?>"
								class="form-control">
                                <span class="help-block text-danger"><?php echo form_error('password'); ?></span>  
						</div>
						<div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
							<label for="">Password Confirmation</label>
							<input type="password" name="passconf" value="<?= $this->input->post('passconf')?>"
								class="form-control">
                                <span class="help-block text-danger"><?php echo form_error('passconf'); ?></span>  
						</div>
						<div class="form-group <?= form_error('phone') ? 'has-error' : null ?>">
							<label for="">Phone</label>
							<input type="text" name="phone" value="<?= $this->input->post('phone') ?? $row->phone ?>" class="form-control">
                        </div>
						<div class="form-group <?= form_error('wa') ? 'has-error' : null ?>">
							<label for="">Whatsapp  <span style="color:red">*</span></label>
							<input type="text" name="wa" value="<?= $this->input->post('wa') ?? $row->wa ?>" class="form-control">
                            <span class="help-block text-danger"><?php echo form_error('wa'); ?></span>  
                    	</div>
						<div class="form-group <?= form_error('type') ? 'has-error' : null ?>">
							<label for="">Type</label>
                            <?php $type = $this->input->post('type') ? $this->input->post('type') : $row->type ?>
							<select name="type" class="form-control">
								<option value="99" <?= $type == 99 ? 'selected' : null ?>>Admin</option>
								<option value="1" <?= $type == 1 ? 'selected' : null ?>>Siswa</option>
								<option value="2" <?= $type == 2 ? 'selected' : null ?>>Tutor</option>
								<option value="3" <?= $type == 3 ? 'selected' : null ?>>Wali Murid</option>
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
