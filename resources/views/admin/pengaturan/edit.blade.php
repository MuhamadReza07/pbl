 <x-module.admin menu="menu.admin">
     <div class="container">
         <div class="row">
             <div class="col-md-12 mt-5">
                 <a href="{{ url('admin/pengaturan') }}" class="btn btn-dark btn-sm "><i
                         class="mdi mdi-arrow-left"></i>Kembali</a>
                 <div class="card">
                     <div class="card-header">
                         Edit Pengaturan
                     </div>
                     <div class="card-body">
                         <form action="{{ url('admin/pengaturan', $pengaturan->id) }}" method="post">
                             @csrf
                             @method('PUT')
                             <div class="form-group">
                                 <label class="control-label">Nama Toko</label>
                                 <input type="text" class="form-control" name="nama_perusahaan"
                                     value="{{ $pengaturan->nama_perusahaan }}">
                             </div>
                             <div class="form-group">
                                 <label class="control-label">Telepon</label>
                                 <input type="number" class="form-control" name="telepon"
                                     value="{{ $pengaturan->telepon }}">
                             </div>
                             <div class="form-group">
                                 <label class="control-label">Alamat</label>
                                 <input type="text" class="form-control" name="alamat"
                                     value="{{ $pengaturan->alamat }}">
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
