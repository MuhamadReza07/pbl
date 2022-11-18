<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-3 mx-5 mb-2">
                <a href="{{ url('admin/master-data/barang') }}" class="btn btn-dark btn-sm "> <i
                        class="mdi mdi-arrow-left"></i>Kembali</a>
                <div class="card">
                    <div class="card-header bg-white">
                        Edit Data Barang
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/barang', $barang->id_barang) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="control-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang"
                                    value="{{ $barang->nama_barang }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Kode Barang</label>
                                <input type="text" class="form-control" name="kode_barang"
                                    value="{{ $barang->kode_barang }}">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label">Kategori</label>
                                    <input type="text" class="form-control" name="kategori"
                                        value="{{ $barang->kategori }}">
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Harga Dasar</label>
                                        <input type="text" class="form-control" name="harga_dasar"
                                            value="{{ $barang->harga_dasar }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Harga Jual</label>
                                        <input type="text" class="form-control" name="harga_jual"
                                            value="{{ $barang->harga_jual }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Stok Barang</label>
                                        <input type="text" class="form-control" name="stok"
                                            value="{{ $barang->stok }}">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary  float-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-module.admin>
