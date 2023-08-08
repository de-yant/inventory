<!-- MODAL TAMBAH -->
<div class="modal fade" data-bs-backdrop="static" id="Tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
            <button type="reset" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('barang.store') }}">
                @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="title" class="form-label">Gambar</label>
                            <center>
                                <img src="{{url('/assets/default/barang/image.png')}}" width="80%" alt="gambar_barang" id="outputImg" class="">
                                <input class="form-control mt-5" id="GetFile" name="photo" type="file" onchange="VerifyFileNameAndFileSize()" accept=".png,.jpeg,.jpg,.svg">
                            </center>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="kode" class="form-label">Kode Barang <span class="text-danger">*</span></label>
                            <input type="text" name="kode" readonly class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jenisbarang" class="form-label">Jenis Barang</label>
                            <select name="jenisbarang" class="form-control">
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="kode" class="form-label">Nama Barang <span class="text-danger">*</span></label>
                            <input type="text" name="kode" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="satuan" class="form-label">Satuan Barang</label>
                            <select name="satuan" class="form-control">
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga Barang <span class="text-danger">*</span></label>
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="harga" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="merk" class="form-label">Merk Barang</label>
                            <select name="merk" class="form-control">
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

{{-- <div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="Tambahbarang">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('barang.store') }}">
                @csrf
                <div class="card">
                          <div class="form-row">
                             <div class="col-md-6 mb-3">
                                <label for="validationDefault01">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" required>
                             </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationDefault02">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" required>
                             </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationDefaultUsername">Username</label>
                                <div class="input-group">
                                   <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                   </div>
                                   <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                                </div>
                             </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationDefault03">City</label>
                                <input type="text" class="form-control" id="validationDefault03" required>
                             </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationDefault04">State</label>
                                <select class="form-control" id="validationDefault04" required>
                                   <option selected disabled value="">Choose...</option>
                                   <option>...</option>
                                </select>
                             </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationDefault05">Zip</label>
                                <input type="text" class="form-control" id="validationDefault05" required>
                             </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                       </form>
                    </div>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
