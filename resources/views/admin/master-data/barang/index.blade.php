<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Data Barang
                        <a href="{{ url('admin/master-data/barang/create') }}" class="btn btn-success float-right my-1"><i
                                class="fa fa-plus"></i> Tambah</a>
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

                                    @foreach ($list_barang as $barang)
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
                                    @endforeach

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
