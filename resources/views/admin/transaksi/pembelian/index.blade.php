<x-module.admin menu="menu.admin">

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Daftar Pembelian
                        <a href="#" class="btn btn-primary float-right my-1" data-bs-toggle="modal"
                            data-bs-target="#pembelian"><i class="fa fa-plus"></i> Transaksi Baru</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap">
                                <thead class="bg-teal">
                                    <th width="5%">No</th>
                                    <th>Tanggal</th>
                                    <th>Supplier</th>
                                    <th>Total Item</th>
                                    <th>Total Harga</th>
                                    <th>Diskon</th>
                                    <th>Total Bayar</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pembelian" tabindex="-1" aria-labelledby="pembelian" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-2" id="pembelianLabel">Pilih Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>

                </div>
                <form>
                    <div class="modal-body">
                        <div class="card-body">
                            <table id="datatable" class="table  table-bordered dt-responsive nowrap">
                                <thead>
                                    <th width="5%">No</th>
                                    <th>Nama Supplier</th>
                                    <th>No HP</th>
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
                                                <a href="{{ url('admin/transaksi/pembelian', $supplier->id_supplier) }}"
                                                    class="btn btn-success"><i class="fa fa-check-circle"></i> Pilih</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>

                </form>

            </div>
        </div>

    </div>

</x-module.admin>
