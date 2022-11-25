<x-module.admin menu="menu.admin">
    <h1 class="mx-2 text-dark">Hallo, {{ Auth::user()->username }}</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-primary text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cube-outline float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0">Jumlah Barang</h6>
                    <h1>{{ $totalBarang }}</h1>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-primary text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-network float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0">Supplier</h6>
                    <h1>{{ $totalSupplier }}</h1>
                </div>

            </div>
        </div>
        {{-- <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-primary text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0">Average Price</h6>
                    <h1></h1>
                </div>
                
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-primary text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cart-outline float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0">Total Sales</h6>
                </div>
                
            </div>
        </div> --}}
    </div>
    </x-modu.admin>
