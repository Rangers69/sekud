<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Add School</li>
		</ol>
	</nav>
</section>

<!-- Main Content -->
<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Add School</h3>
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
						<div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
							<label for="">Name <span style="color:red">*</span></label>
							<input type="text" name="name" value="<?= set_value('name'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('name'); ?></span>   
						</div>
                        <div class="form-group <?= form_error('type') ? 'has-error' : null ?>">
							<label for="">Type <span style="color:red">*</span></label>
							<input type="text" name="type" value="<?= set_value('type'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('type'); ?></span>   
						</div>
                        <div class="form-group <?= form_error('status') ? 'has-error' : null ?>">
							<label for="">Status <span style="color:red">*</span></label>
							<input type="text" name="status" value="<?= set_value('status'); ?>" class="form-control">
						    <span class="help-block text-danger"><?php echo form_error('status'); ?></span>   
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
