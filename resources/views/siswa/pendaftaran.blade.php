@extends('siswa/header')

@section('row')

<form action="{{ route('daftar.store') }}" method="post">
	{{ csrf_field() }}

					
				<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
										</div>
										<h2 class="panel-title">Pendaftaran PKL</h2>
								</header>
								<div class="panel-body">
							
						 <div class="form-group">
				            <label>Nama Siswa</label>
				            <input type="text" class="form-control" readonly value="<?php echo  Auth::user()->nama_siswa ; ?>" name="">

				        </div>
				         <div class="form-group">
				            <label>Siswa ID</label>
				            <input type="text" class="form-control" readonly value="<?php echo  Auth::user()->id ; ?>" name="siswa_id">

				        </div>
				      <div class="form-group">
				            <label>Kelas</label>
				            <select name="kelas_id" class="form-control">
				                <?php foreach ($kelas as $category): ?>
				                    <option required value="{{ $category->id }}">{{ $category->nama_kelas }}</option>
				                 <?php endforeach ?>
				            </select>
				        </div>
					<div class="form-group">
						<label>Nama Perusahaan</label>
						<input name="nama_perusahaan" required type="text" class="form-control" placeholder="Nama Perusahaan ..">
					</div>
					<div class="form-group">
						<label>Alamat Perusahaan</label>
						<input name="alamat_perusahaan" required type="text" class="form-control" placeholder="Alamat Perusahaan ..">
					
					
					
					
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
	
@include('siswa/footer')
@endsection