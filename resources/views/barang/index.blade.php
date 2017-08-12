@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
	<center><h1>Data Barang</h1><br></center>
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading"> Barang
		<div class="panel-title pull-right">
			</div></div>
			<div class="panel-body">
				<table class="table">
				<a class="btn btn-info" href="{{route('barang.create')}}">Tambah Data</a>
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Barang</th>
							<th>Merk Barang</th>
							<th>Stock Barang</th>
							<th>Harga Asli</th>
							<th>Harga Jual</th>
							
							<th colspan="2">Action</th>
							
						</tr>
					</thead>

					<tbody>
					<?php $no=1; ?>
					@foreach($barang as $data)
						<tr>
							<td>{{$no++}} </td>
							<td>{{$data->jenis}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->stock}}</td>
							<td>{{$data->harga_asli}}</td>
							<td>{{$data->harga_jual}}</td>
							
							<td>
								<a class="btn btn-warning" href="/admin/barang/{{$data->id}}/edit">Edit</a></td>
								<td><form action="{{route('barang.destroy', $data->id)}}" method="post">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<input type="submit" class="btn btn-danger" value="delete">
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
	</div>
</div>
@endsection