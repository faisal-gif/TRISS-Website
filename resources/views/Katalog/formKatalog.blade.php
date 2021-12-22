@extends('layouts.lay')
@section('content')
      <!-- general form elements -->
      <div class="col-md-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Katalog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/insertKatalog" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" > 
                @csrf
                <div class="card-body">
                <div class="form-group row">
                        <label>ID Barang</label>
                        <select class="form-control select2" name="id_barang">
                    <option selected="selected">Pilih</option>
                    @foreach ($br as $key )
                  <option value="{{ $key->id }}"> 
                    {{ $key->id }} | {{ $key->nama_barang }}
                    @endforeach
                  </select>
                      </select>
                        </div>
                        <div class="form-group row">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" placeholder="Enter ..." >
                </div>
            
                <div class="form-group row">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control">Enter text here...</textarea>
                </div>

               
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
         
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-7">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table Katalog</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>IDKatalog</th>
                      <th>IDBarang</th>
                      <th>Foto</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($kt as $t)
            <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->id_barang}}</td>
            <td>{{$t->foto}}</td>
            <td>{{$t->deskripsi}}</td>
            <td><a class="btn btn-primary" href="/editStat/{{$t->id}}" >kembali</a>
            </td>
      
            </tr>
   @endforeach
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
@endsection
