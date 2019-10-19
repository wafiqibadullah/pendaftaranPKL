@extends('admin/head')

@section('row')


@if ($a->count() != 0)
@if ($posts->count() > 0)

<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
					
				</div>
		
				<h2 class="panel-title">Data Siswa</h2>
			</header>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-10">
						<div class="mb-md">
							<a href="{{ route('admin.create') }}" id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
						</div>
						</div>
					<div class="col-md-2">
						<label>
						<form action="{{ url()->current() }}">
							
						<div class="input-group mb-md">
								<input class="form-control" type="text" placeholder="Search" name="search">
								<span class="input-group-btn">
									<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"> </button>
								</span>
							</div>
						</form>
					
						</label>
					</div>
					
				</div>
				<div class="table-responsive">
				<table class="table table-bordered table-striped mb-none" id="datatable-editable">
					<thead>
						<tr>
							<th>No</th>
							<th>Nis</th>
							<th>Password</th>
							<th>Nama </th>
							<th>Jenis Kelamin</th>
							<th>Tempat, Tanggal Lahir</th>
							<th>Alamat</th>
							<th>No Telp</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>

					 
				 <?php 
			        $no = $posts->firstItem() - 0 ; ; 
			       foreach ($posts as $siswa ):
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
			           
			           <td>
				              <form action="{{ route('pembimbing.destroy', $siswa ) }}" method="post" class="">
				                  {{ csrf_field() }}
				                  {{ method_field('DELETE') }}
				                  <a href="{{ route('siswa.editsiswa', $siswa ) }}" class="on-default edit-row" ><i class="fa fa-pencil"></i> </a>
				                  <button class="on-default btn btn-xs" onclick="return confirm('Anda yakin?')"><i class="fa fa-trash-o"></i></button>
				              </form>
			       </tr>
			       <?php  $no++; ?>
			       <?php endforeach ?>
							
					
					</table>
						<p></p>
									
			<div class="col-md-6">
				{{ $posts->render() }}
			</div>
		
		

			</div>

			@else
			<div class="container">
				<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<strong>Oh Nooo!</strong> Tidak ada data yang sesuai
				<a href="{{ route('admin.bacadatasiswa') }}" class="btn btn-success btn-xs">Back</a>
			</div>
				
			

			@endif
					
</div>
			</div>
			</div>

		</section> 

@elseif ($a->count() == 0 )
<section class="panel">
<header class="panel-heading">
	<div class="panel-actions">
		<a href="#" class="fa fa-caret-down"></a>
		
	</div>

	<h2 class="panel-title">Data Siswa</h2>
</header>
<div class="panel-body">
	<div class="row">
		<div class="col-md-10">
			<div class="mb-md">
				<a href="{{ route('admin.create') }}" id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
			</div>
			</div>
		<div class="col-md-2">
					</div>
		
	</div>
	<div class="table-responsive">
	<table class="table table-bordered table-striped mb-none" id="datatable-editable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nis</th>
				<th>Password</th>
				<th>Nama </th>
				<th>Jenis Kelamin</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>Alamat</th>
				<th>No Telp</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<td colspan="12" align="center">Table Empty</td>
		 

       </tr>
     
		</table>


		@endif


			

@endsection