<style>
    li.nav-item{
        margin-bottom: -10px;
    }
</style>
<nav id="sidebar">
    <div class="sidebar-header">
        <a href="<?php echo e(route('admin-dashboard')); ?>">
            <?php if(Auth::user()): ?>
                <?php if(Auth::user()->logo): ?>
                <img src="<?php echo e(asset('public/users').'/'.Auth::user()->logo); ?>" style="width: 100px;">
                <?php endif; ?>
            <?php endif; ?>
        </a>
        <h3>Point of Sale</h3>
        <?php if(Auth::user()): ?>
            <p><?php echo e(ucfirst(Auth::user()->type)); ?></p>
        <?php endif; ?>
        <strong>WPOS</strong>
    </div>
    <div class="left-custom-menu-adp-wrap">
        <ul class="nav navbar-nav left-sidebar-menu-pro">
            
            <?php if(Auth::user()->type == 'Admin'): ?>
            <li class="nav-item">
                <a href="<?php echo e(route('my-items')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Items</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('accounts')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Accounts</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('users')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Users</span></a>
            </li>
           
            <!-- <li class="nav-item">
                <a href="<?php echo e(route('categories')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list"></i> <span class="mini-dn">Categories</span></a>
            </li> -->
            <!--  -->
            
            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-shopping-basket"></i> <span class="mini-dn">Purchase</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                    <a href="<?php echo e(route('purchase.purchase-form')); ?>" class="dropdown-item">New Purchase</a>
                    
                    <a href="<?php echo e(route('purchase.purchase-list')); ?>" class="dropdown-item">Purchase List</a>
                    
                </div>
            </li>
            <?php endif; ?>
            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-shopping-cart"></i> <span class="mini-dn">Sales</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                    <a href="<?php echo e(route('sales.new-sale')); ?>" class="dropdown-item">New Sale</a>
                    <?php if(Auth::user()->type == 'Admin'): ?>
                    <a href="<?php echo e(route('sales.sales-list')); ?>" class="dropdown-item">Sales List</a>
                    
                    <?php endif; ?>
                    
                </div>
            </li>
            
            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-shopping-cart"></i> <span class="mini-dn">Payments</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                    <?php if(Auth::user()->type == 'Admin'): ?>
                        <a href="<?php echo e(route('payment.purchase-payment')); ?>" class="dropdown-item">Purchases</a>
                    <?php endif; ?>
                    <a href="<?php echo e(route('payment.sale-payment')); ?>" class="dropdown-item">Receivables</a>
                    
                </div>
            </li>
            <?php if(Auth::user()->type == 'Admin'): ?>
            <!-- <li class="nav-item">
                <a href="<?php echo e(route('stock-management')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Stock Management</span></a>
            </li> -->
            <!-- <li class="nav-item">
                <a href="<?php echo e(route('reorder-items')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Re-Orders</span></a>
            </li> -->
            
            
            
            <li class="nav-item">
                <a href="<?php echo e(route('expenses')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-money"></i> <span class="mini-dn">Expenses</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('profile')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-money"></i> <span class="mini-dn">Admin Profile</span></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin-logout')); ?>" class="nav-link dropdown-toggle"><i class="fa big-icon fa-money"></i> <span class="mini-dn">Logout</span></a>
            </li>
            <?php endif; ?>
            
            
        </ul>
    </div>
</nav><?php /**PATH C:\Users\afraa\OneDrive\Desktop\projects\sakhawat-latest\resources\views/layout/left-sidebar.blade.php ENDPATH**/ ?>