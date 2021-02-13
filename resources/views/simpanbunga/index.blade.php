@extends('welcome')
@section('content')
<head>
      <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
      <div class="main">
        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              <div class="panel">

                <form action="/simpanbunga" method="get">
                <div class="panel-body">
		              <table class="table table-hover">
			              <thead>
                      <div class="form-group">
                        <label for="periode_id">Periode</label>
                          <select class="form-control" id="periode_id" name="periode_id">
                              <option value="" selected disable>Pilih Periode</option>
                              @foreach ($periode as $p)
                              <option value= "{{$p->id}}">
                                  {{$p->periode}}
                              </option>
                              @endforeach
                          </select>    
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                      </div>
                    </thead>
                  </table>
                </div>
                </form> 

      @if($simpananBunga)
      <table class="table table-hover">
				<thead>
						<tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Anggota</th>
            <th>Periode</th>
            <th>Tanggal Proses</th>
            <th>Nominal Bunga</th>
						</tr>
				</thead>
				<tbody>
            @foreach($simpananBunga as $key => $simpanbunga)
            <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{$simpanbunga->anggota['id']}}</td>
            <td>{{$simpanbunga->anggota['nama']}}</td>
            <td>{{$simpanbunga->periode['periode']}}</td>
            <td>{{$simpanbunga->tanggal_proses}}</td>
            <td>Rp. {{$simpanbunga->nominal_bunga}}</td>
            </tr>
            @endforeach
				</tbody>
			</table>
    @endif
@stop







       

