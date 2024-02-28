<html>
<head>
    <title>Bricole Me - <?php echo $__env->yieldContent('title'); ?></title>



    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">





    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo e(asset('node_modules/nice-select2/dist/css/nice-select2.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>" />

</head>
<body>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/main.blade.php ENDPATH**/ ?>