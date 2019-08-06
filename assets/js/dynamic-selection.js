$('#kategori').change(function () {
    if (this.value == 'alumni') {
        $('#form-alumni').attr('hidden', false);
        $('#form-staff').attr('hidden', true);
        $('#form-dosen').attr('hidden', true);
        $('#form-mahasiswa').attr('hidden', true);
    } else if (this.value == 'staff') {
        $('#form-staff').attr('hidden', false);
        $('#form-alumni').attr('hidden', true);
        $('#form-dosen').attr('hidden', true);
        $('#form-mahasiswa').attr('hidden', true);
    } else if (this.value == 'dosen') {
        $('#form-dosen').attr('hidden', false);
        $('#form-staff').attr('hidden', true);
        $('#form-alumni').attr('hidden', true);
        $('#form-mahasiswa').attr('hidden', true);
    } else {
        $('#form-mahasiswa').attr('hidden', false);
        $('#form-dosen').attr('hidden', true);
        $('#form-staff').attr('hidden', true);
        $('#form-alumni').attr('hidden', true);
    }
});