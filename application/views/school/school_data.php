<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">School</li>
		</ol>
	</nav>
</section>

<!-- Main content -->
<section class="content">
<?php $this->view('messages') ?>
	<div class="card">
	<div class="card-header">
			<h2 class="card-title"><strong>School</strong></h2>
			<div class="float-right">
				<a href="<?= base_url('school/add') ?>" class="btn btn-primary">
					<i class="fa fa-plus"></i> Create
				</a>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table class="table table-bordered table-striped mt-3" id="table-school">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Type</th>
						<th>Status</th>
						<th>Address</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				
				</tbody>
			</table>
		</div>
	</div><!-- /.container-fluid -->
</section>

<script type="text/javascript">

    $("#table-school").DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax"  : {
            "url" : "<?= site_url('school/get_json')?>",
            "type" : "POST"
        },
		"fnCreatedRow": function (row, data, index) {
			$('td', row).eq(0).html(index + 1);
			},
        "columns" : [
            {"data" : "no", width:40},
            {"data" : "name", width:150},
            {"data" : "type", width:70},
            {"data" : "status", width:70},
            {"data" : "address", width:70},
            {"data" : "action", width:70},
        ]
    })
</script>