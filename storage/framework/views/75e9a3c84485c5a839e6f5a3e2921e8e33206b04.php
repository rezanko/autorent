<div class="modal-header">
    <a href="<?php echo e(url('/admin/berita')); ?>"><button type="button" class="close">&times;</button></a>
    <h4 class="modal-title">Edit Berita</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
    
        <?php echo Form::open(['id'=>'editber','name'=>'editber','action'=>['BeritaController@saveEditBerita',$berita->id],'files'=>'true']); ?>

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="judul" class="control-label">Judul</label>
            <input id="judul" type="text" class="form-control" name="judul" placeholder="Input judul berita" value="<?php echo e($berita->judul); ?>" required autofocus>
        </div>

        <div class="form-group">
            <label for="isi" class="control-label">Konten</label>
            <textarea name="isi" id="isi" class="form-control" rows="8" placeholder="Input isi/konten berita" required><?php echo e($berita->isi); ?></textarea>
        </div>

        <div class="form-group">
            <label for="pic" class="control-label">Gambar</label>
            <input id="pic" type="file" class="form-control-file" name="pic" value="$berita->pic">
            <p class="help-block">Upload gambar yang ingin ditampilkan pada berita.</p>
        </div>
    
    <?php echo Form::close(); ?>

</div>

<div class="modal-footer">
    <a href="<?php echo e(url('/admin/berita')); ?>"><button type="button" class="btn btn-warning pull-left">Close</button></a>
    <button type="submit" form="editber" class="btn btn-primary">Edit Berita</button>
</div>