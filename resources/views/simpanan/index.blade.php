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
                  <h3 class="panel-title">Data Simpanan Anggota</h3>
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
                        <th>No Rekening</th>
                        <th>Nama Anggota</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Transaksi</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>                        
                        <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                        @foreach($simpanan as $simpan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$simpan->id}}</td>
                            <td>{{$simpan->anggota['nama']}}</td>
                            <td>{{$simpan->tanggal_trx}}</td>
                            <td>{{$simpan->jenistrx['transaksi']}}</td>
                            <td> Rp. {{$simpan->nominal}}</td>
                            <td>{{$simpan->keterangan}}</td>
                            <td><a href="/simpanan/{{$simpan->id}}/edit"  class="btn btn-primary"  >Edit</a></td>
                            <td><a href="/simpanan/{{$simpan->id}}/delete" class="btn btn-warning" class="btn btn-danger btn-xs" onClick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a></td>
                            </td>
                        </tr>
                        @endforeach
										</tbody>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Masukkan data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">

<form action="/simpanan/create" method="POST">
    {{csrf_field()}}

    {{-- <div class="form-group">
        <label for="anggota_id">No Rekening</label>
        <select class="form-control" id="anggota_id" name="anggota_id">
            <option value="" selected disable>Masukkan No Rekening Anggota</option>
            @foreach ($anggota as $a)
            <option value= "{{$a->id}}">
            {{$a->id}}
            </option>
            @endforeach
            </select>      
    </div> --}}

    <div class="form-group">
        <label for="anggota_id">No Rekening</label>
        <select class="form-control" id="anggota_id" name="anggota_id">
            <option value="" selected disable>Masukkan No Rekening Anggota</option>
            @foreach ($anggota as $a)
            <option value= "{{$a->id}}">
            {{$a->id}}  A/n  {{$a->nama}}
            </option>
            @endforeach
            </select>      
    </div>

    <div class="form-group">
      <label for="tanggal_trx">Tanggal Transaksi</label>
      <input name="tanggal_trx" type="date" class="form-control" id="tanggal_trx" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="jenistrx_id">Jenis Transaksi</label>
        <select class="form-control" id="jenistrx_id" name="jenistrx_id">
            <option value="" selected disable>Pilih Jenis Transaksi</option>
            @foreach ($jenistrx as $j)
            <option value= "{{$j->id}}">
            {{$j->transaksi}}
            </option>
            @endforeach
            </select>      
    </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Nominal</label>
    <input name="nominal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form> 
                </div>
            </div>
      </div>
@stop





       

