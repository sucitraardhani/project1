<html>
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
                  <h3 class="panel-title">Data Simpanan Anggota</h3>
                  <div class="right">

<form action="/simpanbunga" method="get">
{{csrf_field()}}  
    
			    div class="panel-heading">
                  <center><h3>List Bunga Simpanan Anggota</h3><center>
				</div>
				<div class="panel-body">
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
            @foreach($simpan_bunga as $simpanbunga)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$simpanbunga->anggota ['id']}}</td>
            <td>{{$simpanbunga->anggota ['nama']}}</td>
            <td>{{$simpanbunga->periode['periode']}}</td>
            <td>{{$simpanbunga->tanggal_proses}}</td>
            <td>Rp. {{$simpanbunga->nominal_bunga}}</td>
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
</html>
