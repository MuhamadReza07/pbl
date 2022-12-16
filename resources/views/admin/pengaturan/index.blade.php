{{-- <x-module.admin menu="menu.admin">

    <div class="container mt-4">
        <form action="{{ url('admin/setting/update') }}" method="post" class="form-setting" data-toggle="validator"
            enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header bg-">
                    <h5>Pengaturan</h5>
                    <a href="#" class="btn btn-primary float-right my-1" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">

                    <div class="mb-3 row">
                        <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Toko</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nama_perusahaan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_perusahaan" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nama_perusahaan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-lg-2 control-label">Alamat</label>
                        <div class="col-lg-6">
                            <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <button class="btn btn-primary  float-right"><i class="fa fa-save"></i> Simpan Perubahan</button>
                </div>

            </div>
        </form>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-2" id="exampleModalLabel">Tambah Pengaturan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>

                </div>
                <form action="{{ url('admin/master-data/kategori') }}" method="POST">
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="#" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label">Nama Toko</label>
                                    <input type="text"
                                        class="form-control @error('kategori')
                                        is-invalid
                                    @enderror"
                                        name="kategori" required>
                                    @error('kategori')
                                        <div class="invalid-feedback">
                                            Pengaturan telah ada
                                        </div>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label class="control-label">Telepon</label>
                                    <input type="text"
                                        class="form-control @error('kategori')
                                        is-invalid
                                    @enderror"
                                        name="kategori" required>
                                    @error('kategori')
                                        <div class="invalid-feedback">
                                            Masukan No Telepon
                                        </div>
                                    @enderror

                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </form>

            </div>
        </div>
    </div>

</x-module.admin>

{{-- @push('scripts')
    <script>
        $(function() {
            showData();
            $('form-setting').validator().on('submit', function() {
                if (!e.preventDefault()) {
                    $.ajax({
                            url: $('.form-setting').attr('action'),
                            type: $('.form-setting').attr('method'),
                            data: new FormData($('.form-setting')[0]),
                            async: false,
                            processData: false,
                            ContentType: false
                        })

                        .done(response => {
                            showData();
                            $('.alert').fadeOut();

                        })
                        .fail(errors => {
                            alert('Tidak dapat menyimpan data');
                            return;

                        });

                }
            });

        });

        // function showData() {
        //     $.get('{{ url('admin/setting/show') }}')
        //     .done(response => {
        //         $('[name=nama_perusahaan]').val(response.nama_perusahaan);
        //         $('[name=telepon]').val(response.telepon);
        //         $('[name=alamat]').val(response.alamat);
        //     })
        //     .fail(errors => {
        //         alert('Tidak dapat menampilkan data');
        //     })
        // }

        function showData() {
            $.get('{{ url('admin/setting/show') }}')
                .done(response => {
                    $('[name=nama_perusahaan]').val(response.nama_perusahaan);
                    $('[name=telepon]').val(response.telepon);
                    $('[name=alamat]').val(response.alamat);
                })
                .fail(errors => {
                    alert('Tidak dapat menampilkan data');
                    return;
                });
        }
    </script>
@endpush --}}

<x-module.admin menu="menu.admin">
    @include('sweetalert::alert')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Data pengaturan
                        <a href="#" class="btn btn-primary float-right my-1" data-bs-toggle="modal"
                            data-bs-target="#pengaturan"><i class="fa fa-cog"></i> Pengaturan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap">
                                <thead class="bg-teal">
                                    <th>No</th>
                                    <th>Nama Toko</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_pengaturan as $pengaturan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengaturan->nama_perusahaan }}</td>
                                            <td>{{ $pengaturan->telepon }}</td>
                                            <td>{{ $pengaturan->alamat }}</td>

                                            <td>
                                                <div class="btn-group">

                                                    <a href="{{ url('admin/pengaturan', $pengaturan->id) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('components.template.utils.delete', [
                                                        'url' => url('admin/pengaturan', $pengaturan->id),
                                                    ])


                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pengaturan" tabindex="-1" aria-labelledby="pengaturanLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-2" id="exampleModalLabel">Tambah Data Toko</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>

                </div>
                <form action="{{ url('admin/pengaturan') }}" method="POST">
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ url('admin/pengaturan') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Nama Toko</label>
                                    <input type="text"
                                        class="form-control @error('nama_toko')
                                        is-invalid @enderror"
                                        name="nama_perusahaan" required>
                                    {{-- @error('pengaturanname')
                                        <div class="invalid-feedback">
                                            Kode barang mirip dengan kode barang yang sudah ada
                                        </div>
                                    @enderror --}}
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Telepon</label>
                                    <input type="number"
                                        class="form-control @error('telepon')
                    is-invalid @enderror"
                                        name="telepon" required>
                                    @error('telepon')
                                        <div class="invalid-feedback">
                                            Masukan no Telepon
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <input type="text"
                                        class="form-control @error('alamat')
                    is-invalid @enderror"
                                        name="alamat" required>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            Masukan alamat
                                        </div>
                                    @enderror
                                </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        $().DataTable();
    </script>



</x-module.admin>
