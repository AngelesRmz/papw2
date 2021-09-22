<?php $__env->startSection('canalUsuario'); ?>

<div class="canalPage"> 
<div class="cabecera">
        
        <img class="coverImage" src="/storage/userPics/<?php echo e(Auth::user()->filePortada); ?>"  id="Angeles" onclick="modImag()">
		
        <img class="photoImage" src="/storage/userPics/<?php echo e(Auth::user()->fileAvatar); ?>">

    </div>
    <div class="infoPage">
	<div class="usersFollow">
            <div class="contenedor">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="./image/lisa.jpg" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="./image/lisa.jpg" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedor">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="seguidores">Seguidores</div>
	</div>
	<div class="usersFollowers">
            <div class="contenedorU">
		<img src="/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text" onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="contenedorU">
		<img src=""/images/tut1.png" class="imagen">
		<div class="overlay">
                    <div class="text"onclick="canal()">Usuario</div>
		</div>
            </div>
            <div class="seguidores">Seguidos</div>
	</div>
	<button class="seguir">Seguir</button>
	<h2><?php echo e(Auth::user()->username); ?></h2>
	<p><em><?php echo e(Auth::user()->email); ?></em></p> <!-- CAMBIAR!!-->
    </div>
    <div class="userVideo">
        
        
        
        <ul class="imagesVideos">
       
            <li>
                <div class="imageBox">
                    <figure>
                        <img src="/images/tut1.png">
                        <figcaption>
                            <h1 id="<%=idVid%>">Modela 3D en Maya</h1> <br>
                                <a onclick="obNum(this)" id="<%=idVid%>" href="Video.jsp"> Ver video</a>
                                <a onclick="obNum(this)" id="<%=idVid%>" href="EliminarVideo"> Eliminar</a>
                                <a onclick="obNum(this)" id="<%=idVid%>" href="ModificarVideo.jsp"> Modificar</a>
                            
                        </figcaption>
                    </figure>
                </div>
            </li>
                        
           </div>  

</div>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ejemplo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PF_PAPW2\resources\views/canalUsuario.blade.php ENDPATH**/ ?>