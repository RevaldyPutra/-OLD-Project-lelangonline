@extends('master')

@section('judul')
<h1>Halaman index Lelang</h1>
@endsection

@section('content')
<section class="content">
<a class="btn btn-primary mb-3"href="{{ route('lelang.create') }}">Tambah lelang</a>
<a style="float:right"class="btn btn-info mb-3"href="{{ route('barang.create') }}">Export Barang</a>
<!-- Default box -->
<div class="card">
  <div class="card-header">
    
    
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
                    <th>Harga awal</th>
                    <th>Harga lelang</th>
                    <th>Tanggal lelang</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </tbody>
        </thead>
        @forelse ($lelangs as $item)
        <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ Str::of($item->barang->nama_barang)->title() }}</td>
            <td>@currency($item->barang->harga_awal)</td>
            <td>@currency($item->harga_akhir)</td>
            <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('j-F-Y') }}</td>
            <td>
                <span class="badge {{ $lelang->status == 'ditutup' ? 'bg-danger' : 'bg-success' }}">{{ Str::title($lelang->status) }}</span>          
            </td>  
            <td>
            <form action="{{ route('barang.destroy', [$item->id]) }}"method="POST">
            <a class="btn btn-primary"href="{{ route('barang.show', $item->id)}}">Detail</a>
            <a class="btn btn-warning"href="{{ route('barang.edit', $item->id)}}">Edit</a>
            @csrf
            @method('DELETE')   
           <input class="btn btn-danger"type="submit"value="Delete">
           </form>
            </td>
        </tr>
        @empty
        <tr>
            <td>Data masih kosong</td>
        </tr>
        @endforelse
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
@endsection




