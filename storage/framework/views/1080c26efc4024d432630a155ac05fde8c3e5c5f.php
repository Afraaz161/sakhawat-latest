<div class="header-top-area">
    <div class="fixed-header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="admin-logo logo-wrap-pro">
                        <a href="#"><img src="<?php echo e(asset('img/logo/log.png')); ?>" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                        <ul class="nav navbar-nav mai-top-nav">
                            <li class="nav-item"><a href="<?php echo e(route('admin-dashboard')); ?>" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item"><a href="<?php echo e(route('sales.new-sale')); ?>" class="nav-link">New Invoice</a>
                            </li>
                            <?php if(Auth::user()->type == 'Admin'): ?>
                                <li class="nav-item"><a href="<?php echo e(route('purchase.purchase-form')); ?>" class="nav-link">New Purchase</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <?php if(Auth::user()): ?>
                                        <span class="admin-name"><?php echo e(Auth::user()->name); ?></span>
                                    <?php else: ?>
                                        <span class="admin-name">Moin Abbas</span>
                                    <?php endif; ?>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="<?php echo e(route('profile')); ?>"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                    </li>
                                    <li><a href="<?php echo e(route('admin-logout')); ?>"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH E:\projects\pos\sakhawat-latest\resources\views/layout/header-top-area.blade.php ENDPATH**/ ?>