<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="left-side-logo d-block d-lg-none">
            <div class="text-center">

                <a href="{{ url('admin/beranda') }}" class="logo"><img src="assets/images/kasir.png" height="20"
                        alt="logo"></a>
            </div>
        </div>
        {{-- <div class="text-center">
            <h5>KasirKite</h5>
        </div> --}}
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            @include($menu)
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
