<ul>
    <li class="menu-title">Main</li>

    <li>
        <a href="{{ url('kasir/main') }}" class="waves-effect">
            <i class="dripicons-meter"></i>
            <span> Dashboard <span class="badge badge-success badge-pill float-right"></span></span>
        </a>
    </li>


    <li class="has_sub">
        <a href="#"><i class="fa fas fa-shopping-cart"></i>
            <span> Transaksi</span> <span class="menu-arrow float-right"><i
                    class="mdi mdi-chevron-right"></i></span></a>
        <ul class="list-unstyled">
            <li><a href="{{url('transaksi/penjualan/index')}}">Penjualan</a></li>
            <li><a href="{{url('transaksi/pembelian')}}">Pembelian</a></li>

        </ul>
    </li>


</ul>