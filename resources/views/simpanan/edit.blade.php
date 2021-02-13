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
						<h3 class="panel-title">Edit Data Simpanan</h3>
							</div>
								<div class="panel-body">
                <form action="/simpanan/{{$simpanan->id}}/update" method="POST">
        {{csrf_field()}}
                <div class="form-group">
                    <label for="anggota_id">Anggota id</label>
                    <select class="form-control" id="anggota_id" name="anggota_id">
                        @foreach ($anggota as $a)
                        <option value="{{$a->id}}" @if ($simpanan->id==$a->id)
                            SELECTED
                            @endif
                            >
                            {{$a->nama}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tanggal_trx">Tanggal Transaksi</label>
                    <input type="date" class="form-control" id="tanggal_trx" placeholder="Masukkan Tanggal Transaksi"
                     name="tanggal_trx" value="{{strftime('%m-%d-%Y', strtotime($simpanan['tanggal_trx']))}}">
                </div>

                <div class="form-group">
                    <label for="jenistrx_id">Jenis Transaksi</label>
                    <select class="form-control" id="jenistrx_id" name="jenistrx_id">
                        @foreach ($jenistrx as $jenis)
                        <option value="{{$jenis->id}}" @if ($simpanan->id==$jenis->id)
                            SELECTED
                            @endif
                            >
                            {{$jenis->transaksi}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input type="text" class="form-control" id="nominal" placeholder="Masukkan Nominal" name="nominal"
                    value="{{$simpanan->nominal}}">
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan"
                    name="keterangan" value="{{$simpanan->keterangan}}">
                </div>


  <button type="submit" class="btn btn-block btn-warning ">Update Data</button>
</form>
				</div>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
</html>
 

