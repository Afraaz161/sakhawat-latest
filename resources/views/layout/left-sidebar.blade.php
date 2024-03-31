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
            @if (Auth::user()->type == 'Admin')
            <li class="nav-item">
                <a href="{{ route('my-items') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Items</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('accounts') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Create Customer</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Users</span></a>
            </li>
            @endif
            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-shopping-cart"></i> <span class="mini-dn">Sales</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                    <a href="{{ route('sales.new-sale') }}" class="dropdown-item">New Order</a>
                    @if (Auth::user()->type == 'Admin')
                    <a href="{{ route('sales.sales-list') }}" class="dropdown-item">Orders List</a>
                    @endif
                </div>
            </li>
            
            @if (Auth::user()->type == 'Admin')
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
        </ul>
    </div>
</nav>