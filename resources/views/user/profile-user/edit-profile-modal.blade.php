<!-- Modal edit profile -->
<div class="modal fade" id="edit-profile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('user-profile.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- {{ dd($user); }} --}}
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-profile-id" name="edit_profile_id">

                    <div class="mb-3">
                        <label for="username" class="form-label">Nama</label>
                        <input value="{{ $user->nama }}" type="text" name="nama" id="edit-username"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{ $user->email }}" type="email" name="email" id="edit-email"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input value="{{ $user->no_telp }}" type="number" name="no_telp"
                            id="edit-nomor-telepon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="laki-laki" {{ old('gender') === 'laki-laki' ? 'selected' : '' }}>Laki - Laki
                            </option>
                            <option value="Perempuan" {{ old('gender') === 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                            <option value="Tidak Memilih" {{ old('gender') === 'Tidak Memilih' ? 'selected' : '' }}>Tidak
                                Memilih</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="{{ $user->id }}">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
