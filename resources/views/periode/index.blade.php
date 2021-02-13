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
                  <h3 class="panel-title">Periode Bunga</h3>
                  <div class="right">
                  <div class="right">
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal"> + data
                    </button>
                  </div>
						</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>No</th>
                        <th>Periode</th>
                        <th>Presentase</th>
                        <th>Status Proses</th>
                        <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                        @foreach($periode as $periode)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$periode->periode}}</td>
                            <td>{{$periode->persentase}}</td>
                            <td>{{$periode-> status_proses }}</td> 
                            <td><a href="/periode/{{$periode->id}}/edit"  class="btn btn-primary"  >Edit</a></td>
                            <td><a href="/periode/{{$periode->id}}/delete" class="btn btn-warning" class="btn btn-danger btn-xs" onClick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a></td>
                            </td>
                        </tr>
                        @endforeach
										</body>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Masukkan data periode bunga</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">

<form action="/periode/create" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Periode Bunga</label>
    <input name="periode" type="month" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="no_hp">Persentase</label>
    <input name="persentase" type="tel" class="form-control" id="persentase" placeholder="Masukan Persentase" maxlength="13" required>
    <div class="form-group">
    </div>

  <div class="form-group">
    <label for="status_proses">Status</label>
    <select name="status_proses" class="form-control" id="status_proses">
    <option >Sudah Diproses</option>
    <option >Belum Diproses</option>
                </select>
                 </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
                </div>
            </div>
      </div>
@stop





       

