<!-- [ Sidebar Menu ] start -->
 <?php if ($sidebar == 'referensi') {
    $li1 = '<li class="pc-item pc-hasmenu pc-trigger active">';
    $li2 = '<li class="pc-item">';
?>
<?php } else if ($sidebar == 'kod_rek') {
    $li1 = '<li class="pc-item pc-hasmenu pc-trigger">';
    $li2 = '<li class="pc-item active">';
?>
<?php } ?>
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="<?php echo site_url('ref') ?>" class="b-brand text-primary align-items-center" style="padding-top: 10px;">
        <!-- ========   Change your logo from here   ============ -->
        <!-- <img src="<?php echo base_url('assets/images/logo-dark.svg') ?>" alt="logo image" class="logo-lg" /> -->
        <h2 style="color:black">SMARTERP</h2>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <?php echo $li1; ?>
          <a href="<?php echo site_url('ref') ?>" class="pc-link"><span class="pc-micon"> <i class="ph ph-clipboard"></i> </span><span class="pc-mtext">Referensi</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <?php echo $li2; ?>
              <a href="<?php echo site_url('kod_rek') ?>" class="pc-link" style="padding: 12px 30px 12px 50px;">
                <span class="pc-micon"><i class="ph ph-credit-card"></i></span>
                <span class="pc-mtext">Kode Rekening Akutansi</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="../elements/icon-feather.html" class="pc-link" style="padding: 12px 30px 12px 50px;">
                <span class="pc-micon"><i class="ph ph-calendar"></i></span>
                <span class="pc-mtext">Tahun Buku</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="../elements/icon-feather.html" class="pc-link" style="padding: 12px 30px 12px 50px;">
                <span class="pc-micon"><i class="ph ph-book"></i></span>
                <span class="pc-mtext">Tutup Buku</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="../elements/icon-feather.html" class="pc-link" style="padding: 12px 30px 12px 50px;">
                <span class="pc-micon"><i class="ph ph-file-text"></i></span>
                <span class="pc-mtext">Format SMS Informasi Pembayaran</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="../elements/icon-feather.html" class="pc-link" style="padding: 12px 30px 12px 50px;">
                <span class="pc-micon"><i class="ph ph-phone-call"></i></span>
                <span class="pc-mtext">Riwayat Pengiriman SMS Informasi Pembayaran</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="../elements/icon-feather.html" class="pc-link" style="padding: 12px 30px 12px 50px;">
                <span class="pc-micon"><i class="ph ph-phone-outgoing"></i></span>
                <span class="pc-mtext">Kirim SMS Tagihan Informasi Pembayaran</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu pc-trigger">
          <a href="#!" class="pc-link"><span class="pc-micon"> <i class="ph ph-gear"></i> </span><span class="pc-mtext">Pengaturan</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item">
              <a href="../elements/icon-feather.html" class="pc-link" style="padding: 12px 30px 12px 50px;">
                <span class="pc-micon"><i class="ph ph-users"></i></span>
                <span class="pc-mtext">Daftar Pengguna</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="../elements/icon-feather.html" class="pc-link" style="padding: 12px 30px 12px 50px;">
                <span class="pc-micon"><i class="ph ph-lock"></i></span>
                <span class="pc-mtext">Ganti Password</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="pc-item"><a href="../other/sample-page.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph ph-power"></i>
            </span>
            <span class="pc-mtext">Keluar</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->