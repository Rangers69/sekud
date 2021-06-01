<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Edit Tryout</li>
		</ol>
	</nav>
</section>

<!-- Main Content -->
<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Edit Tryout</h3>
			<div class="float-right">
				<a href="<?= base_url('tryout') ?>" class="btn btn-warning">
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
						<div class="form-group <?= form_error('typeId') ? 'has-error' : null ?>">
							<label for="">Tryout Id <span style="color:red">*</span></label>
							<input type="text" name="typeId" value="<?= $this->input->post('typeId') ?? $row->tryout_type_id ?>" class="form-control">
							<span class="help-block text-danger"><?php echo form_error('typeId'); ?></span>
						</div>
						<div class="form-group <?= form_error('type') ? 'has-error' : null ?>">
							<label for="">Tryout Type <span style="color:red">*</span></label>
							<input type="text" name="type" value="<?= $this->input->post('type') ?? $row->tryout_type ?>" class="form-control">
							<span class="help-block text-danger"><?php echo form_error('type'); ?></span>
						</div>
						<div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
							<label for="">Judul <span style="color:red">*</span></label>
							<input type="text" name="name" value="<?= $this->input->post('name') ?? $row->name ?>" class="form-control">
							<span class="help-block text-danger"><?php echo form_error('name'); ?></span>
						</div>
						<div class="form-group <?= form_error('startDate') ? 'has-error' : null ?>">
							<label for="">Tanggal Mulai <span style="color:red">*</span></label>
							<input type="date" name="startDate" value="<?= $this->input->post('startDate') ?? $row->start_date ?>"
								class="form-control">
							<span class="help-block text-danger"><?php echo form_error('startDate'); ?></span>
						</div>
						<div class="form-group <?= form_error('endDate') ? 'has-error' : null ?>">
							<label for="">Tanggal Berakhir <span style="color:red">*</span></label>
							<input type="date" name="endDate" value="<?= $this->input->post('endDate') ?? $row->end_date ?>" class="form-control">
							<span class="help-block text-danger"><?php echo form_error('endDate'); ?></span>
						</div>
						<div class="form-group <?= form_error('provider') ? 'has-error' : null ?>">
							<label for="">Provider <span style="color:red">*</span></label>
							<input type="text" name="provider" value="<?= $this->input->post('provider') ?? $row->provider ?>"
								class="form-control">
							<span class="help-block text-danger"><?php echo form_error('provider'); ?></span>
						</div>
						<div class="form-group <?= form_error('price') ? 'has-error' : null ?>">
							<label for="">Harga <span style="color:red">*</span></label>
							<input type="text" name="price" value="<?= $this->input->post('price') ?? $row->price ?>" class="form-control">
							<span class="help-block text-danger"><?php echo form_error('price'); ?></span>
						</div>
						<div class="form-group <?= form_error('status') ? 'has-error' : null ?>">
							<label for="">Status <span style="color:red">*</span></label>
							<input type="text" name="status" value="<?= $this->input->post('status') ?? $row->status ?>" class="form-control">
							<span class="help-block text-danger"><?php echo form_error('status'); ?></span>
						</div>
						<div class="form-group <?= form_error('creator') ? 'has-error' : null ?>">
							<label for="">Creator <span style="color:red">*</span></label>
							<input type="text" name="creator" value="<?= $this->input->post('creator') ?? $row->creator ?>" class="form-control">
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
