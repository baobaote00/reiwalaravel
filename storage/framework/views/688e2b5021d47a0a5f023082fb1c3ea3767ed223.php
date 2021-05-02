<div class="slideshow-container">
    <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mySlides">
            <img src="<?php echo e(asset('images/ReiwaHouse_logo_final.svg')); ?>" style="width:100%; height:400px;">
            <div style="z-index: 10; position: absolute; width: 100%; text-align: center; top: 40%; color: red;">
                <span class="sider-text-color"><?php echo $value['title']; ?></span>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    <br>

    <div style="text-align:center">
        <?php for($i = 1; $i < count($banner); $i++): ?>
            <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span>
        <?php endfor; ?>
    </div>
</div>
<?php /**PATH D:\git\reiwalaravel\resources\views/components/slide_show.blade.php ENDPATH**/ ?>