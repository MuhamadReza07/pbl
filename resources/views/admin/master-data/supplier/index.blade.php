<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Data Supplier
                        <a href="{{ 'supplier/create' }}" class="btn btn-success float-right"><i class="fa fa-plus"></i>
                            Tambah</a>
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
    <script>
        $().DataTable();
    </script>
</x-module.admin>
