<x-module.admin menu="menu.admin">
    @include('sweetalert::alert')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Data Supplier
                        <a href="#" class="btn btn-primary float-right my-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap">
                                <thead>
                                    <th width="5%">No</th>
                                    <th>Nama Supplier</th>
                                    <th>No Hp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>

                                    @foreach ($list_supplier as $supplier)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $supplier->nama_supplier }}</td>
                                            <td>{{ $supplier->no_hp }}</td>
                                            <td>{{ $supplier->alamat_supplier }}</td>
                                            <td>
                                                <div class="btn-group">

                                                    <a href="{{ url('admin/master-data/supplier', $supplier->id_supplier) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('components.template.utils.delete', [
                                                        'url' => url(
                                                            'admin/master-data/supplier',
                                                            $supplier->id_supplier
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
    <!--Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-2" id="exampleModalLabel">Tambah Data Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>

                </div>
                <form action="{{ url('admin/master-data/supplier') }}" method="POST">
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ url('admin/master-data/supplier') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label">Nama Supplier</label>
                                    <input type="text"
                                        class="form-control @error('nama_supplier')
                                        is-invalid
                                    @enderror"
                                        name="nama_supplier" required>
                                    @error('nama_supplier')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label class="control-label">No HP</label>
                                    <input type="text"
                                        class="form-control @error('no_hp')
                                        is-invalid
                                    @enderror"
                                        name="no_hp" required>
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label class="control-label">Alamat Supplier</label>
                                    <input type="text"
                                        class="form-control @error('alamat_supplier')
                                        is-invalid
                                    @enderror"
                                        name="alamat_supplier" required>
                                    @error('alamat_supplier')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        $().DataTable();
    </script>
</x-module.admin>
