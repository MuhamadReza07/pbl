<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Data Barang
                        <a href="#" class="btn btn-success float-right my-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fa fa-plus" ></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap">
                                <thead class="bg-teal">
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Harga Dasar(Rp)</th>
                                    <th>Harga Jual(Rp)</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </thead>
                                 <tbody>

                                    {{-- @foreach ($list_barang as $barang)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $barang->kode_barang }}</td>
                                            <td>{{ $barang->nama_barang }}</td>
                                            <td>{{ $barang->kategori }}</td>
                                            <td>{{ $barang->harga_dasar }}</td>
                                            <td>{{ $barang->harga_jual }}</td>
                                            <td>{{ $barang->stok }}</td>
                                            <td>
                                                <div class="btn-group">

                                                    <a href="{{ url('admin/master-data/barang', $barang->id_barang) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('components.template.utils.delete', [
                                                        'url' => url(
                                                            'admin/master-data/barang',
                                                            $barang->id_barang
                                                        ),
                                                    ])


                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach  --}}

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $().DataTable();
    </script>
</x-module.admin> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Data Barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('admin/master-data/barang/create') }}" method="POST">
        <div class="modal-body">
          {{-- <div class="form-group" mb-3>
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang"  required class="form-control">
          </div>
          <div class="form-group" mb-3>
            <label for="">Kode Barang</label>
            <input type="text" name="kode_barang" required class="form-control">
          </div>
          <div class="form-group" mb-3>
            <label for="">Kategori</label>
            <input type="text" name="kategori" required class="form-control">
          </div>
          <div class="form-group" mb-3>
            <label for="">harga Dasar</label>
            <input type="text" name="harga_dasar" required class="form-control">
          </div>
          <div class="form-group" mb-3>
            <label for="">Harga Jual</label>
            <input type="text" name="harga_jual" required class="form-control">
          </div>
          <div class="form-group" mb-3>
            <label for="">stok</label>
            <input type="text" name="nstok" required class="form-control">
          </div> --}}

          <div class="card-body">
            <form action="{{ url('admin/master-data/barang') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label">Nama Barang</label>
                    <input type="text"
                        class="form-control @error('nama_barang')
                        is-invalid
                    @enderror"
                        name="nama_barang" required>
                    @error('nama_barang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label class="control-label">Kode Barang</label>
                    <input type="text"
                        class="form-control @error('kode_barang')
                    is-invalid @enderror"
                        name="kode_barang" required>
                    @error('kode_barang')
                        <div class="invalid-feedback">
                            Kode barang mirip dengan kode barang yang sudah ada
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="control-label">Kategori Barang </label>
                    <input type="text"
                        class="form-control @error('kategori')
                    is-invalid @enderror"
                        name="kategori" required>
                    @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Harga Dasar</label>
                            <input type="text"
                                class="form-control @error('harga_dasar')
                    is-invalid @enderror"
                                name="harga_dasar" required>
                            @error('harga_dasar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Harga Jual</label>
                            <input type="text"
                                class="form-control @error('harga_jual')
                    is-invalid @enderror"
                                name="harga_jual" required>
                            @error('harga_jual')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Stok Barang</label>
                            <input type="text"
                                class="form-control @error('stok')
                    is-invalid @enderror "
                                name="stok" required>
                            @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

      </div>
    </div>
  </div>
</body>
</html>