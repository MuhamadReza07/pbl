<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mt-5 mx-5 ">
                <a href="{{ url('admin/master-data/kategori') }}" class="btn btn-dark btn-sm "><i
                        class="mdi mdi-arrow-left"></i>Kembali</a>
                <div class="card">

                    <div class="card-header">
                        Tambah Kategori

                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/kategori') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Kategori</label>
                                <input type="text"
                                    class="form-control @error('kategori')
                                    is-invalid
                                @enderror"
                                    name="kategori" required>
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        Kategori telah ada
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
