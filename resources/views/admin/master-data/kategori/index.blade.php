<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Kategori
                        <a href="{{ url('admin/master-data/kategori/create') }}"
                            class="btn btn-success float-right my-1"><i class="fa fa-plus"></i> Tambah</a>
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

                                                    <a href="{{ url('admin/master-data/kategori', $kategori->id_kategori) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('components.template.utils.delete', [
                                                        'url' => url(
                                                            'admin/master-data/kategori',
                                                            $kategori->id_kategori
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
