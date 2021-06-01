<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Add Package</li>
		</ol>
	</nav>
</section>

<!-- Main Content -->
<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Add Package</h3>
			<div class="float-right">
				<a href="<?= base_url('Package') ?>" class="btn btn-warning">
					<i class="fa fa-undo"></i> Back
				</a>
			</div>
		</div>
		<div class="card-body">
			<div class="row justify-content-around">
				<div class="col-md-5 col-md-offset-4">
					<form action="" method="post">
                    <div class="form-group <?= form_error('id') ? 'has-error' : null ?>">
							<label for="">Id <span style="color:red">*</span></label>
							<input type="text" name="id" value="<?= set_value('id'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('id'); ?></span>   
						</div>
						<div class="form-group <?= form_error('tryoutId') ? 'has-error' : null ?>">
							<label for="">Tryout Id <span style="color:red">*</span></label>
							<input type="text" name="tryoutId" value="<?= set_value('tryoutId'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('tryoutId'); ?></span>   
						</div>
                        <div class="form-group <?= form_error('packageID') ? 'has-error' : null ?>">
							<label for="">Package Id <span style="color:red">*</span></label>
							<input type="text" name="packageID" value="<?= set_value('packageID'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('packageID'); ?></span>   
						</div>
                        <div class="form-group <?= form_error('status') ? 'has-error' : null ?>">
							<label for="">Status <span style="color:red">*</span></label>
							<input type="text" name="status" value="<?= set_value('status'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('status'); ?></span>   
						</div>
                        <div class="form-group <?= form_error('creator') ? 'has-error' : null ?>">
							<label for="">Creator <span style="color:red">*</span></label>
							<input type="text" name="creator" value="<?= set_value('creator'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('creator'); ?></span>   
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
