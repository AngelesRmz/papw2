<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Login</title>

    <link href="<?php echo e(asset('css/registro.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/login.js')); ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
    </head>
<body class="loginPage">
	<div class="main">
        <div class="container middle">
            <div class="card card-1 vertical-middle card-login">
                <div class="card-body">
                    <br>
                    <div class="image-reg text-center">
                        <img class="image-reg " src="images/logo-text.png" class="img-fluid" alt="sing up image">
                    </div>
                    <br>
                    <h2 class="form-title text-center font-weight-bold">LOGIN</h2>
                    <br>
                    <form method="POST" action="<?php echo e(route('login')); ?>" class="register-form" id="register-form" autocomplete="off">
                        <?php echo csrf_field(); ?>

                        <div class="form-group <?php echo e($errors->has('identity') ? 'has-error' : ''); ?> ">
                            <label for="identity"><i class="fas fa-user"></i></label>
                            <input type="text" name="identity" value="<?php echo e(old('identity')); ?>" placeholder="UserName o Email"/>

                            <?php if($errors->has('identity')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('identity')); ?></strong>
                                </span>
                            <?php endif; ?>
                         
                        </div>

                        <br>

                        <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?> ">
                            <label for="password"><i class="fas fa-unlock-alt"></i></i></label>
                            <input type="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password"/>
                            
                            <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                            <?php endif; ?>

                        </div>
                        <br>
                        <div class="form-group">
                            <input class="" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="remember">
                                <?php echo e(__('Remember Me')); ?>

                            </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="signup" id="signup" class="form-submit btn btn-primary btn-lg" value="Sign In"/>
                        </div>
                        

                    </form> 
                    <div class="form-group text-center">
                        <a href="<?php echo e(route('register')); ?>" class="signup-image-link">I´m not a member. <strong>SIGNUP</strong> </a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\PF_PAPW2\resources\views/login.blade.php ENDPATH**/ ?>