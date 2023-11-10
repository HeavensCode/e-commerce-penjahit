<!-- Modal edit produk -->
<div class="modal fade" id="edit-alamat-user-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Alamat User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="inputPassword6" class="col-form-label">alamat lengkap</label>
                    <div class="mx-2">
                        <input value="" type="text" name="alamatlengkap" id="alamatlengkap"
                            class="form-control" required>
                    </div>
                    <label for="inputPassword6" class="col-form-label">kota</label>
                    <div class="mx-2">
                        <input value="" type="text" name="kota" id="kota" class="form-control"
                            required>
                    </div>
                    <label for="inputPassword6" class="col-form-label">kecamatan</label>
                    <div class="mx-2">
                        <input value="" type="text" name="kecamatan" id="kecamatan" class="form-control"
                            required>
                    </div>
                    <label for="inputPassword6" class="col-form-label">provinsi</label>
                    <div class="mx-2">
                        <input value="" type="text" name="provinsi" id="provinsi" class="form-control"
                            required>
                    </div>
                    <label for="inputPassword6" class="col-form-label">kode pos</label>
                    <div class="mx-2">
                        <input value="" type="text" name="kodepos" id="kodepos" class="form-control"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
