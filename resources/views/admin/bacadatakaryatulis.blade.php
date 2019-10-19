@extends('admin/head')

@section('row')

@if ($a->count() != 0)
@if ($posts->count() > 0)


<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				
			</div>
	
			<h2 class="panel-title">Data Pembimbing Karya Tulis</h2>
		</header>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-9">
					<div class="mb-md">
						<a href="{{ route('admin.createkaryatulis') }}" id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
					</div>
					</div>
				<div class="col-md-3">
					<label>
					<form action="{{ url()->current() }}">
						
					<div class="input-group mb-md">
									<input class="form-control" type="text" placeholder="Search" name="search">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"> </button>
									</span>
								</div>
					
				
					</label>
					</form>
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
				
			<?php 
			       $no= $posts ->firstItem() - 0 ;; 
			       foreach ($posts as $siswa ):
			        ?> 
			       <tr>
  <tr>
<td><?php echo "$no";  ?> </td>
<td>{{ $siswa->nip }}</td>
<td>{{ $siswa->nama_pembimbing_karya }}</td>
<td>{{ $siswa->jk }}</td>
<td>{{ $siswa->alamat_pembimbing }}</td>
<td>{{ $siswa->nope }}</td>

<td>   {{ $siswa->tempat_lahir }} , {{ $siswa->tgl_lahir }}</td>


<td class="actions">
<form action="{{ route('admin.destroyedd', $siswa ) }}" method="post" class="">
{{ csrf_field() }}
			                  {{ method_field('DELETE') }}
			                  <a href="{{ route('admin.editkaryatulis', $siswa ) }}" class="on-default edit-row" ><i class="fa fa-pencil"></i> </a>
			                  <button class="on-default remove-row"  onclick="return confirm('Anda yakin?')"><i class="fa fa-trash-o"></i></button>
			              </form>
</tr>
<?php  $no++; ?>
<?php endforeach ?>


</table>
<p></p>
<div class="col-md-6">
{{ $posts->render() }}
</div>
	@else
			<div class="container">
				<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<strong>Oh Nooo!</strong> Tidak ada data yang sesuai
				<a href="{{ route('admin.bacadatakaryatulis') }}" class="btn btn-success btn-xs">Back</a>
			</div>
				
			

			@endif
</div>
@elseif ($a->count() == 0 )
		
<section class="panel">
	<header class="panel-heading">
		<div class="panel-actions">
			<a href="#" class="fa fa-caret-down"></a>
			
		</div>

		<h2 class="panel-title">Data Pembimbing Karya Tulis</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-9">
				<div class="mb-md">
					<a href="{{ route('admin.createkaryatulis') }}" id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
				</div>
				</div>
			<div class="col-md-3">
				
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

@endif
								       
									


							</div>
							</div>

						</section> 








@include('admin/footer')
@endsection