<!-- Modal edit profile -->
<div class="modal fade" id="edit-profile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('user-profile.update', ['id' => $user->id]) }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-profile-id" name="edit_profile_id">

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input value="{{ $user->nama }}" type="text" name="edit_username" id="edit-username"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{ $user->email }}" type="email" name="edit_email" id="edit-email"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input value="{{ $user->no_telp }}" type="number" name="edit_nomor_telepon"
                            id="edit-nomor-telepon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input value="{{ $user->gender }}" type="text" name="edit_gender" id="edit-gender"
                            class="form-control" required>
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
