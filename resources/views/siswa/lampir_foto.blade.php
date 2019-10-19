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

<form action="{{ route('siswa.foto') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}





		<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
										</div>
										<h2 class="panel-title">Melampirkan Bukti Penerimaan PKL</h2>
								</header>
								<div class="panel-body">
							
					 <div class="form-group">
				            <label>Nama Siswa</label>
				            <input type="text" class="form-control" readonly value="<?php echo  Auth::user()->nama_siswa ; ?>" name="">

				        </div>

				    <?php foreach ($a as $cek): ?>
				         <div class="form-group">
				            <label>Pendaftaran ID</label>
				            <input type="text" class="form-control" readonly value="{{ $cek->id }}" name="daftar_id">
					<?php endforeach ?>

					 <div class="form-group">
				            <label>Bukti Penerimaan PKL</label>
				            <input type="file" class="form-control" required name="foto">

				        </div>
					
					
					
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
	
@include('siswa/footer')
@endsection