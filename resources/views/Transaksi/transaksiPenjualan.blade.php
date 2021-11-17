@extends('layouts.lay')
@section('content')
      <!-- general form elements -->
      <div class="col-md-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Transaksi Penjualan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                        <label>ID Transaksi</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group row">
                      <label>ID Barang</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                </div>

                <div class="form-group row">
                        <label>Jumlah Barang</label>
                        <input type="number" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group row">
                        <label>Tanggal Transaksi</label>
                        <input type="date" class="form-control" placeholder="Enter ...">
                </div>
            
                <div class="form-group row">
                      <label>Total Harga</label>
                        <input type="number" class="form-control" placeholder="Enter ...">
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
                      <th>IDTransaksi</th>
                      <th>IDBarang</th>
                      <th>Jumlah Barang</th>
                      <th>Tanggal Transaksi</th>
                      <th>Total Harga</th>
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
