<!DOCTYPE html>
<html>
<head>
    <title>Tambah Satuan</title>
</head>
<body>
    <h1>Tambah Satuan</h1>
    <form action="<?php echo site_url('satuan/save'); ?>" method="post">
        <label>Nama:</label>
        <input type="text" name="name" required>
        <br>
        <label>Deskripsi:</label>
        <textarea name="deskripsi"></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>