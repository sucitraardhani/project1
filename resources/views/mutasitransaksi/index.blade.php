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

            <form action="/mutasitransaksi/hasilmutasi" method="POST">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="anggota">No Rekening</label>
                        <select name="anggota" id="anggota" class="form-control">
                            <option value="" selected disable>Pilih ID/Nama Rekening</option>
                            @foreach( $data_anggota as $anggota )
                            <option value="{{$anggota->id}}">{{$anggota->id}} A/n {{$anggota->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                         <center><button type="submit" class="btn btn-info">Find</button></center>
                    </div>
            </form>

              </div>
            </div>
          </div>
        </div>
      </div>   
      
@stop









       

