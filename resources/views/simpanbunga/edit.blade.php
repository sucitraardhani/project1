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
                <form action="/simpanbunga/{{$simpan_bunga->id}}/update" method="POST">
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
                    <label for="periode_id">Periode </label>
                    <select class="form-control" id="periode_id" name="periode_id">
                     @foreach ($periode as $p)
                        <option value= "{{$p->id}}"  
                            @if ($b->id==$p->id))
                            SELECTED
                            @endif   
                         >
                        {{$p->periode}}
                        </option>
                    @endforeach
                    </select>      
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

                {{-- <div class="form-group">
                        <label for="tanggal_proses">Tanggal Proses</label>
                        <input type="date" class="form-control" id="tanggal_proses" name="tanggal_proses" 
                        value="{{$b->tanggal_proses}}">
                    </div> --}}
   
                    <div class="form-group">
                        <label for="nominal_bunga">Nominal Bunga</label>
                        <input type="text" class="form-control" id="nominal_bunga"  name="nominal_bunga" 
                        value="{{$b->nominal_bunga}}">
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
@stop

 

