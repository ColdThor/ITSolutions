<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        @if(session()->has('admin'))
            <?php
            $id = session()->get('userID');
            ?>
        <img src="/reality/storage/app/public/admins/admin_<?php echo $id?>/fotka.jpeg" class="img-circle" alt="User Image" style="height: 50px; width: 50px;">
        @endif
    </div>
    <div class="pull-left info">
        @if(session()->has('admin'))
            <p>{{session()->get('userName')}}</p>


            <a><i class="fa fa-circle text-success"></i> Online</a>
        @endif
    </div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    @if(session()->has('admin'))
    <li>
        <a href="<?php echo url('/it-admin/'); ?>"><i class="fa fa-pie-chart"></i> <span>Prehľad</span></a>
    </li>
    <li>
        <a href="<?php echo url('/it-admin/users'); ?>"><i class="fa fa-users"></i> <span>Používatelia</span></a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>Inzercia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo url('/it-admin/types'); ?>"><i class="fa fa-circle-o"></i>Typy inzercie</a></li>
            <li><a href="<?php echo url('/it-admin/specifications'); ?>"><i class="fa fa-circle-o"></i>Druhy inzercie</a></li>
            <li><a href="<?php echo url('/it-admin/conditions'); ?>"><i class="fa fa-circle-o"></i>Stavy inzercie</a></li>
            <li><a href="<?php echo url('/it-admin/inzercia'); ?>"><i class="fa fa-circle-o"></i>Inzeráty</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo url('/it-admin/profile'); ?>"><i class="fa fa-user"></i> <span>Profil</span></a>
    </li>
    <li>
        <a href="<?php echo url('/it-admin/register'); ?>"><i class="fa fa-user"></i> <span>Pridať admina</span></a>
    </li>
        <li>
            <a href="<?php echo url('/it-admin/newsletter'); ?>"><i class="fa fa-users"></i> <span>Newsletter</span></a>
        </li>
    <li>
        @endif
        @if(session()->has('admin'))
            <a href="<?php echo url('/it-admin/logout'); ?>"><i class="fa fa-sign-out"></i> <span>Odhlásiť sa</span></a>
        @else
            <a href="<?php echo url('/it-admin/login'); ?>"><i class="fa fa-sign-out" style="margin-left: 20px"></i> <span style="margin-left: 20px">Prihlásiť sa</span></a>
        @endif
    </li>

</ul>
<!-- /.sidebar -->