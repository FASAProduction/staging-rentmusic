<?php
if($this->session->userdata('masuk')!=TRUE){
?>
<!-- Nav Bar Start -->
<div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?php echo base_url(); ?>" class="nav-item nav-link">Beranda</a>
                            <a href="#" class="nav-item nav-link">Alat Musik</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Akun</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo base_url(); ?>index.php/login" class="dropdown-item">Masuk</a>
                                    <a href="<?php echo base_url(); ?>index.php/register" class="dropdown-item">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        <?php
}else{
        ?>
        <!-- Nav Bar Start -->
<div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?php echo base_url(); ?>" class="nav-item nav-link">Beranda</a>
                            <a href="#" class="nav-item nav-link">Alat Musik</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('ses_uname'); ?></a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo base_url(); ?>index.php/dashboard" class="dropdown-item">Dashboard</a>
                                    <a href="<?php echo base_url(); ?>index.php/login/logout" class="dropdown-item">Keluar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->    
    <?php } ?>   