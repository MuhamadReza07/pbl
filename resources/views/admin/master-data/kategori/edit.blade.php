<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ url('admin/master-data/kategori') }}" class="btn btn-dark btn-sm "><i
                        class="mdi mdi-arrow-left"></i>Kembali</a>
                <div class="card">
                    <div class="card-header">
                        Edit Kategori
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/kategori', $kategori->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="control-label">Kategori</label>
                                <input type="text" class="form-control" name="kategori"
                                    value="{{ $kategori->kategori }}">
                            </div>

                            <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-module.admin>
