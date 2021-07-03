<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama Kursus</th>
                        <th scope="col">Kategori Kursus</th>
                        <th scope="col">Harga Kursus (Rp.)</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $kursus->nama_kursus ?></td>
                        <td><?= $kursus->kategori_kursus ?></td>
                        <td><?= $kursus->harga_kursus ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('C_kursus/updateKursus/') . $kursus->id_kursus ?>" class="btn btn-primary">Ubah</a>
                            <a href="<?= base_url('C_kursus/detailKursus/') . $kursus->id_kursus ?>" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>