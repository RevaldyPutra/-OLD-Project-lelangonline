@extends('master')

@section('judul')
<h1>Halaman index Barang</h1>
@endsection

@section('content')
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    
    <a class="btn btn-primary"href="{{ route('barang.create') }}">Tambah barang</a>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
  <table class="table table-bordered table-hover">
        <thead>
            <tbody>
                <tr>
                    <th>No</th>
                    <th>Nama barang</th>
                    <th>Tanggal</th>
                    <th>Harga awal</th>
                    <th>Deskripsi barang</th>
                    <th>Actions</th>
                </tr>
            </tbody>
        </thead>
        @foreach ($barangs as $value)
        <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->nama_barang }}</td>
            <td>{{ $value->tanggal }}</td>
            <td>{{ $value->harga_awal }}</td>
            <td>{{ $value->deskripsi_barang }}</td>
            <td>
            <form action="{{ route('barang.destroy', [$value->id]) }}"method="POST">
            <a class="btn btn-primary"href="{{ route('barang.show', $value->id)}}">Detail</a>
            <a class="btn btn-warning"href="{{ route('barang.edit', $value->id)}}">Edit</a>
            @csrf
            @method('DELETE')   
           <input class="btn btn-danger"type="submit"value="Delete">
           </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
@endsection




