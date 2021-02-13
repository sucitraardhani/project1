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
				<div class="panel-heading">
                  <h3 class="panel-title">Transaksi</h3>
                  <div class="right">
                  </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>No</th>
                        <th>Jenis Transaksi</th>
                        <th>Pengali</th>
                       
											</tr>
										</thead>
										<tbody>
                        @foreach($jenis_transaksi as $jenistransaksi)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$jenistransaksi->transaksi}}</td>
                            <td>{{$jenistransaksi->pengali}}</td>
                            
                        </tr>
                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
@stop





       

