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
              @foreach($stok as $s)
              <form class="form-horizontal" action="/updateBarang" method="POST" enctype="multipart/form-data">
                 
                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" >
                <input type="hidden" name="id" value="{{ $s->id }}" >
              @csrf
                <div class="card-body">
               
                <div class="form-group row">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="{{$s->nama_barang}}">
                    </div>
                <div class="form-group row">
                      <label>Ukuran</label>
                        <input type="text" class="form-control" name="ukuran" value="{{$s->ukuran}}">
                    </div>
                <div class="form-group row">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" value="{{$s->jumlah}}">
                    </div>                       
                <div class="form-group row">
                        <label>Harga Barang</label>
                        <input type="number" class="form-control" name="harga_barang" value="{{$s->harga_barang}}">
                    </div>     
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endforeach
            </div>
            </div>
         
          <!--/.col (left) -->
          <!-- right column -->
        
@endsection
