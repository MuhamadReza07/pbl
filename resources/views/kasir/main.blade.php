<x-module.kasir menu="menu.kasir">
    <h1 class="mx-2 text-dark">Hallo, {{ Auth::user()->username }}</h1>
    <div class="row">
        <div class="card col-lg-12">
            <div class="card-body  text-center">
                <h1>Selamat Datang</h1>
                <h3>Anda Login Sebagai Kasir</h3>
                <br>
                <a href="{{url('transaksi/penjualan/index')}}" class="btn btn-primary ">Transaksi Baru</a>
                <br><br><br>
            </div>
        </div>
    </div>
</x-module.kasir>