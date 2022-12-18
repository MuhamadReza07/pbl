<x-module.kasir menu="menu.kasir">
    <div class="container py-4">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h6>Transaksi Penjualan</h6>
                            <div class="row">
                                <div class="col-4">
                                    <span>
                                        <strong>kasir</strong>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Nama Kasir"
                                        aria-label="First name"
                                        value=" @if (Auth::check()) {{ request()->user()->username }}
                                    @else
                                        Silahkan Login @endif"
                                        disabled>
                                </div>
                                <div class="col-4">
                                    <span>
                                        <strong>Tgl Transaksi</strong>
                                    </span>
                                    <input type="" class="form-control" value="{{ $date }}" disabled>
                                </div>
                                <div class="col-4">
                                    <span>
                                        <strong>No.Nota</strong>
                                    </span>
                                    <input type="text" class="form-control" placeholder="nomor invoice"
                                        value="" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group row ">
                                <label for="kode_barang" class="col-auto">Cari Barang</label>
                                <div class="col-4">
                                    <form action="{{ url('transaksi/penjualan') }}" method="POST">
                                        @csrf
                                        <div class="input-group">
                                            <!-- <input type="text" class="form-control" name="kode_barang"> -->
                                            <select name="id_barang" class="form-control">
                                                <option>-</option>
                                                @foreach ($list_barang as $barang)
                                                    <option value="{{ $barang->id }}"> {{ $barang->kode_barang }} -
                                                        {{ $barang->nama_barang }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <input type="text" class="form-control" name="total_item"
                                                placeholder="Jumlah barang">
                                            <span class="input-group-btn">
                                                <div class="input-group">

                                                </div>
                                                <!-- <div class="form-group">
                                                    <button class="btn btn-info btn-flat"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div> -->
                                                <button class="btn btn-info btn-flat"><i class="fa fa-arrow-right"></i>
                                                </button>
                                            </span>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class=" col-lg-5 mx-5">
                                <div class="row">
                                    <button href="#" class="btn btn-success float-right  " data-bs-toggle="modal"
                                        data-bs-target="#barang"><i class="fa fa-search"></i>
                                        Cari Barang</button>
                                </div>
                            </div> --}}
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
                            <tbody>
                                @foreach ($list_penjualan as $penjualan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $penjualan->barang->kode_barang }}</td>
                                        <td>{{ $penjualan->barang->nama_barang }}</td>
                                        <td>@currency($penjualan->barang->harga_jual) </td>
                                        <td>{{ $penjualan->total_item }}</td>
                                        <td>@currency($penjualan->total_harga) </td>
                                        <td>@include('components.template.utils.delete', [
                                            'url' => url('transaksi/penjualan', $penjualan->id_barang),
                                        ])</td>

                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                @foreach ($list_penjual as $penjual)
                                    <tr>


                                        <th colspan="5">
                                            <h5 class="text-end ">Total</h5>

                                        </th>
                                        <th colspan="2">


                                            <input type="text" name="totalval" class="form-control" id="total"
                                                value="@currency($penjual->sum('total_harga'))" onchange="updateDue()" disabled>
                                        </th>

                                    </tr>
                                    {{-- <tr>
                                        <th colspan="5">
                                            <h5 class="text-end ">Bayar</h5>

                                        </th>
                                        <th colspan="2">


                                            <input type="text" name="bayar" class="form-control" id="bayar"
                                                value="@currency($penjual->bayar)">
                                        </th>
                                    </tr> --}}
                                    {{-- <tr>
                                        <th colspan="5">
                                            <h5 class="text-end ">Kembali</h5>

                                        </th>
                                        <th colspan="2">


                                            <input type="text" name="kembali" class="form-control" id="kembali"
                                                value="@currency($penjual->diterima)">
                                        </th>
                                    </tr> --}}
                                @endforeach
                            </tfoot>
                        </table>

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="tampil-bayar bg-primary"></div>
                                <div class="tampil-terbilang"></div>
                            </div>
                            <div class="col-lg-4">
                                <form action="" class="form-pembelian" method="post">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="bayar" class="col-lg-3 control-label"
                                            for="exampleInputText">Bayar</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="bayar" class="form-control" name="bayar"
                                                onchange="updateDue()">
                                        </div>
                                    </div>

                                    <div class="form-group
                                                row">
                                        <label for="bayar" class="col-lg-3 control-label"
                                            for="exampleInputText">Kembali</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="kembali" class="form-control" name="kembali"
                                                disabled>
                                        </div>
                                    </div>

                                </form>
                                {{-- <div class="form-group row">

                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputText" class="col-lg-3 control-label">Initial Deposit</label>
                                    <input type="text" name="inideposit" class="form-control" id="inideposit"
                                        onchange="updateDue()">
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputText" class="col-lg-3 control-label">Outstanding
                                        Dues</label>
                                    <input type="text" name="remainingval" class="form-control" id="remainingval">
                                </div> --}}

                            </div>
                        </div>
                        <div>
                            <form action="{{ url('transaksi/penjualan') }}" method="POST">
                                <button type="submit" class="btn btn-primary btn-sm btn-flat pull-right btn-simpan"><i
                                        class="fa fa-floppy-o"></i> Simpan Transaksi</button>
                            </form>

                        </div>

                    </div>


                </div>
            </div>

        </div> <!-- end col -->
    </div>
    </div>
    </div>
    </div>
    {{-- <div class="modal fade" id="barang" tabindex="-1" aria-labelledby="barang" aria-hidden="true">
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
                            <form action="{{ url('transaksi/penjualan') }}" method="POST""></form>
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

    </div> --}}

    <script>
        function updateDue() {

            var total = parseInt(document.getElementById("total").value);
            var val2 = parseInt(document.getElementById("bayar").value);

            // to make sure that they are numbers
            if (!total) {
                total = {{ $penjual->sum('total_harga') }};

            }
            if (!val2) {
                val2 = 0;
            }

            var ansD = document.getElementById("kembali");
            ansD.value = val2 - total;
        }
    </script>
    </x-module.admin>
