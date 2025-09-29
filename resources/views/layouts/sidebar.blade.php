<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('user-profile.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('kategori.index') }}"><i class="fa fa-list"></i> <span>Kategori</span></a></li>
            <li><a href="{{ route('products.index') }}"><i class="fa fa-cubes"></i> <span>Produk</span></a></li>
            <li><a href="{{ route('customers.index') }}"><i class="fa fa-users"></i> <span>Pelanggan</span></a></li>
            <li><a href="{{ route('suppliers.index') }}"><i class="fa fa-truck"></i> <span>Pemasok</span></a></li>
            <li><a href="{{ route('productsOut.index') }}"><i class="fa fa-minus"></i> <span>Produk keluar</span></a></li>
            <li><a href="{{ route('productsIn.index') }}"><i class="fa fa-cart-plus"></i> <span>Produk Masuk</span></a></li>

            @if(\Auth::user()->role !== 'staff')
                <li><a href="{{ route('user.index') }}"><i class="fa fa-user-secret"></i> <span>Pengguna</span></a></li>
            @endif
        </ul>
    </section>
</aside>
