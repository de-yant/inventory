<!-- MODAL TAMBAH -->
<div class="modal fade" data-bs-backdrop="static" id="Tambahmerk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
            <button type="reset" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('merkbarang.store') }}">
                @csrf
                <div class="form-group">
                    <label for="merkbarang_nama" class="form-label">Merk Barang <span class="text-danger">*</span></label>
                    <input type="text" name="merkbarang_nama" id="merkbarang_nama" class="form-control" placeholder="Merk barang harus diisi ...">
                </div>
                <div class="form-group">
                    <label for="merkbarang_ket" class="form-label">Keterangan</label>
                    <textarea name="merkbarang_ket" id="merkbarang_ket" class="form-control" rows="4"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
{{--
@section('formTambahJS')
    <script>
        function store() {
            const merk = $("input[name='merk']").val();
            setLoading(true);
            resetValid();

            if (merk == "") {
                validasi('Nama Merk wajib di isi!', 'warning');
                $("input[name='merk']").addClass('is-invalid');
                setLoading(false);
                return false;
            } else {
                submitForm();
            }

        }

        function submitForm() {
            const merk = $("input[name='merk']").val();
            const ket = $("textarea[name='ket']").val();

            $.ajax({
                type: 'GET',
                url: "{{ route('merkbarang.store') }}",
                enctype: 'multipart/form-data',
                data: {
                    merk: merk,
                    ket: ket
                },
                success: function(data) {
                    $('#Tambahmerk').modal('toggle');
                    swal({
                        title: "Berhasil ditambah!",
                        type: "success"
                    });
                    table.ajax.reload(null, false);
                    reset();

                }
            });
        }

        function resetValid() {
            $("input[name='merk']").removeClass('is-invalid');
        };

        function reset() {
            resetValid();
            $("input[name='merk']").val('');
            $("textarea[name='ket']").val('');
            setLoading(false);
        }

        function setLoading(bool) {
            if (bool == true) {
                $('#btnLoader').removeClass('d-none');
                $('#btnSimpan').addClass('d-none');
            } else {
                $('#btnSimpan').removeClass('d-none');
                $('#btnLoader').addClass('d-none');
            }
        }
    </script>
@endsection --}}
