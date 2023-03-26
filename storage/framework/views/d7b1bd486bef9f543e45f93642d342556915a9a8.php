<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a href="<?php echo e(route('dashboard')); ?>">Home</a>
                            </li>
                            <li><a href="<?php echo e(route('my-items')); ?>">Items</a>
                            </li>
                            <li><a href="<?php echo e(route('accounts')); ?>">Accounts</a>
                            </li>
                            <li><a href="<?php echo e(route('users')); ?>">Users</a>
                            </li>
                            <li><a href="<?php echo e(route('categories')); ?>">Categories</a>
                            </li>
                            <li><a href="<?php echo e(route('sub-categories')); ?>">Sub Categories</a>
                            </li>
                            <li><a href="<?php echo e(route('manufactures')); ?>">Manufactures</a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Purchase <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo e(route('purchase.purchase-form')); ?>">Purchase Items</a>
                                    </li>
                                    <li><a href="<?php echo e(route('purchase.purchase-list')); ?>">Purchase List</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Sales <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo e(route('sales.new-sale')); ?>">New Sale</a>
                                    </li>
                                    <li><a href="<?php echo e(route('sales.sales-list')); ?>">Sales List</a>
                                    </li>
                                    <li><a href="<?php echo e(route('sales.transfer-sale')); ?>">Transfer Sale</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo e(route('Banks')); ?>">Banks</a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Website Settings <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo e(route('front-sliders')); ?>">Slider</a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\afraa\OneDrive\Desktop\TestProject\wahab\resources\views/layout/mobile-menu.blade.php ENDPATH**/ ?>