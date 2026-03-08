<?= $this->include('template/header'); ?>
<artikel class="entry">
 <h2><?= $artikel['judul']; ?></h2>
 <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=
$artikel['judul']; ?>">
 <p><?= $artikel['isi']; ?></p>
</artikel>
<?= $this->include('template/footer'); ?>