<x-module.kasir menu="menu.kasir">
    <h1 class="mx-2 text-dark">Hallo, {{ Auth::user()->username }}</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-primary text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cube-outline float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0">New Orders</h6>
                </div>
                <div class="card-body">
                    <div class="pb-4">

                    </div>
                    <div class="mt-4 text-muted">
                        <div class="float-right">

                        </div>


                    </div>
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
                </div>
                <div class="card-body">
                    <div class="pb-4">

                    </div>
                    <div class="mt-4 text-muted">
                        <div class="float-right">

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-primary text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0">Average Price</h6>
                </div>
                <div class="card-body">
                    <div class="pb-4">

                    </div>
                    <div class="mt-4 text-muted">
                        <div class="float-right">

                        </div>


                    </div>
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
                <div class="card-body">
                    <div class="pb-4">

                    </div>
                    <div class="mt-4 text-muted">
                        <div class="float-right">

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.kasir>
