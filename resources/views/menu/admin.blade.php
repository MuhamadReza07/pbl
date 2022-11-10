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
        <a href="#" class="waves-effect"><i class="dripicons-broadcast"></i>
            <span> Transaksi</span> <span class="menu-arrow float-right"><i
                    class="mdi mdi-chevron-right"></i></span></a>
        <ul class="list-unstyled">
            <li><a href="{{ url('admin/transaksi/penjualan') }}">Penjualan</a></li>
            <li><a href="advanced-rating.html">Pembelian</a></li>

        </ul>
    </li>

    <li class="has_sub">
        <a href="#" class="waves-effect"><i class="dripicons-document"></i>
            <span> Laporan</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="list-unstyled">
            <li><a href="form-elements.html">Penjualan</a></li>
            <li><a href="form-validation.html">Pembelian</a></li>

        </ul>
    </li>
</ul>
