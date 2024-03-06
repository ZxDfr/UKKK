<?php $this->load->view("gallery/Side/header"); ?>
<?php $this->load->view("gallery/Side/navbar"); ?>
<!--Konten-->
<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <h2 class="page-title text-center text-danger" style="display: block; text-align: center;">Tambah Image</h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container container-tight ">
            <div class="card card-sm bg-transparent">
                <div class="card-body">
                    <?= form_open_multipart('Image/addImage'); ?>
                        <div class="mb-3">
                            <label class="form-label text-danger">JUDUL</label>
                            <input type="text" name="JudulFoto" class="form-control" placeholder="Nama Foto" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-danger">DESKRIPSI</label>
                            <textarea class="form-control" name="DeskripsiFoto" rows="6" placeholder="Content.." style="height: 149px;" required></textarea>
                        </div>
                        <input type="hidden" name="TanggalUnggah" value="<?= date('Y-m-d'); ?>">
                        <div class="mb-3">
                            <label class="form-label text-danger">FILE</label>
                            <input type="file" name="LokasiFile" class="form-control">
                            <?= @$error ?>
                        </div>
                        <div class="mb-3">
                            <div class="form-label text-danger">ALBUM</div>
                            <select name="album" class="form-select">
                                <?php foreach ($albums as $dt) : //dt = data 
                                ?>
                                    <option value="<?= $dt->AlbumID; ?>"><?= $dt->NamaAlbum; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <input type="hidden" name="user" value="<?= $this->session->userdata('Username') ?>">
                        <div class="form-footer">
                            <button type="submit" class="btn btn-info w-100 mb-2">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("gallery/Side/fotter"); ?>