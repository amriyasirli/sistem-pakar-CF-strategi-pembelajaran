<!-- Description -->
<div class="description-container">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-sm-12 description-title">
                    <h2><?= $title ?></h2>
                    <h4>Sistem Pakar Strategi Pembelajaran</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Multi Step Form -->
<div class="msf-container">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Strategi Terpilih</th>
                    <th>Nilai CF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    foreach ($riwayat as $row) :
                ?>
                <tr>
                    <td class="text-left"><?= $row['id_hasil'] ?></td>
                    <td class="text-left"><?= $row['nama'] ?></td>
                    <td class="text-left"><?= $row['tanggal'] ?></td>
                    <td class="text-left"><?= $row['strategi_nama'] ?></td>
                    <td class="text-left"><?= $row['hasil_nilai'] ?></td>
                </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

