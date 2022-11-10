<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ url('admin/master-data/supplier') }}" class="btn btn-dark btn-sm "><i
                        class="mdi mdi-arrow-left"></i>Kembali</a>
                <div class="card">
                    <div class="card-header">
                        Edit Data Supplier
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/supplier', $supplier->id_supplier) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="control-label">Nama Supplier</label>
                                <input type="text" class="form-control" name="nama_supplier"
                                    value="{{ $supplier->nama_supplier }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">No HP</label>
                                <input type="text" class="form-control" name="no_hp"
                                    value="{{ $supplier->no_hp }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat Supplier</label>
                                <input type="text" class="form-control" name="alamat_supplier"
                                    value="{{ $supplier->alamat_supplier }}">
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
