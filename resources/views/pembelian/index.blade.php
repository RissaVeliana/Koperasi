@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
	<center><h1>Transaksi Pembelian</h1><br></center>
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading"> 
		<div class="panel-title pull-right">
			</div></div>
			<div class="panel-body">
				<table class="table">
				<a class="btn btn-info" href="{{route('pembelian.create')}}">Tambah Pembelian</a>
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Supplier</th>
							<th>Jenis Barang</th>
							<th>Merk Barang</th>
							<th>Jumlah</th>
							<th>Total Harga</th>
							<th>Tanggal Pembelian</th>
							<th colspan="2">Action</th>
							
						</tr>
					</thead>

					<tbody>
					<?php $no=1 ?>

					@foreach($pembelian as $data)
						<tr>
							<?php 
							$jml=$data->jumlah;
							$hrg=$data->harga_asli;
							$t= $jml * $hrg;

							?>
							<td>{{$no++}}</td>
							<td>{{$data->nama_supplier}}</td>
							<td>{{$data->jenis}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->jumlah}}</td>
							<td><?php echo "Rp. ".$t?></td>
							<td>{{$data->tgl_pembelian}}</td>

							<td>
								<a class="btn btn-warning" href="/admin/pembelian/{{$data->id}}/edit">Edit</a></td>
								<td><form action="{{route('pembelian.destroy', $data->id)}}" method="post">
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