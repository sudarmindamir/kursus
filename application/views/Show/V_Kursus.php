<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kursus</th>
                        <th scope="col">Kategori Kursus</th>
                        <th scope="col">Harga Kursus (Rp.)</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($kursus as $s) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $s->nama_kursus ?></td>
                            <td><?= $s->kategori_kursus ?></td>
                            <td><?= $s->harga_kursus ?></td>



                            <td class="text-center">
                                <a href="<?= base_url('C_kursus/detailKursus/') . $s->id_kursus ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>