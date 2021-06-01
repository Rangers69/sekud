<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tryout Package</li>
		</ol>
	</nav>
</section>

<!-- Main content -->
<section class="content">
<?php $this->view('messages') ?>
	<div class="card">
	<div class="card-header">
			<h2 class="card-title"><strong>Tryout Package</strong></h2>
			<div class="float-right">
				<a href="<?= base_url('package/add') ?>" class="btn btn-primary">
					<i class="fa fa-plus"></i> Create
				</a>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table class="table table-bordered table-striped mt-3" id="table-package">
				<thead>
					<tr>
						<th>#</th>
						<th>Tryout ID</th>
						<th>Tes Package ID</th>
						<th>Status</th>
						<th>Creator</th>
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

$("#table-package").DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax"  : {
            "url" : "<?= site_url('package/get_json')?>",
            "type" : "POST"
        },
        "columns" : [
            {"data" : "no"},
            {"data" : "tryout_id"},
            {"data" : "test_package_id"},
            {"data" : "status"},
            {"data" : "creator"},
			{"data" : "action", width:100},
        
        ]
    })

</script>