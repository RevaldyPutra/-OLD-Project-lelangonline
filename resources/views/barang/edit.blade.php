@extends('master')

@section('judul')
<h1>Halaman Edit</h1>
@endsection

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('barang.update', [$barangs->id]) }} "method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama barang</label>
                    <input type="text" name="nama_barang" value="{{ $barangs->nama_barang }}"class="form-control" placeholder="Enter nama barnag">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ $barangs->tanggal }}"class="form-control" placeholder="Enter tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga awal</label>
                    <input type="text" name="harga_awal" value="{{ $barangs->harga_awal }}"class="form-control" placeholder="Enter harga awal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi barang</label>
                    <input type="text-area" name="deskripsi_barang" value="{{ $barangs->deskripsi_barang }}"class="form-control" id="exampleInputPassword1" placeholder="deskirpsi barnag">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            </div>
            </div>
            </div>
</section>

@endsection