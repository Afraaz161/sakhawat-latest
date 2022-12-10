<style>
    li.nav-item{
        margin-bottom: -10px;
    }
</style>
<nav id="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin-dashboard') }}">
            @if (Auth::user())
                @if(Auth::user()->logo)
                <img src="{{ asset('public/users').'/'.Auth::user()->logo }}" style="width: 100px;">
                @endif
            @endif
        </a>
        <h3>Point of Sale</h3>
        @if (Auth::user())
            <p>{{ucfirst(Auth::user()->type)}}</p>
        @endif
        <strong>WPOS</strong>
    </div>
    <div class="left-custom-menu-adp-wrap">
        <ul class="nav navbar-nav left-sidebar-menu-pro">
            {{-- <li class="nav-item">
                <a href="{{ route('admin-dashboard') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"></span></a>
            </li> --}}
            @if (Auth::user()->type == 'Admin')
            <li class="nav-item">
                <a href="{{ route('my-items') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Items</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('accounts') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Accounts</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Users</span></a>
            </li>
           
            <li class="nav-item">
                <a href="{{ route('categories') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list"></i> <span class="mini-dn">Categories</span></a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('sub-categories') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list"></i> <span class="mini-dn">Sub-Categories</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('brands') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list"></i> <span class="mini-dn">Brands</span></a>
            </li> --}}
            {{-- <li class="nav-item">
                <a href="{{ route('manufactures') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list"></i> <span class="mini-dn">Manufactures</span></a>
            </li> --}}
            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-shopping-basket"></i> <span class="mini-dn">Purchase</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                    <a href="{{ route('purchase.purchase-form') }}" class="dropdown-item">New Purchase</a>
                    {{-- @if (Auth::user()->type == 'Admin') --}}
                    <a href="{{ route('purchase.purchase-list') }}" class="dropdown-item">Purchase List</a>
                    {{-- @endif --}}
                </div>
            </li>
            @endif
            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-shopping-cart"></i> <span class="mini-dn">Sales</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                    <a href="{{ route('sales.new-sale') }}" class="dropdown-item">New Sale</a>
                    @if (Auth::user()->type == 'Admin')
                    <a href="{{ route('sales.sales-list') }}" class="dropdown-item">Sales List</a>
                    {{-- <a href="{{ route('sales.sales-return') }}" class="dropdown-item">Sales Return</a> --}}
                    @endif
                    {{-- <a href="{{ route('sales.transfer-sale') }}" class="dropdown-item">Transfer Sale</a> --}}
                </div>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('Banks') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-university"></i> <span class="mini-dn">Banks</span></a>
            </li> --}}
            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-shopping-cart"></i> <span class="mini-dn">Payments</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                    @if (Auth::user()->type == 'Admin')
                        <a href="{{ route('payment.purchase-payment') }}" class="dropdown-item">Purchases</a>
                    @endif
                    <a href="{{ route('payment.sale-payment') }}" class="dropdown-item">Receivables</a>
                    {{-- <a href="{{ route('payment.other-payment') }}" class="dropdown-item">Others Payment</a> --}}
                </div>
            </li>
            @if (Auth::user()->type == 'Admin')
            <li class="nav-item">
                <a href="{{ route('stock-management') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Stock Management</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reorder-items') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Re-Orders</span></a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('generate-barcode') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-barcode"></i> <span class="mini-dn">Barcodes</span></a>
            </li> --}}
            {{-- <li class="nav-item">
                <a href="{{ route('blacklist-items') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Black List</span></a>
            </li> --}}
            {{-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart"></i> <span class="mini-dn">Reports</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                    <a href="{{ route('report.sale-report') }}" class="dropdown-item">Sales</a>
                    <a href="{{ route('report.profit-report') }}" class="dropdown-item">Profit/Loss</a>
                </div>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('expenses') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-money"></i> <span class="mini-dn">Expenses</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-money"></i> <span class="mini-dn">Admin Profile</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin-logout') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-money"></i> <span class="mini-dn">Logout</span></a>
            </li>
            @endif
            {{-- <li class="nav-item">
                <a href="{{ route('Banks') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-university"></i> <span class="mini-dn">Payments</span></a>
            </li> --}}
            {{-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-cog"></i> <span class="mini-dn">Website Settings</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                    <a href="{{ route('front-sliders') }}" class="dropdown-item">Slider</a>
                </div>
            </li> --}}
        </ul>
    </div>
</nav>