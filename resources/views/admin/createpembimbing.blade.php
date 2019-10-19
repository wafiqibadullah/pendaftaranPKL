@extends('admin/head')

@section('row')

<form action="{{ route('pembimbing.storepembimbing') }}" method="post">
	{{ csrf_field() }}
			

			<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
										</div>
										<h2 class="panel-title">Tambah Pembimbing PKL</h2>
								</header>
								<div class="panel-body">
							<div class="form-group">
						<label>Nip</label>
						<input name="nip" required type="text" class="form-control" placeholder="Nip ..">

					<div class="form-group">
						<label>Nama Pembimbing</label>
						<input name="nama_pembimbing" required type="text" class="form-control" placeholder="Nama Pembimbing ..">
					</div>
					
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select  name="jk" required class="form-control" placeholder="Jenis Kelamin">
								<option>- Jenis Kelamin -</option>
								<option value="L">Laki - Laki</option>
								<option value="P">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label>Alamat Pembimbing</label>
						<textarea name="alamat_pembimbing" required class="form-control" placeholder="Alamat .."></textarea>
					</div>
					<div class="form-group">
						<label>Nomer Telphone</label>
						<input name="nope" type="text" required class="form-control" placeholder="No Telp ..">
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input name="tempat_lahir" required type="text" class="form-control" placeholder="tempat lahir ..">
					</div>
				<div class="form-group">
						<label>Tanggal Lahir</label>
						<input name="tgl_lahir" required type="date" class="form-control" placeholder="Tanggal ..">
					</div>
				
				</div>
					
					
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
	
@include('admin/footer')
@endsection