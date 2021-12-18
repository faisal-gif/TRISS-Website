@extends('layouts.lay')
@section('content')
      <!-- general form elements -->
      <div class="col-md-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/updateBarang" method="POST" enctype="multipart/form-data">
                 
                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" >
                
              @csrf
                <div class="card-body">
               
                <div class="form-group row">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="">
                    </div>
                <div class="form-group row">
                      <label>Ukuran</label>
                        <input type="text" class="form-control" name="ukuran" value="">
                    </div>
                <div class="form-group row">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" value="">
                    </div>                       
                <div class="form-group row">
                        <label>Harga Barang</label>
                        <input type="number" class="form-control" name="harga_barang" value="">
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
                <h3 class="card-title">Table Barang</h3>

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
                      <th>ID</th>
                      <th>Nama Barang</th>
                      <th>Ukuran</th>
                      <th>Jumlah Barang</th>
                      <th>Harga Barang</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $b)
            <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->nama_barang}}</td>
            <td>{{$b->ukuran}}</td>
            <td>{{$b->jumlah}}</td>
            <td>{{$b->harga_barang}}</td>
            <td><a class="btn btn-primary" href="/editStat/{{$b->id}}" >kembali</a>
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
