<?php

$foto = new App\Foto;
$rows = $foto->tampil();

?>

<h2>Data Foto</h2>

<a href="index.php?hal=foto_input" class="btn">Tambah Foto</a>

<table>
    <tr>
    <tr>
        <td>ID</td>
        <td>ID POST</td>
        <td>JUDUL</td>
        <td>FILE</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    </tr>
    <?php foreach ($rows as $row) { ?>
        <tr>
        <td><?php echo $row['photo_id']; ?></td>
        <td><?php echo $row['photo_id_post']; ?></td>
        <td><?php echo $row['photo_title']; ?></td>
        <td><?php echo $row['photo_file']; ?></td>
        <td><a href="index.php?hal=foto_edit&id=<?php echo $row['photo_id']; ?>" class="btn" >Edit</a></td>
        <td><a href="index.php?hal=foto_delete&id=<?php echo $row['photo_id']; ?>" class="btn" >Delete</a></td>
    </tr>
    <?php } ?>
</table>
