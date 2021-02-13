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
                  <h3 class="panel-title">Data Anggota</h3>
                  <div class="right">
                  <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
            + data
            </button>
                    
                  </div>
					</div>
                    <table class="table table-hover">
            <tr>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>No Handphone</th>
				<th>Status</th>
                <th>Aksi</th>
            </tr>
			@foreach($data_anggota as $tb_anggota)
            <tr>
                <td>{{$tb_anggota->nama}}</td>
                <td>{{$tb_anggota->alamat}}</td>
                <td>{{$tb_anggota->telepon}}</td>
				<td>{{$tb_anggota->status}}</td>
                <td><a href="/anggota/{{$tb_anggota->id}}/edit  "  class="btn btn-primary"  >Edit</a></td>
                <td><a href="/anggota/{{$tb_anggota->id}}/delete  " class="btn btn-warning" class="btn btn-danger btn-xs" onClick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a></td>
            </tr>
            @endforeach
            </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
				</div>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                    <form action="/anggota/create" method="POST">
                        {{csrf_field()}}
                    <div class="form-group">
                        <label for="nama_lengkapp">Nama Lengkap</label>
                        <input name="nama" type="label" class="form-control" id="nama_lengkapp" placeholder="Masukan Nama Lengkap Anda" required> 
                        <div class="form-group">
                </div>
                 <div class="form-group">
                        <label for="no_hp">No HandPhone</label>
                        <input name="telepon" type="tel" class="form-control" id="no_hp" placeholder="Masukan No HandPhone Anda" maxlength="13" required>
                        <div class="form-group">
                </div>
                <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder ="Masukan Alamat Anda" required></textarea>
                </div>
				<div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="status">
                    <option >Aktif</option>
                    <option >Tidak Aktif</option>
                </select>
                 </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
     
                </div>
                </div>
            </div>
            </div>
@endsection





       

