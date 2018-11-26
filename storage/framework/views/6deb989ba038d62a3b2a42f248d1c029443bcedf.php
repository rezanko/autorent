
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Berita</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
    
        <?php echo Form::open(['id'=>'addber','name'=>'addber','action'=>'BeritaController@saveAddBerita', 'files'=>true]); ?>

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="judul" class="control-label">Judul</label>
            <input id="judul" type="text" class="form-control" name="judul" placeholder="Input judul berita" required autofocus>

        </div>

        <div class="form-group">
            <label for="isi" class="control-label">Konten</label>
            <textarea name="isi" id="isi" class="form-control" rows="8" placeholder="Input isi/konten berita" required></textarea>
        </div>

        <div class="form-group">
            <label for="pic" class="control-label">Gambar</label>
            <input id="pic" type="file" class="form-control-file" name="pic">
            <p class="help-block">Upload gambar yang ingin ditampilkan pada berita.</p>
        </div>
    </form>
    <?php echo Form::close(); ?>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
    <button type="submit" form="addber" class="btn btn-primary">Add Berita</button>
</div>
