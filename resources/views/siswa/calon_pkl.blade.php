@extends('siswa/header')

@section('row')

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
		
				<h2 class="panel-title">Data Calon PKL</h2>
			</header>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-10">
						
					</div>
					
				</div>
				<div class="table-responsive">
				<table class="table table-bordered table-striped mb-none" id="datatable-editable">
					<thead>
						<tr>
							<th>No</th>
							<th class="col-md-1">Nis</th>
							<th class="col-md-2">Nama Siswa </th>
							<th class="col=md-2">Kelas</th>
							<th class="col-md-2">Nama Perusahaan</th>
							<th class="col-md-2">Alamat</th>
							<th class="col-md-2">Status</th>
							<th class="col-md-1">Opsi</th>
						
						</tr>
					</thead>
					<tbody>

					 
				</tr>
					<?php if ($a->count() == 0): ?>
					<td colspan="12" align="center">Table Empty , Anda Belum Mendaftar</td>
					<?php endif ?>
					 <?php 
				      
					  $no = 1;
				       foreach ($a as $siswa ):
				        ?> 
				       <tr>
				           <td><?php echo "$no";  ?> </td>
				           <td>{{ $siswa->nis }}</td>
						   <td>{{ $siswa->nama_siswa }}</td>
						   <td>{{ $siswa->nama_kelas }}</td>
						   <td>{{ $siswa->nama_perusahaan }}</td>
						   <td>{{ $siswa->alamat_perusahaan }}</td>
						   <td> <?php foreach ($b as $siswa): ?>
						      <?php if ($siswa->status == 'calon'): ?>         
			           		
			           			<center><button class="btn btn-danger btn-xs">Belum Terkonfirmasi</button></center>
			           		
			           	<?php else: ?>
			           		<center><button class="btn btn-success btn-xs">Accepted</button></center>
			           		
			           	   <?php endif ?>
			           	   <?php endforeach ?>
			           </td>		  
						   
						   <td>
						   <a href="/siswa/lampir_foto" class="btn btn-success btn-xs" >Lampirkan Bukti </a>
				           </td>
				       <!--  -->
				       </tr>
				       <?php  $no++; ?>
				       <?php endforeach ?>

							
					
					</table>
	<p></p>
			<p class="text-danger">* Silahkan Melampirkan Bukti Penerimaan PKL dapat berupa Foto maupun Pdf.
			<br class="text-danger">* Status akan kosong jika anda belum melampirkan bukti.	
			</div>


		</section> 




@include('siswa/footer')
@endsection