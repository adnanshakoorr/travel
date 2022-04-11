<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Travel Dream</title>
    <link rel="shortcut icon" href="<?= base_url('assets/front/images/favicon.png');?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/alert.css');?>" /> 

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/front/css/style.css');?>">
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/admin/js/alert.js');?>"></script>
</head>

<body>
     <?php if($this->session->flashdata('success')):?>
        <script>alert_success("<?php echo $this->session->flashdata('success')?>");</script>
    <?php endif;?>
    <?php if($this->session->flashdata('error')):?>
        <script>alert_danger("<?php echo $this->session->flashdata('error')?>");</script>
    <?php endif;?>

    <div class="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 bg-img">
                    <div class="bg-img-inner">
                        <div class="info">
                            <div class="center">
                                <h1>Welcome To <br> Travel Dream</h1>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Ipsum has been the industry's standard dummy </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 form-info">
                    <div class="form-section">
                        <div class="form-section-innner">
                            <div class="logo clearfix">
                                <a href="login.html">
                                    <img src="<?= base_url('assets/front/images/logo1.png');?>" class="img-fluid">
                                </a>
                            </div>
                            <h3>LogIn to Your Account</h3>
                            <div class="btn-section clearfix">
                                <a href="<?= base_url('login');?>" class="link-btn active btn-1 default-bg">Login</a>
                                <a href="<?= base_url('signup');?>" class="link-btn btn-2 active-bg">Sign Up</a>
                            </div>
                            <div class="login-inner-form">
                                <form action="<?= base_url('login/sigin');?>" method="post">
                                  
                                    <div class="form-group form-box clearfix">
                                        <input name="e" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address" required>
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    
                                    <div class="form-group form-box clearfix">
                                        <input name="p" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password" required>
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    
                                    <div class="checkbox form-group clearfix">
                                        <div class="form-check float-start">
                                            <input class="form-check-input" type="checkbox" id="rememberme">
                                            <label class="form-check-label" for="rememberme">
                                                Remember me
                                            </label>
                                        </div>
                                        <!-- <a href="forgot-password.html" class="link-light float-end forgot-password">Forgot password?</a> -->
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-theme">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>