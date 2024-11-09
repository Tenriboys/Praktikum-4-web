<!DOCTYPE html>
<html>
<head>
    <title>Edit Satuan</title>
</head>
<body>
    <h1>Edit Satuan</h1>
    <form action="<?php echo site_url('satuan/update/'.$satuan->id); ?>" method="post">
        <label>Nama:</label>
        <input type="text" name="name" value="<?php echo $satuan->name; ?>" required>
        <br>
        <label>Deskripsi:</label>
        <textarea name="deskripsi"><?php echo $satuan->deskripsi; ?></textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>