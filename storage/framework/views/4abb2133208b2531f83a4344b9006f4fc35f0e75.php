<div class="modal-header">
    <button href="<?php echo e(url('/admin/berita')); ?>" type="button" class="close">&times;</button>
    <h4 class="modal-title">Edit Berita</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
    <form id="editber" name="editber" class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/admin/berita/edit')); ?>/<?php echo e($berita->id); ?>/save">
        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="judul" class="control-label">Judul</label>
            <input id="judul" type="text" class="form-control" name="judul" width="500" value="<?php echo e($berita->judul); ?>" required autofocus>
        </div>

        <div class="form-group">
            <label for="isi" class="control-label">Konten</label>
            <textarea name="isi" id="isi" class="form-control" rows="8" width="500" required><?php echo e($berita->isi); ?></textarea>
        </div>

        <div class="form-group">
            <label for="pic" class="control-label">Gambar</label>
            <input id="pic" type="file" class="form-control" name="pic" width="500" value="$berita->pic">
        </div>
    </form>
</div>

<div class="modal-footer">
    <a href="<?php echo e(url('/admin/berita')); ?>"><button type="button" class="btn btn-default pull-left">Close</button></a>
    <button type="submit" form="editber" class="btn btn-primary">Edit Berita</button>
</div>