<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Styles -->
    
    <link href="<?php echo e(asset('css/inicio.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/canal.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/land.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/subirVideo.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    

    <title>TreasureBox</title>
</head>
<body>
<header>

 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top  shadow">
        
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/Inicio')); ?>">
            <img src="/images/logo.png" height="40" alt="mdb logo">
        </a>
        <a class="navbar-brand" href="<?php echo e(url('/Inicio')); ?>">
            <strong>TreasureBox</strong>
        </a>
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link" href="#about" data-offset="90">Programación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" data-offset="90">Animación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" data-offset="90">Edición</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" data-offset="90">Modelado</a>
            </li>
        </ul> 
        <ul class="navbar-nav ml-auto">
            <ul class="navbar-nav mr-auto">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
            <ul></ul>
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                <?php endif; ?>
                <?php else: ?>
                    
                        
                        <a class="nav-link" href="<?php echo e(url('/upload')); ?>" data-offset="90"><i class="far fa-file-video fa-2x"></i></a>
                    
                    <li class="nav-item">
                        <img src="/storage/userPics/<?php echo e(Auth::user()->fileAvatar); ?>" alt="Avatar" class="avatar list-inline-item">
                    </li>
                    <li class="nav-item dropdown">
                        
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->username); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('mychannel')); ?>"> <?php echo e(__('My channel')); ?> </a>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <?php echo e(__('Logout')); ?> </a>
                            
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
            <?php endif; ?>
        </ul>
         
    </div>
</nav>

<?php echo $__env->yieldContent('land'); ?>
<?php echo $__env->yieldContent('inicio'); ?>
<?php echo $__env->yieldContent('upload'); ?>
<?php echo $__env->yieldContent('canalUsuario'); ?>
     

    
</header>
    
</body>

</html>







    


<?php /**PATH C:\xampp\htdocs\PF_PAPW2\resources\views/layouts/ejemplo.blade.php ENDPATH**/ ?>