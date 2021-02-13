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
				<h3 class="panel-title">Edit Data</h3>
				</div>
				<div class="panel-body">
                
                <form action="/anggota/{{$anggota->id}}/update" method="POST">
                        {{csrf_field()}}
                    <div class="form-group">
                        <label for="nama_lengkapp">Nama Lengkap</label>
                        <input name="nama" type="label" class="form-control" id="nama_lengkapp" placeholder="Masukan Nama Lengkap Anda" value="{{$anggota->nama_lengkap}}" required> 
                        <div class="form-group">
                    </div>

                     <div class="form-group">
                        <label for="no_hp">No HandPhone</label>
                        <input name="telepon" type="tel" class="form-control" id="no_hp" placeholder="Masukan No HandPhone Anda" maxlength="13" value="{{$anggota->no_hp}}" required>
                        <div class="form-group">
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$anggota->alamat}}" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
                        <option @if($anggota->status =='Aktif')selected @endif>Aktif</option>
                        <option @if($anggota->status =='Tidak Aktif')selected @endif>Tidak Aktif</option>
                    </select>
                    </div>
                    </div>

                <button type="submit" class="btn btn-primary">Update</button>
                
                </form>
                </div>
                </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
				</div>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </html>
 

