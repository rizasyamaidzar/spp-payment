<div class="modal fade" id="largeModalEdit{{ $user->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('operator.wali.update') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Name</label>
                            <input type="hidden" name="id" value="{{ $user->id }}" id="">
                            <input type="text" id="nameLarge" name="name" class="form-control"
                                placeholder="Enter Name" value="{{ $user->name }}" />
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="Akses" class="form-label">Hak Akses</label>
                            <input type="text" id="Akses" name="akses" value="{{ $user->akses }}"
                                class="form-control" readonly />
                        </div>
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">No hp</label>
                            <input type="number" name="nohp" id="dobLarge" class="form-control"
                                value="{{ $user->nohp }}" />
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailLarge" class="form-label">Email</label>
                            <input type="email" id="emailLarge" name="email" class="form-control"
                                placeholder="xxxx@xxx.xx" value="{{ $user->email }}" />
                        </div>
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Password</label>
                            <input type="password" name="password" id="dobLarge" class="form-control"
                                placeholder="*******" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>