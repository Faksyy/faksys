@extends('layouts.master')
@section('isi')

	@foreach ($ortu as $key ) 
		 {{$key->nama_ayah}} dengan
		 {{$key->nama_ibu}} mempunyai anak
		
		@foreach ($key->siswa as $data ) 
			 <li>{{$data->nama}}</li>
			 @endforeach
			 <hr>
			 @endforeach
		
	

	@endsection