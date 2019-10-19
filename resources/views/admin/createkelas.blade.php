@extends('admin/head')

@section('row')

<form action="{{ route('admin.store_kelas') }}" method="post">
	{{ csrf_field() }}

					
				<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
										</div>
										<h2 class="panel-title">Tambah Kelas</h2>
								</header>
								<div class="panel-body">
									<div class="form-group">
						<label>Nama Kelas</label>
						<input name="nama_kelas" required type="text" class="form-control" placeholder="XI RPL 1..">
				
					
					
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
	
@include('admin/footer')
@endsection