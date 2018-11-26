<?php $__env->startSection('content'); ?>

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Berita
                    <small><?php echo e($berita->judul); ?>

                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li><a href="<?php echo e(url('/berita')); ?>">Berita</a></li>
                    <li class="active"><?php echo e($berita->judul); ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo e(URL::asset('public/images/berita/'.$berita->pic)); ?>" alt="">
                <!-- Blog Post -->
				<h3><?php echo e($berita->judul); ?><br>
                    <small><i class="fa fa-clock-o"></i> Posted on <?php echo e($berita->updated_at); ?></small>
                </h3><br>
                <!-- Post Content -->
               
                <p style="white-space: pre-wrap"><?php echo e($berita->isi); ?></p>

                <hr>

                

                
                
                    
                    
                        
                            
                        
                        
                    
                

                

                

                
                
                    
                        
                    
                    
                        
                            
                        
                        
                    
                

                
                
                    
                        
                    
                    
                        
                            
                        
                        
                        
                        
                            
                                
                            
                            
                                
                                    
                                
                                
                            
                        
                        
                    
                

            

            
            

                
                
                    
                    
                        
                        
                            
                        
                    
                    
                

                
                
                    
                    
                        
                            
                                
                                
                                
                                
                                
                                
                                
                                
                            
                        
                        
                            
                                
                                
                                
                                
                                
                                
                                
                                
                            
                        
                    
                    
                

                
                
                    
                    
                

            </div>

        </div>
        <!-- /.row -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>