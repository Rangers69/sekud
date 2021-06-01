<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Users</li>
		</ol>
	</nav>
</section>

<!-- Main content -->
<section class="content">
<?php $this->view('messages') ?>
	<div class="card">
	<div class="card-header">
			<h2 class="card-title"><strong>Users</strong></h2>
			<div class="float-right">
				<a href="<?= base_url('user/add') ?>" class="btn btn-primary">
					<i class="fa fa-plus"></i> Create
				</a>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table class="table table-bordered table-striped mt-3" id="table-user">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Phone</th>
						<th>WA</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</div><!-- /.container-fluid -->
</section>

<script Type="text/javascript">
    $("#table-user").DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax"  : {
            "url" : "<?= site_url('user/get_json')?>",
            "type" : "POST"
        },
        "columns" : [
            {"data" : "no", width:40},
            {"data" : "name", width:150},
            {"data" : "email", width:70},
            {"data" : "phone", width:120},
            {"data" : "wa", width:150},
            {"data" : "action", width:100},
        ]
    })
</script>