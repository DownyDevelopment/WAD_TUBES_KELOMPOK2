<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('favicon.png')); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/WAD08/Tubes1/resources/views/layouts/app.blade.php ENDPATH**/ ?>