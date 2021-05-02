<!-- Nav -->
<nav class="navbar navbar-expand-sm navbar-light bg-white sticky-top pos-nav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(asset('')); ?>">
            <img src="<?php echo e(asset('images/ReiwaHouse_logo_final.svg')); ?>" alt="logo" width="150" height="100"
                class="img-fluid">
        </a>
        <button class="navbar-toggler" id="click-nav" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php $__currentLoopData = $navbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item ">
                        <a href="<?php echo asset($item1['url']); ?>"
                            class="nav-text-style nav-padding is-active"><?php echo $item1['name']; ?></a>
                        <?php if(!(empty($dropdown = $navbarModel->getDropdownNavBar($item1['id'])))): ?>
                            <ul class="dropdown">
                                <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo $item2->url; ?>"
                                            class="nav-text-style-1"><?php echo $item2->content; ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\git\reiwalaravel\resources\views/components/navbar.blade.php ENDPATH**/ ?>