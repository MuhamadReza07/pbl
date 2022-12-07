<x-module.admin menu="menu.admin">
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        Data User
                        <a href="#" class="btn btn-primary float-right my-1" data-bs-toggle="modal"
                            data-bs-target="#user"><i class="fa fa-plus"></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap">
                                <thead class="bg-teal">
                                    <th width="5%">No</th>

                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_user as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>

                                            <td>
                                                <div class="btn-group">

                                                    <a href="{{ url('admin/user', $user->id) }}/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('components.template.utils.delete', [
                                                        'url' => url('admin/user', $user->id),
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
    <div class="modal fade" id="user" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-2" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="mdi mdi-close"></i>
                    </button>

                </div>
                <form action="{{ url('admin/user') }}" method="POST">
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ url('admin/user') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input type="text"
                                        class="form-control @error('username')
                                        is-invalid @enderror"
                                        name="username" required>
                                    {{-- @error('username')
                                        <div class="invalid-feedback">
                                            Kode barang mirip dengan kode barang yang sudah ada
                                        </div>
                                    @enderror --}}
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="email"
                                        class="form-control @error('email')
                    is-invalid @enderror"
                                        name="email" required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            Email sudah ada
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input type="password"
                                        class="form-control @error('password')
                    is-invalid @enderror"
                                        name="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            password sudah ada
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
