<x-module.admin menu="menu.admin">
    {{-- <div class="container py-4">
        <div class="row d-print-none">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">

                                        <p><strong>Informasi Nota</strong></p>
                                        <div class="row">

                                            <div class="col-4">
                                                <label for="no_nota" class="form-label">No.Nota</label>
                                                <input type="text" class="form-control" id="no_nota" disabled>
                                            </div>
                                            <div class="col-4">
                                                <label for="tgl" class="form-label">Tanggal</label>
                                                <input type="date" class="form-control" id="tgl" disabled>
                                            </div>
                                            <div class="col-4">
                                                <label for="kasir" class="form-label">Kasir</label>
                                                <input type="text" class="form-control" id="kasir" disabled>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="panel panel-default">
                                                    <div class="">
                                                        <div class="table-responsive">
                                                            <table id="mainTable" class="table  mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Kode Barang</th>
                                                                        <th>Nama Barang</th>
                                                                        <th>Qty</th>
                                                                        <th>harga</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>A100</td>
                                                                        <td>Product</td>
                                                                        <td>1</td>
                                                                        <td>Rp.10.000</td>
                                                                        <td>

                                                                            <a href="#" class="btn btn-success"><i
                                                                                    class="fa fa-edit"></i></a>
                                                                            <a href="#" </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="thick-line"></td>
                                                                        <td class="thick-line"></td>
                                                                        <td class="thick-line ">

                                                                        </td>
                                                                        <td class="thick-line"></td>
                                                                        <td class="thick-line text-center">
                                                                            <strong>Total</strong>

                                                                        </td>
                                                                        <td class="thick-line"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="no-line"></td>
                                                                        <td class="no-line"></td>
                                                                        <td class="no-line text-center">

                                                                        </td>
                                                                        <td class="no-line"></td>
                                                                        <td class="no-line  text-center">
                                                                            <strong>Bayar</strong>

                                                                        </td>
                                                                        <td class="no-line"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="no-line"></td>
                                                                        <td class="no-line"></td>
                                                                        <td class="no-line ">

                                                                        </td>
                                                                        <td class="no-line"></td>
                                                                        <td class="no-line text-center">
                                                                            <strong>Kembali</strong>
                                                                        </td>
                                                                        <td class="no-line"></td>
                                                                    </tr>


                                                                </tbody>

                                                            </table>
                                                        </div>

                                                        <div class="d-print-none mo-mt-2">
                                                            <div class="float-right">
                                                                <a href="javascript:window.print()"
                                                                    class="btn btn-success waves-effect waves-light"><i
                                                                        class="fa fa-print"></i></a>
                                                                <a href="#"
                                                                    class="btn btn-primary waves-effect waves-light">Simpan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- end row -->

                                    </div>
                                </div>

                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
            </script> --}}

    <div class="container py-4">

        <div class="col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h6>Transaksi Penjualan</h6>

                            {{-- <table>
                                    <tr>
                                        <td>Supplier</td>
                                        {{-- <td>:{{ $supplier->nama_supplier }} </td> --}}
                            {{-- </tr>
                            <tr>
                                <td>Telepon</td>
                                {{-- <td>: {{ $supplier->no_hp }} </td> --}}
                            </tr>
                            <tr>
                                {{-- <td>Alamat</td>
                                {{-- <td>: {{ $supplier->alamat_supplier }}</td> --}}
                            </tr>
                            </table>
                            <div class="row">
                                <div class="col-4">
                                    <span>
                                        <strong>kasir</strong>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Nama Kasir"
                                        aria-label="First name"
                                        value=" @if (Auth::check()) {{ request()->user()->name }}
                                    @else
                                        Silahkan Login @endif"
                                        disabled>
                                </div>
                                <div class="col-4">
                                    <span>
                                        <strong>Tgl Transaksi</strong>
                                    </span>
                                    <input type="" class="form-control" placeholder="Tgl Transaksi"
                                        value="{{ $date }}" disabled>
                                </div>
                                <div class="col-4">
                                    <span>
                                        <strong>No.Nota</strong>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Last name"
                                        value="{{ $nomor }}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group row ">
                                <label for="kode_barang" class="col-auto">Kode Barang</label>
                                <div class="col-3">
                                    <form action="#barang" method="post">
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
                                            <td>{{ $barang->harga_jual }}</td>
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
