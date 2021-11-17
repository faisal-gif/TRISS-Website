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
              <form class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                        <label>ID Barang</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                <div class="form-group row">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                <div class="form-group row">
                      <label>Kategori</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                <div class="form-group row">
                      <label>Ukuran</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                <div class="form-group row">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>                       
                <div class="form-group row">
                        <label>Harga Barang</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
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
                      <th>IDBarang</th>
                      <th>Nama Barang</th>
                      <th>Kategori</th>
                      <th>Ukuran</th>
                      <th>Jumlah Barang</th>
                      <th>Harga Barang</th>
                    </tr>
                  </thead>
                  <tbody>

                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
@endsection
