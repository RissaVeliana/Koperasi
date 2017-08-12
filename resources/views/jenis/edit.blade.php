@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
	<center><h1>Data Jenis Barang</h1><br></center>
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
		<div class="panel-heading"> Data Jenis Barang 
		<div class="panel-title pull-right">
		<a href="{{URL::previous()}} ">Kembali</a></div></div>

			<div class="panel-body">
				<form action="{{route('jenis.update', $jenis->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				

				<div class="form-group">
					<label class="control-lable">Jenis Barang</label>
					<input type="text" name="jenis" class="form-control" value="{{$jenis->jenis}} " required>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>


				</form>
				</div>
		</div>
	</div>
@endsection