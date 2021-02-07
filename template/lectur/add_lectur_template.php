<form method="post" action="<?php $this->homeAddress('/add-new-lectur'); ?>">
    <label for="txt_nip">Nip:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" id="txt_nip" type="number" placeholder="Nomor Induk Pegawai" name="nip" />
    <br />
    <label for="txt_nama">Nama:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" id="txt_nama" type="text" placeholder="Nama Lengkap Dosen" name="nama" />
    <br />
    <label for="txt_alamat">Alamat:</label>
    <br />
    <textarea style="margin-bottom: 16px; width: 20%; height: 60px;" id="txt_alamat" type="text" placeholder="Alamat Lengkap Dosen" name="alamat"></textarea>
    <br />
    <label for="txt_prodi">Prodi:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" id="txt_prodi" type="text" placeholder="Program Studi" name="prodi" />
    <br />
    <label for="txt_jurusan">Jurusan:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" id="txt_jurusan" type="text" placeholder="Jurusan" name="jurusan" />
    <br />
    <label for="txt_no_telp">No. Telepon:</label>
    <br />
    <input style="margin-bottom: 16px; width: 20%" type="txt_no_telp" placeholder="No. Telepon yang aktif" name="no_telp" />
    <br />
    <input type="submit" name="submit" value="Simpan" />
</form>