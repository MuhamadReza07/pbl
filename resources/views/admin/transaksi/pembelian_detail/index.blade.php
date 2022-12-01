<x-module.admin menu="menu.admin">
    <div class="container py-4">

        <div class="col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h6>Transaksi Pembelian</h6>

                            <table>
                                <tr>
                                    <td>Supplier</td>
                                    {{-- <td>:{{ $supplier->nama_supplier }} </td> --}}
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    {{-- <td>: {{ $supplier->no_hp }} </td> --}}
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    {{-- <td>: {{ $supplier->alamat_supplier }}</td> --}}
                                </tr>
                            </table>
                        </div>

                        <div class="card-body">
                            <div class="form-group row ">
                                <label for="kode_barang" class="col-auto">Kode Barang</label>
                                <div class="col-3">
                                    <form action="{{ url('admin/transaksi/pembelian_detail/filter') }}" method="post">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="kode_barang"
                                                value="{{ $kode_barang ?? '' }}">
                                            <span class="input-group-btn">


                                                <div class="input-group">

                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-info btn-flat"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div>
                                    </form>
                                    {{-- <a href="" class="btn btn-info btn-flat"><i
                                                            class="fa fa-arrow-right"></i></a> --}}
                                    </span>
                                </div>


                            </div>
                            <div class="col-lg-5 mx-5">
                            </div>
                            <div class="row">
                                <a href="#" class="btn btn-success float-right my-auto " data-bs-toggle="modal"
                                    data-bs-target="#barang"><i class="fa fa-search"></i>
                                    Cari Barang</a>
                            </div>

                        </div>


                        <table class="table table-stiped table-bordered table-pembelian">
                            <thead>
                                <th width="5%">No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th width="15%">Jumlah</th>
                                <th>Subtotal</th>
                                <th width="15%">Aksi</th>
                            </thead>
                        </table>

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="tampil-bayar bg-primary"></div>
                                <div class="tampil-terbilang"></div>
                            </div>
                            <div class="col-lg-4">
                                <form action="{{ route('pembelian.store') }}" class="form-pembelian" method="post">
                                    @csrf
                                    <input type="hidden" name="id_pembelian" {{-- value="{{ $id_pembelian }}"> --}} <input
                                        type="hidden" name="total" id="total">
                                    <input type="hidden" name="total_item" id="total_item">
                                    <input type="hidden" name="bayar" id="bayar">

                                    <div class="form-group row">
                                        <label for="totalrp" class="col-lg-3 control-label">Total</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="totalrp" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="diskon" class="col-lg-3 control-label">Diskon</label>
                                        <div class="col-lg-8">
                                            <input type="number" name="diskon" id="diskon" class="form-control"
                                                {{-- value="{{ $diskon }}"> --}} </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bayar" class="col-lg-3 control-label">Bayar</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="bayarrp" class="form-control">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm btn-flat pull-right btn-simpan"><i
                                    class="fa fa-floppy-o"></i> Simpan Transaksi</button>
                        </div>

                    </div>


                </div>
            </div>

        </div> <!-- end col -->
    </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id="barang" tabindex="-1" aria-labelledby="barang" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-2" id="barangLabel">Cari Barang</h5>
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
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Beli</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_barang as $barang)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $barang->kode_barang }}</td>
                                            <td>{{ $barang->nama_barang }}</td>
                                            <td>{{ $barang->harga_dasar }}</td>
                                            <td>
                                                <div class="btn-group">

                                                    <a href="#" class="btn btn-success"><i
                                                            class="fa fa-shopping-cart"></i></a>



                                                </div>

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
