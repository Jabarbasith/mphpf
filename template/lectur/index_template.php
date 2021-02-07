<h2>Data Dosen</h2>
<a href="<?php echo $this->homeAddress('/add-new-lectur'); ?>">Tambah Dosen Baru</a>
<br />
<br />
<table class="data-table">
    <thead class="data-table-th">
        <td class="data-table-td">Nip</td>
        <td class="data-table-td">Nama</td>
        <td class="data-table-td">Alamat</td>
        <td class="data-table-td">Prodi</td>
        <td class="data-table-td">Jurusan</td>
        <td class="data-table-td">No. Telepon</td>
    </thead>
    <tbody>
        <?php foreach ($this->data('all_lectur') as $lectur) { ?>
            <tr class="data-table-tr">
                <td class="data-table-td"><?php echo $lectur['nip'] ?></td>
                <td class="data-table-td"><?php echo $lectur['nama'] ?></td>
                <td class="data-table-td"><?php echo $lectur['alamat'] ?></td>
                <td class="data-table-td"><?php echo $lectur['prodi'] ?></td>
                <td class="data-table-td"><?php echo $lectur['jurusan'] ?></td>
                <td class="data-table-td"><?php echo $lectur['no_telp'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>