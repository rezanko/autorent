<?php $__env->startSection('content'); ?>



<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Buku Tamu
                <small>Contact Us</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="active">Buku Tamu</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        
            
            
        
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Contact Details</h3>
            <p>
                Jl. HOS Cokroaminoto No.9<br>Ungaran Barat, Kab. Semarang<br>
            </p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">P</abbr>: 080000055550</p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">E</abbr>: <a href="mailto:rezanko@mbuh.com">rezanko@mbuh.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i>
                <abbr title="Hours">H</abbr>: Monday - Saturday: 9:00 AM to 5:00 PM</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    
        <div class="col-md-8">
            <h3>Send us a Message</h3>
            <form name="bukutamu" id="contactForm" method="POST" action="<?php echo e(url('/tamu/add')); ?>" novalidate>
              <?php echo e(csrf_field()); ?>

                <div class="control-group form-group">
                    <div class="controls">
                        <label>Nama Lengkap:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>No. Telepon:</label>
                        <input type="tel" class="form-control" id="phone" name="telp" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Alamat Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Pesan:</label>
                        <textarea rows="10" cols="100" class="form-control" id="pesan" name="pesan" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>

                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

    </div>
    <!-- /.row -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>