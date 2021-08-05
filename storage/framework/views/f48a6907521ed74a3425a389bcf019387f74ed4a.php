<?php $__env->startSection('title', 'Produto'); ?>


<?php $__env->startSection('content'); ?>
    <?php if($id == null): ?>
        <p>ID inválido!</p>
    <?php else: ?>
        <p>Exibindo produto id: <?php echo e($id); ?></p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\CURSOS\LARAVEL\laravel4noobs\hdcevents\resources\views/product.blade.php ENDPATH**/ ?>