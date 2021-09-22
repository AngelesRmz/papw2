<?php $__env->startSection('upload'); ?>


<script>
        var input = document.getElementById('upload');
        var img = document.getElementById('thumbnail');
        var imgURL = document.getElementById('pURL');
        var image;
        
        input.addEventListener('change', function(event){
            var file = this.files[0];
            var url = URL.createObjectURL(file);
        
            var video = document.createElement('video');
            video.src = url;
        
            var snapshot = function(){
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
        
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                image = canvas.toDataURL('image/png');
                img.src = canvas.toDataURL('image/png');
                imgURL.value = image;
                
              
                video.removeEventListener('canplay', snapshot);
            };
        
            video.addEventListener('canplay', snapshot);
        });
        </script>

    <div class="datosvideo">
        <div class="box">
            <form action="<?php echo e(route('upVid')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <br>
                <div class="form-group <?php echo e($errors->has('nameVideo') ? 'has-error' : ''); ?>">
                    <input type="text" name="nameVideo" value="<?php echo e(old('nameVideo')); ?>" required placeholder="Video Name"/>
                    
                </div>
                <div class="form-group custom-file">
                    <input type="file" name="video" class="custom-file-input" required>
                    <label class="custom-file-label" for="video">Video File</label>
                </div>
                <br>
                <br>
                <div class="form-group custom-file">
                    <input type="file" name="imageVideo" class="custom-file-input" required>
                    <label class="custom-file-label" for="imageVideo">Image Video</label>
                </div>
                <br>
                <br>
                <label>Categoria</label><br>
                <div class="" style="height: 140px;">	
                    <select  name="Cat">
                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"> <?php echo e($category->name_category); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <div>
                <br>
                <br>
                <div class="form-group">
                    <input type="submit" class="form-submit btn btn-primary btn-lg" value="Upload Video"/>
                </div>
                <br>
                <br>

            </form>
            
                
                
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.ejemplo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PF_PAPW2\resources\views/subirVideo.blade.php ENDPATH**/ ?>