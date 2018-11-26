<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AutoRent - Sewa Mobil Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo e(URL::asset('css/modern-business.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="<?php echo e(URL::asset('font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">AutoRent</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- <ul class="nav navbar-nav navbar-right"> -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- <li>
                        <a href="/">Home</a>
                    </li> -->
                    <li>
                        <a href="<?php echo e(url('/types')); ?>">Sewa Mobil</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/berita')); ?>">Berita</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/tamu')); ?>">Buku Tamu</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php if(!Auth::check()): ?>
                    <li>
                        <a href="<?php echo e(url('/login')); ?>"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Login</a>
                    </li>

                    <li>
                        <a href="<?php echo e(url('/register')); ?>"><span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>  Register</a>
                    </li>

                  <?php else: ?>
                      <li>
                          <a href="<?php echo e(url('/cart')); ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a>
                      </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                            <li>
                                <a href="<?php echo e(url('/orders')); ?>">
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                    Order Anda
                                </a>
                            </li>
                            <br>

                          <li>
                              <a href="<?php echo e(url('/data_diri')); ?>">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                Ubah Data Diri
                              </a>
                          </li>

                          <?php if(Auth::user()->admin): ?>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo e(url('/admin')); ?>">
                                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                  Admin Page
                                </a>
                            </li>
                          <?php endif; ?>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="<?php echo e(url('/logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                  <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php if(session('sukses')): ?>
        <div class="alert alert-dismissible alert-success alert-" align="center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h3 class="text-success"><strong>Sukses! </strong><?php echo e(session('sukses')); ?></h3>
        </div>
    <?php endif; ?>

    <?php if(session('gagal')): ?>
        <div class="alert alert-dismissible alert-danger" align="center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h3 class="text-danger"><strong>Error!</strong> <?php echo e(session('gagal')); ?></h3>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Muchammad Mahdi 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo e(URL::asset('js/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
