<ul>
    <li class="menu-title">Main</li>

    <li>
        <a href="{{ url('admin/beranda') }}">
            <i class="dripicons-meter"></i> <span> Dashboard <span
                    class="badge badge-success badge-pill float-right"></span></span></a>
    </li>

    <li class="has_sub">
        <a href="#" class="waves-effect"><i class="dripicons-briefcase"></i>
            <span> Database </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="list-unstyled">
            <li><a href="{{ url('admin/master-data/barang') }}">Barang</a></li>
            <li><a href="{{ url('admin/master-data/kategori') }}">Kategori</a></li>
            <li><a href="{{ url('admin/master-data/supplier') }}">Supplier</a></li>

        </ul>
    </li>
    <li class="has_sub">
        <a href="#" class="waves-effect"><i class="fa fas fa-shopping-cart"></i>
            <span> Transaksi</span> <span class="menu-arrow float-right"><i
                    class="mdi mdi-chevron-right"></i></span></a>
        <ul class="list-unstyled">
            <li><a href="{{ url('admin/transaksi/penjualan') }}">Penjualan</a></li>
            <li><a href="{{ url('admin/transaksi/pembelian') }}">Pembelian</a></li>

        </ul>
    </li>
    <li class="menu-title">Report</li>
    <li>
        <a href="#">
            <i class="fa fas fa-book"></i> <span> Laporan <span
                    class="badge badge-success badge-pill float-right"></span></span></a>
    </li>
    <li class="menu-title">Sistem</li>
    <li>
        <a href="{{url('admin/user/index')}}">
            <i class="fa fa-users"></i> <span> User <span
                    class="badge badge-success badge-pill float-right"></span></span></a>
    </li>
    <li>
        <a href="{{url('pengaturan')}}">
            <i class="fa fa-cogs"></i> <span> Pengaturan <span
                    class="badge badge-success badge-pill float-right"></span></span></a>
    </li>
</ul>
