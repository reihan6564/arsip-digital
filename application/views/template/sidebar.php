<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="far fa-envelope"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Arsip Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dokumen Arsip
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/doc_keluar'); ?>">
            <i class="fas fa-envelope-open"></i>
            <span>Dokumen Arsip Keluar</span>
        </a>
        <a class="nav-link" href="<?= base_url('admin/doc_masuk'); ?>">
            <i class="fas fa-envelope"></i>
            <span>Dokumen Arsip Masuk</span>
        </a>
        <a class="nav-link" href="<?= base_url('admin/pencarian_dokumen'); ?>">
            <i class="fas fa-search"></i>
            <span>Pencarian</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kategori
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kategori_doc'); ?>">
            <i class="fas fa-align-justify"></i>
            <span>Kategori</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Laporan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/laporan_doc'); ?>">
            <i class="fas fa-folder-open"></i>
            <span>Laporan </span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item" hidden>
        <a href="<?= base_url('auth/logout'); ?>" class="nav-link" href="index.html">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>
    <!-- Heading -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->