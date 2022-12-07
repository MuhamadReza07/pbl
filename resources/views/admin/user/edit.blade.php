<x-module.admin menu="menu.admin">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ url('admin/user') }}" class="btn btn-dark btn-sm "><i
                        class="mdi mdi-arrow-left"></i>Kembali</a>
                <div class="card">
                    <div class="card-header">
                        Edit user
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/user', $user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" name="username"
                                    value="{{ $user->username }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    value="{{ $user->password }}">
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
