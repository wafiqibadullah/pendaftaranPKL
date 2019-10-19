@include('siswa/header')
	<h3>  Data Calon PKL Siswa</h3>
	
		<!-- <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>  Tambah Data Siswa	</button> -->
				


<br/>
<div class="table-responsive">
<table class="table table-hover">
	<tr class="info">
		<th>No</th>
		<th class="col-md-1">Nis</th>
		<th class="col-md-1">Password</th>
		<th class="col-md-2">Nama </th>
		<th class="col=md-2">Jenis Kelamin</th>
		<th class="col-md-2">Tempat, Tanggal Lahir</th>
		<th class="col-md-2">Alamat</th>
		<th class="col-md-1">No Telp</th>
		<th class="col-md-2">Opsi</th>
	</tr>
	 <?php 
       $no=1; 
       foreach ($siswas as $siswa ):
        ?> 
       <tr>
           <td><?php echo "$no";  ?> </td>
           <td>{{ $siswa->nis }}</td>
		   <td>{{ $siswa->password }}</td>
		   <td>{{ $siswa->nama_siswa }}</td>
		   <td>{{ $siswa->jk }}</td>
		   <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tgl_lahir }}</td>
		   <td>{{ $siswa->alamat }}</td>
		   <td>{{ $siswa->nope }}</td>
           
           
       </tr>
       <?php  $no++; ?>
       <?php endforeach ?>
				
		
		</table>
		</div>

		
@include('admin/footer')