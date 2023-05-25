@extends('admin.index')
@section('hal')
    <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-title">Daftar Produk</div>
                    <a href="index.php?hal=produk_form" class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-circle-fill"></i> Tambah
                    </a>
                </div>
                    <table class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Jenis</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($ar_produk as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>Rp. {{ number_format($data->harga,0,',','.') }}</td>
                                        <td>{{ $data->jenis->nama }}</td>
                                        <td>
                                            @empty($data->foto)
                                                <img src="{{ url('admin/assets/img/no-image.png') }}" style="width:75px;border-radius:10px">
                                            @else
                                                <img src="{{ url('admin/assets/img') }}/{{ $data->foto }}" style="width:75px;border-radius:10px">
                                            @endempty

                                        </td>
                                        <td>
                                            <form action="{{ url('create') }}" method="POST">
                                                <a class="btn btn-sm btn-info" href="" title="detail">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a>
                                                <a class="btn btn-sm btn-warning" href="" title="ubah">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </a>
                                                    
                                                    <button type="submit" class="btn btn-sm btn-danger" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data dihapus')" title="hapus">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                    <input type="hidden" name="idx" value="">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection