<?php $__env->startSection('land'); ?>

 <!-- Full Page Intro -->
    <div class="view " style="background-image: url('images/land2.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    
                    <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow "  id="contenedor">
                        <h1 class="h1-responsive font-weight-bold mt-sm-5 texto1" >Comparte lo que sabes y aprende lo que deseas</h1>
                        <hr class="hr-light">
                        <h6 class="mb-4 texto1">Un lugar en donde encontrarás un sin fin de tutoriales que te ayudarán a expandir tus
                            conocimientos y habilidades, que se convertirá en tu caja de tesoros.</h6>
                        
                        <a href="<?php echo e(route('register')); ?>" class="btn  btn-light rounded">Registrarse</a>
                        <a href="<?php echo e(route('login')); ?>" class="btn rounded btn-outline-light">Iniciar Sesión</a>
                    
                    </div>
              
                 </div>
            <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ejemplo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PF_PAPW2\resources\views/nav_bar2.blade.php ENDPATH**/ ?>