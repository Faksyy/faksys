@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Siswa
			<div class="panel-title pull-right">	
			<a href="{{ URL::previous() }}">Kembali</a>
				
			</div>
		</div>

		<div class="form-group">
					<label class="control-lable">Nama </label>
					<input type="text" name="a" value="{{$siswas->nama}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
						<label class="control-lable">Nama Orang Tua</label>
						<input type="text" name="b" value="{{$siswas->orangtua->nama_ayah}} dan {{$siswas->orangtua->nama_ibu}}" class="form-control" readonly="">
					</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="text" name="c" value="{{$siswas->umur}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="text" name="d" value="{{$siswas->jk}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea cols="form-control"  rows="10" name="e" readonly="">{{$siswas->alamat}}</textarea>
				</div>
				</div>
				
			</form>
		</div>
		
	</div>
</div>
@endsection