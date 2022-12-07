<x-module.admin menu="menu.admin">
    @include('sweetalert::alert')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Kategori
                        <a href="#" class="btn btn-primary float-right my-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap">
                                <thead class="bg-teal">
                                    <th width="10px" class="text-center">No</th>
                                    <th class="text-center">Kategori</th>
                                    <th width="200px" class="text-center">Aksi</th>
                                </thead>
                                <tbody>

                                    @foreach ($list_kategori as $kategori)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kategori->kategori }}</td>
                                            <td>
                                                <div class="btn-group">

                                                    <a href="{{ url('admin/master-data/kategori', $kategori->id) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('components.template.utils.delete', [
                                                        'url' => url('admin/master-data/kategori', $kategori->id),
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
                    <h5 class="modal-title fs-2" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>

                </div>
                <form action="{{ url('admin/master-data/kategori') }}" method="POST">
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ url('admin/master-data/kategori') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label">Kategori</label>
                                    <input type="text"
                                        class="form-control @error('kategori')
                                        is-invalid
                                    @enderror"
                                        name="kategori" required>
                                    @error('kategori')
                                        <div class="invalid-feedback">
                                            Kategori telah ada
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
