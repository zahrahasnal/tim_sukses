<!DOCTYPE html>
<html>
<head>
    <title>View User Image</title>
</head>
<body>
    <?php if($user->foto): ?>
        <img src="<?php echo e(asset('storage/foto/' . $user->foto)); ?>" alt="User Image">
    <?php else: ?>
        <p>No Image Available</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH D:\Projek\bismillah jadi\web_monitoring\resources\views/admin/view-image.blade.php ENDPATH**/ ?>