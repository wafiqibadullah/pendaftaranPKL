@extends('admin/head')

@section('row')
<form action="{{ route('admin.store') }}" method="post">
	{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
										</div>
										<h2 class="panel-title">Tambah Data Siswa</h2>
								</header>
								<div class="panel-body">
									<div class="form-group">
						<label>Nis</label>
						<input name="nis" required type="text" class="form-control" placeholder="Nis ..">
					</div>
						<div class="form-group">
						<label>Password</label>
						<input name="password" required type="password" class="form-control" placeholder="Password ..">
					</div>
						<div class="form-group">
						<label>Nama Siswa</label>
						<input name="nama_siswa" required type="text" class="form-control" placeholder="Nama Siswa ..">
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
						<label>Alamat Siswa</label>
						<textarea name="alamat" required class="form-control" placeholder="Alamat .."></textarea>
					</div>
					<div class="form-group">
						<label>Nomer Telphone</label>
						<input name="nope" type="number" required class="form-control" placeholder="No Telp ..">
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
			
	
								</div>
							</section>
						</div>
					</div>
				</form>
@include('admin/footer')
@endsection