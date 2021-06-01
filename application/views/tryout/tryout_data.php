<!-- Content Header (Page header) -->
<section class="content-header">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tryout Event</li>
		</ol>
	</nav>
</section>

<!-- Main content -->
<section class="content">
<?php $this->view('messages') ?>
	<div class="card">
	<div class="card-header">
			<h2 class="card-title"><strong>Tryout Event</strong></h2>
			<div class="float-right">
				<a href="<?= base_url('tryout/add') ?>" class="btn btn-primary">
					<i class="fa fa-plus"></i> Create
				</a>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table class="table table-bordered table-striped mt-3" id="table-tryout">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Tryout Type</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Berakhir</th>
						<th>Price</th>
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

$("#table-tryout").DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax"  : {
            "url" : "<?= site_url('tryout/get_json')?>",
            "type" : "POST"
        },
        "columns" : [
            {"data" : "no", width:40},
            {"data" : "name", width:150},
            {"data" : "tryout_type", width:70},
            {"data" : "start_date", width:120},
            {"data" : "end_date", width:150},
            {"data" : "price", width:100},
            {"data" : "action", width:100},
        ]
    })
</script>