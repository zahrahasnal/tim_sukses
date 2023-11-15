<!DOCTYPE html>
<html>
<head>
    <title>Laporan Monitoring Website</title>
    <style>
        /* Atur gaya CSS sesuai kebutuhan Anda */
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Website</th>
                <th>kategori</th>
                <th>Kode WHM</th>
                <th>status</th>
                <th>Tgl Pemantauan</th>
                <th>Tgl Last Update</th>
                <th>Berita</th>
                <th>Logo</th>
                <th>CMS</th>
                <th>Keamanan</th>
                <th>Error</th>
                <th>Keterangan Error</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($key + 1); ?></td>
            <td><a href="<?php echo e($website->link); ?>"><?php echo e($website->link); ?></a></td>
            <td><?php echo e($website->kategori); ?></td>
            <td><?php echo e($website->kd_whm); ?></td>
            <td><?php echo e($website->status); ?></td>
            <td><?php echo e($website->tgl_pemantauan); ?></td>
            <td><?php echo e($website->tgl_last_update); ?></td>
            <td><?php echo e($website->berita); ?></td>
            <td><?php echo e($website->logo); ?></td>
            <td><?php echo e($website->cms); ?></td>
            <td><?php echo e($website->keamanan); ?></td>
            <td><?php echo e($website->error); ?></td>
            <td><?php echo e($website->ket_error); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH D:\Projek\bismillah jadi\web_monitoring\resources\views/admin/pdf.blade.php ENDPATH**/ ?>