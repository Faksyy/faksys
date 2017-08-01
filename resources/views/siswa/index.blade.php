@extends('layouts.master')
@section('isi')
   
   <div class="row">
    <center><h1>Data Siswa</h1></center> 
    <div class="panel panel-primary">
    	<div class="panel-heading">Data Siswa
    	<div class="panel-title pull-right"><a href="/siswa/create">
    	Tambah Data</a></div></div>
    	<div class="panel-body">
    	  <table class="table">
    	  	<thead>
    	  		<tr>
                <th>No</th>
    	  			<th>Nama </th>
    	  			<th>Nama OrangTua</th>
    	  			<th>Umur</th>
                    <th>Jenis Kelamin</th>
    	  			<th>Alamat</th>
    	  			<th colspan="3">Action</th>
    	  		</tr>
    	  	</thead>
    	  	<tbody>
            @php $a  = 1; @endphp
    	  		@foreach($siswas as $data)
    	  		<tr>
                <td>{{$a++}}</td>
    	  			<td>{{$data->nama}}</td>
    	  			<td>{{$data->orangtua->nama_ayah}} dan
                        {{$data->orangtua->nama_ibu}} </td>
					<td>{{$data->umur}}</td>
					<td>{{$data->jk}}</td>
					<td>{{$data->alamat}}</td>
					
					<td>
                    
					<a class="btn btn-success" href="/siswa/{{$data->id}}/edit">Edit</a> </td>
                    <td>
                    
                    <a class="btn btn-primary" href="/siswa/{{$data->id}}">Show</a> </td>
					<td>
                    <form action="{{route('siswa.destroy',$data->id)}}" method="post">
						
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token">
						<input type="submit" class="btn btn-danger" value="Delete"></td>
						{{csrf_field()}}

					</form>
						
					</td>
    	  		</tr>
    	  		@endforeach
    	  	</tbody>
    	  </table>
    		
    	</div>
    </div>
    </div>


@endsection