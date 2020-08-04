<H1>TECT</H1>
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($item->id); ?></p>
<p><?php echo e($item->name); ?></p>
<p><?php echo e($item->alias); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\ydalenshik\Desktop\OSPanel\domains\fefu\app\View/task.blade.php ENDPATH**/ ?>