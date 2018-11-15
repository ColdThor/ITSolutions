<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('admin-theme/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li>
        <a href="<?php echo url('/'); ?>"><i class="fa fa-pie-chart"></i> <span>Prehľad</span></a>
    </li>
    <li>
        <a href="<?php echo url('/users'); ?>"><i class="fa fa-users"></i> <span>Používatelia</span></a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>Inzercia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo url('/types'); ?>"><i class="fa fa-circle-o"></i>Typy inzercie</a></li>
            <li><a href="<?php echo url('/specifications'); ?>"><i class="fa fa-circle-o"></i>Druhy inzercie</a></li>
            <li><a href="<?php echo url('/conditions'); ?>"><i class="fa fa-circle-o"></i>Stavy inzercie</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-user"></i> <span>Profil</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-sign-out"></i> <span>Odhlásiť sa</span></a>
    </li>
</ul>
<!-- /.sidebar -->