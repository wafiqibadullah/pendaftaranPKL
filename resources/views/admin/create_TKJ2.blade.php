@extends('admin/head')

@section('row')



<form action="/admin/SiswaPKL/TKJ2/store" method="post">
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
				            <label>Nama Siswa</label>
				            <select name="calon_id" required class="form-control">
				                <?php foreach ($a as $category): ?>
				                    <option required value="{{ $category->calon_id }}">{{ $category->nama_siswa }}</option>
				                 <?php endforeach ?>
				            </select>
				            <p class="text-danger">* Nama Siswa yang muncul adalah Siswa yang sudah terkonfirmasi menjadi siswa PKL </p>
				        </div>
				          <div class="form-group">
				            <label>Nama Pembimbing PKL</label>
				            <select name="pembimbing_id" required class="form-control">
				                <?php foreach ($pembimbing as $category): ?>
				                    <option required value="{{ $category->id }}">{{ $category->nama_pembimbing }}</option>
				                 <?php endforeach ?>
				            </select>
				        </div>
				          <div class="form-group">
				            <label>Nama Pembimbing Karya Tulis</label>
				            <select name="tulis_id" required class="form-control">
				                <?php foreach ($karya_tulis as $category): ?>
				                    <option required value="{{ $category->id }}">{{ $category->nama_pembimbing_karya }}</option>
				                 <?php endforeach ?>
				            </select>
				        </div>
					
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
	
@include('admin/footer')
@endsection