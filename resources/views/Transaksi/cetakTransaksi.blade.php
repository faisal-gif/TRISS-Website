@extends('layouts.lay')
@section('content')
      <!-- general form elements -->
      <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card">
            <div class="card-header">
                <h3 class="card-title">Table Transaksi</h3>

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
                  @foreach($ts as $t)
            <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->id_barang}}</td>
            <td>{{$t->jumlah_barang}}</td>
            <td>{{$t->created_at}}</td>
            <td>{{$t->total_harga}}</td>
            <!-- <td><a class="btn btn-primary" href="/editStat/{{$t->id}}" >kembali</a> -->
            </td>
      
            </tr>
   @endforeach
                    </tbody>
                </table>
              </div>
              <div class="card-footer">
                  <a href="/cetakTransaksi"  class="btn btn-primary">Cetak</a>
                </div>
            </div>
            </div>
         
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          <div class="card">
          <div class="card-header">
                <h3 class="card-title">Table Pembelian</h3>

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
                  @foreach($pm as $p)
            <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->id_barang}}</td>
            <td>{{$p->jumlah_barang}}</td>
            <td>{{$p->created_at}}</td>
            <td>{{$p->total_harga}}</td>
            <!-- <td><a class="btn btn-primary" href="/editStat/{{$t->id}}" >kembali</a> -->
            </td>
      
            </tr>
   @endforeach
                    </tbody>
                </table>
              </div>
              <div class="card-footer">
                  <a href="/cetakPemasukan"  class="btn btn-primary">Cetak</a>
                </div>
              <!-- /.card-body -->
            </div>
            </div>
@endsection
