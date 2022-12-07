<x-module.kasir menu="menu.kasir">

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
                        <div class="table-responsive table-pembelian">
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
                            <table id="datatable" class="table  table-bordered dt-responsive nowrap table-supplier">
                                <thead>
                                    <th width="5%">No</th>
                                    <th>Nama Supplier</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($supplier as $key => $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_supplier }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->alamat_supplier }}</td>
                                            <td>
                                                <a href="{{ url('transaksi/pembelian', $item->id) }}"
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
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-detail">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detail Pembelian</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered table-detail">
                        <thead>
                            <th width="5%">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        let table, table1;

        $(function() {
            table = $('.table-pembelian').DataTable({
                processing: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('admin.transaksi.pembelian.data') }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'tanggal'
                    },
                    {
                        data: 'supplier'
                    },
                    {
                        data: 'total_item'
                    },
                    {
                        data: 'total_harga'
                    },
                    {
                        data: 'diskon'
                    },
                    {
                        data: 'bayar'
                    },
                    {
                        data: 'aksi',
                        searchable: false,
                        sortable: false
                    },
                ]
            });

            $('.table-supplier').DataTable();
            table1 = $('.table-detail').DataTable({
                processing: true,
                bSort: false,
                dom: 'Brt',
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'kode_produk'
                    },
                    {
                        data: 'nama_produk'
                    },
                    {
                        data: 'harga_beli'
                    },
                    {
                        data: 'jumlah'
                    },
                    {
                        data: 'subtotal'
                    },
                ]
            })
        });

        function addForm() {
            $('#pembelian').modal('show');
        }

        function showDetail(url) {
            $('#modal-detail').modal('show');

            table1.ajax.url(url);
            table1.ajax.reload();
        }

        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
            }
        }
    </script>
    </x-module.admin>
