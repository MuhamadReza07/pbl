<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-5 mx-5 ">
                <a href="{{ url('admin/master-data/supplier') }}" class="btn btn-dark btn-sm "><i
                        class="mdi mdi-arrow-left"></i>Kembali</a>
                <div class="card">
                    <div class="card-header bg-white">
                        Tambah Supplier

                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/supplier') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Nama Supplier</label>
                                <input type="text"
                                    class="form-control @error('nama_supplier')
                                    is-invalid
                                @enderror"
                                    name="nama_supplier" required>
                                @error('nama_supplier')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label class="control-label">No HP</label>
                                <input type="text"
                                    class="form-control @error('no_hp')
                                    is-invalid
                                @enderror"
                                    name="no_hp" required>
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat Supplier</label>
                                <input type="text"
                                    class="form-control @error('alamat_supplier')
                                    is-invalid
                                @enderror"
                                    name="alamat_supplier" required>
                                @error('alamat_supplier')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-module.admin>
