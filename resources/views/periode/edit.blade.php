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
									<h3 class="panel-title">Edit Data Periode</h3>
								</div>
								<div class="panel-body">
                <form action="/periode/{{$periode->id}}/update" method="POST">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Periode Bunga</label>
    <input name="periode" type="month" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    value="{{$periode->periode}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Presentase</label>
    <input name="persentase" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{$periode->persentase}}">
  </div>

  <div class="form-group">
    <label for="status_proses">Status</label>
    <select name="status_proses" class="form-control" id="status_proses">
    <option >Sudah Diproses</option>
    <option >Belum Diproses</option>
        </select>
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
 

