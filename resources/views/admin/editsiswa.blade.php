@extends('admin/head')

@section('row')

<h3><span class="glyphicon glyphicon-user"></span>      Edit Data Siswa</h3>
<br>
<!-- <a class="btn" href="bacadatasiswa.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
 -->				
	<form class="" action="{{ route('pembimbing.updated', $siswa) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
		<table class="table">
			
			<tr>
				<td>Nis</td>
				<td><input required type="text" class="form-control" name="nis" value="{{ $siswa->nis }}"></td>
			</tr>
			<tr>
				<td>Password Baru</td>
				<td><input required type="password" class="form-control" name="password" value="{{ $siswa->password }}"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input required type="text" class="form-control" name="nama_siswa" value="{{ $siswa->nama_siswa }}"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input required type="text" class="form-control" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select required  name="jk" class="form-control" placeholder="Jenis Kelamin">
								<option value="L">Laki - Laki</option>
								<option value="P">Perempuan</option>
						</select></td>	
			</tr>
			<tr>
				<td>Tanggal lahir</td>
				<td><input type="date" required class="form-control" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" required class="form-control" name="alamat" value="{{ $siswa->alamat }}"></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td><input type="text" required class="form-control" name="nope" value="{{ $siswa->nope }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>

@include('admin/footer')
@endsection