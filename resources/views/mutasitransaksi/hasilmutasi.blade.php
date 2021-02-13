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
                  <h3 class="panel-title">History Transaksi</h3>
              <div class="panel-body">
         <table class="table table-hover">
          <thead>
           <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama Anggota</th>
                        <th>No Rekening</th>
                        <th>Tanggal</th>
                        <th>Jenis Transaksi</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                        
           </tr>
          </thead>
          <tbody>
                        
                        @foreach($datas as $key => $data)
                        <tr>
                            <td>{{  $key+1 }}</td>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->anggota_id }}</td>
                            <td>{{ $data->tanggal_trx }}</td>
                            <td>{{ $data->transaksi }}</td>
                            <td>Rp. {{$data->nominal}}</td>
                            <td>{{ $data->keterangan }}</td> 
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
      </div>   
</html>