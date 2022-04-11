<!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel Dream</title>
        <link rel="shortcut icon" href="<?= base_url();?>assets/front/images/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <!-- Animate CDN -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="<?= base_url();?>assets/front/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/alert.css');?>" />  
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Jquery CDN -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//geodata.solutions/includes/countrystatecity.js"></script>
        <script src="<?php echo base_url('assets/admin/js/alert.js');?>"></script>
    </head>

    <body>

        <?php if($this->session->flashdata('success')):?>
            <script>alert_success("<?php echo $this->session->flashdata('success')?>");</script>
        <?php endif;?>
        <?php if($this->session->flashdata('error')):?>
            <script>alert_danger("<?php echo $this->session->flashdata('error')?>");</script>
        <?php endif;?>
        
        <header>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light  main_header">
                    <a class="navbar-brand" href="#"><img src="<?= base_url();?>assets/front/images/logo.png" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main_nav justify-content-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-item nav-link" href="<?= base_url();?>">Home</a>
                            <a class="nav-item nav-link" href="<?= base_url('activity');?>">travel guides</a>
                        </div>
                        <?php if($this->session->userdata('auth')){ ?>
                        <div class="navbar-nav">
                            <a class="nav-item nav-link btn_login d-flex justify-content-center" href="<?= base_url('login/logout');?>"><i class="fa  fa-rocket mr-2"></i> log out</a>
                        </div>
                    <?php } else { ?>
                        <div class="navbar-nav">
                            <a class="nav-item nav-link btn_login d-flex justify-content-center" href="<?= base_url('login');?>"><i class="fa  fa-rocket mr-2"></i> log in</a>
                            <a class="nav-item nav-link btn_login d-flex justify-content-center" href="<?= base_url('signup');?>"><i class="fa fa-sign-in-alt mr-2"></i> sign
                            up</a>
                        </div>
                    <?php } ?>
                    </div>
                </nav>
            </div>
        </header>
