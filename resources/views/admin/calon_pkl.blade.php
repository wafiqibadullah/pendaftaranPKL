@extends('admin/head')

@section('row')


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
							<th>Nis</th>
							<th>Nama Siswa </th>
							<th>Kelas</th>
							<th>Nama Perusahaan</th>
							<th>Alamat</th>
							<th>Status</th>
							<th>action</th>
							<th>Download Bukti</th>

					</tr>
				</thead>
				<tbody>
					<?php if ($calon->count() == 0): ?>
						<td colspan="12" align="center">Table Empty</td>
					<?php endif ?>
				  <?php 

				  $no = 1;
			       foreach ($calon as $siswa ):
			        ?> 
			       <tr>
			           <td><?php echo "$no";  ?> </td>
			           <td>{{ $siswa->nis }}</td>
					   <td>{{ $siswa->nama_siswa }}</td>
					   <td>{{ $siswa->nama_kelas }}</td>
					   <td>{{ $siswa->nama_perusahaan }}</td>
					   <td>{{ $siswa->alamat_perusahaan }}</td>
				
			           <td><?php if ($siswa->status == 'calon'): ?>         
			           		
			           			<center><button class="btn btn-danger btn-xs">Belum Terkonfirmasi</button></center>
			           		
			           	<?php else: ?>
			           		<center><button class="btn btn-success btn-xs">Accepted</button></center>
			           		
			           	   <?php endif ?>
			           	   
			           </td>
			           <td><?php if ($siswa->status == 'calon'): ?>         
			           		<form action="{{ route('admin.calon_confirm', $siswa->calon_id) }}" method="post" enctype="multipart/form-data">
			           			   {{ csrf_field() }}
			    				    {{ method_field('PATCH') }}
			           			<center><button class="btn btn-warning btn-xs" onclick="return confirm('Anda yakin Data PKL Siswa sudah terpenuhi ?')">Konfirmasi</button></center>
			           		</form>
			           	<?php else: ?>
			           		<center>-</center>
			           	   <?php endif ?>

			           	   </td>
			           	   <td> <center> <a href="{{ route('download',$siswa->foto) }}" class="btn btn-success btn-xs"><i class="fa fa-download"></i></a></center></td>
				       <!--  -->
			       </tr>
							 
			       <?php  $no++; ?>
			       <?php endforeach ?>
					
					
				</tbody>

			</table>
			<p></p>
			<p class="text-danger">* Data yang muncul adalah apabila calon pkl yang bersangkutan sudah Meng-upload Foto Surat bukti penerimaan PKL
<div class="col-md-6">
{{ $calon->render() }}
</div>
		</div>
		</div>

	</section> 
		

		

@endsection