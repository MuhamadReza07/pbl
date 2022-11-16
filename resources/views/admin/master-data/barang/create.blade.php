{{-- 
<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-3 mx-5 mb-2 ">
                <a href="{{ url('admin/master-data/barang') }}" class="btn btn-dark btn-sm "> <i
                        class="mdi mdi-arrow-left"></i>Kembali</a>
                <div class="card">
                    <div class="card-header bg-white">
                        Tambah Data Barang

                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/barang') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Nama Barang</label>
                                <input type="text"
                                    class="form-control @error('nama_barang')
                                    is-invalid
                                @enderror"
                                    name="nama_barang" required>
                                @error('nama_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label class="control-label">Kode Barang</label>
                                <input type="text"
                                    class="form-control @error('kode_barang')
                                is-invalid @enderror"
                                    name="kode_barang" required>
                                @error('kode_barang')
                                    <div class="invalid-feedback">
                                        Kode barang mirip dengan kode barang yang sudah ada
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Kategori Barang </label>
                                <input type="text"
                                    class="form-control @error('kategori')
                                is-invalid @enderror"
                                    name="kategori" required>
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Harga Dasar</label>
                                        <input type="text"
                                            class="form-control @error('harga_dasar')
                                is-invalid @enderror"
                                            name="harga_dasar" required>
                                        @error('harga_dasar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Harga Jual</label>
                                        <input type="text"
                                            class="form-control @error('harga_jual')
                                is-invalid @enderror"
                                            name="harga_jual" required>
                                        @error('harga_jual')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Stok Barang</label>
                                        <input type="text"
                                            class="form-control @error('stok')
                                is-invalid @enderror "
                                            name="stok" required>
                                        @error('stok')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>




                            <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-module.admin> --}}
