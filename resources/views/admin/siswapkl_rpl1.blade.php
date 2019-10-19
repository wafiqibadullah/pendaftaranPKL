@extends('admin/head')

@section('row')



<?php $jml = count($posts) ?>
<?php if (count($posts)>0): ?>
	

<?php if ($message = Session::get('success')): ?>
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<strong>{{ $message }}</strong>
	</div>
<?php endif ?>


<?php if ($message = Session::get('error')): ?>
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<strong>{{ $message }}</strong>
	</div>
<?php endif ?>

<section class="panel">
		<header class="panel-heading">
					<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
						
								<h2 class="panel-title">Data Siswa PKL XI RPL 1</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-9">
										<div class="mb-md">
											<a href="/admin/SiswaPKL/RPL1/create" id="addToTable" class="btn btn-primary">Pembagian Pembimbing PKL <i class="fa fa-plus"></i></a>
										</div>
										</div>
									<div class="col-md-3">
										<!-- <label>
										<form action="{{ url()->current() }}" >
										
										<div class="input-group mb-md">
														<input class="form-control" type="text" placeholder="Search" name="search">
														<span class="input-group-btn">
															<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"> </button>
														</span>
													</div>
										
									
										</label>
										</form> -->
									</div>
									
								</div>
								<div class="table-responsive">
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Siswa</th>
											<th>Nama Pembimbing PKL </th>
											<th>Nama Pembimbing Karya Tulis</th>
											<th>Nama Perusahaan</th>
											<th>Opsi</th>
										</tr>
									</thead>
									<tbody>
											
								<?php 
								    $no = 1 ; ; 
								       foreach ($posts as $siswa ):
								        ?> 
								         <tr>
							           <tr>
							           <td><?php echo "$no";  ?> </td>
							           <td>{{ $siswa->nama_siswa }}</td>
									   <td>{{ $siswa->nama_pembimbing }}</td>
									   <td>{{ $siswa->nama_pembimbing_karya }}</td>
									   <td>{{ $siswa->nama_perusahaan }}</td>
									 
							           
           
            <td class="actions">
		        
       </tr>
       <?php  $no++; ?>
       <?php endforeach ?>
				
		
		</table>
		
			<div class="col-md-6">
				{{ $posts->render() }}
			</div>
		
		
</div>


<?php else: ?>
	
		<section class="panel">
		<header class="panel-heading">
					<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
						
								<h2 class="panel-title">Data Siswa PKL XI RPL 1</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-9">
										<div class="mb-md">
											<a href="/admin/SiswaPKL/RPL1/create" id="addToTable" class="btn btn-primary">Pembagian Pembimbing PKL <i class="fa fa-plus"></i></a>
										</div>
										</div>
									<div class="col-md-3">
									<!-- 	<label>
										<form action="{{ url()->current() }}" >
										
										<div class="input-group mb-md">
														<input class="form-control" type="text" placeholder="Search" name="search">
														<span class="input-group-btn">
															<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"> </button>
														</span>
													</div>
										
									
										</label>
										</form> -->
									</div>
									
								</div>
								<div class="table-responsive">
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>No</th>
											<th>Nip</th>
											<th>Nama </th>
											<th>Jenis Kelamin</th>
											<th>Alamat</th>
											<th>No Telp</th>	
											<th>Tempat, Tanggal Lahir</th>
											<th>Opsi</th>
										</tr>
									</thead>
									<tbody>
											
											<td colspan="12" align="center">Table Empty </td>
										
						
       </tr>
       
				
		
		</table>
		<p></p>
		
<!-- <a href="{{ route('admin.bacadatapembimbinggg') }}" class="btn btn-primary">Back</a> -->
<?php endif ?>
								       
									


							</div>
							</div>

						</section> 


@include('admin/footer')
@endsection