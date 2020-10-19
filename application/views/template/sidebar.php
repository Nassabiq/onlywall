<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" style="overflow-y: hidden;" href="<?php echo base_url("/Admin"); ?>"><img class="ml-2" style="width: 150px;" src="<?= base_url('/upload/LOGO-ONLYWALL-putih.png'); ?>" alt="OwLogo"></a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("/Admin"); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cart-plus"></i>
            <span>Product</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo base_url('Produk'); ?>">Lihat Produk</a>
                <a class="collapse-item" href="<?php echo base_url('Produk/add_product'); ?>">Tambah Produk</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Blog Article</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo base_url('Artikel'); ?>">Kelola Artikel</a>
                <a class="collapse-item" href="<?php echo base_url('Artikel/add_artikel'); ?>">Tambah Artikel</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class=" sidebar-divider">

    <?php if ($this->session->userdata('role_id') == 1) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Admin Menu
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Account </span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('Account/addAccount'); ?>">Registrasi Akun</a>
                    <a class="collapse-item" href="<?= base_url('Account'); ?>">Kelola Akun</a>
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php endif; ?>

    <!-- Heading -->
    <div class="sidebar-heading">
        Action
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('Profile'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('OwLogin/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout </span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- End of Sidebar -->