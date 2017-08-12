@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
	<center><h1>Data Jenis Barang</h1><br></center>
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading"> Jenis Barang
		<div class="panel-title pull-right">
			</div></div>
			<div class="panel-body">
				<table class="table">
				<a class="btn btn-info" href="{{route('jenis.create')}}">Tambah Data</a>
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Barang</th>
							<th colspan="2">Action</th>
							
						</tr>
					</thead>

					<tbody>
					<?php $no=1; ?>
					@foreach($jenis as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->jenis}}</td>
							<td>
								<a class="btn btn-warning" href="/admin/jenis/{{$data->id}}/edit">Edit</a></td>
								<td><form action="{{route('jenis.destroy', $data->id)}}" method="post">
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