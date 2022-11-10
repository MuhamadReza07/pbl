<x-module.admin menu="menu.admin">
    <div class="container py-4">
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
            </script>
</x-module.admin>
