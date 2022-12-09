<x-module.admin menu="menu.admin">

    <div class="container mt-4">
        <form action="{{ url('admin/setting/update') }}" method="post" class="form-setting" data-toggle="validator"
            enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header bg-">
                    <h5>Pengaturan</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info alert-dismissible" style="display: none;   ">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                    </div>
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

</x-module.admin>

@push('scripts')
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
@endpush
