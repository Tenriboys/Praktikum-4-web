<!DOCTYPE html>
<html>
<head>
    <title>Data Satuan</title>
</head>
<body>
    <h1>Data Satuan</h1>
    <a href="<?php echo site_url('satuan/add'); ?>">Tambah Satuan</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; foreach ($satuan as $item): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $item->name; ?></td>
            <td><?php echo $item->deskripsi; ?></td>
            <td>
                <a href="<?php echo site_url('satuan/edit/'.$item->id); ?>">Edit</a>
                <a href="<?php echo site_url('satuan/delete/'.$item->id); ?>" onclick="return confirm('Ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>