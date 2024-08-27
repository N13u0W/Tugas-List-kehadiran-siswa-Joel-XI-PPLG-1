<?php 
include('template/header.php');

$students = [
    [
        "nama" => "Vinze",
        "kelas" => "XI",
        "jurusan" => "PPLG 1",
        "umur" => "17",
        "status" => "Hadir", 
    ],
    [
        "nama" => "Putri",
        "kelas" => "XI",
        "jurusan" => "PPLG 1",
        "umur" => "16",
        "status" => "Sakit", 
    ],
    [
        "nama" => "Hansel",
        "kelas" => "XI",
        "jurusan" => "PPLG 1",
        "umur" => "16",
        "status" => "Izin", 
    ],
];

?>

<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>Data Kehadiran Siswa</h2>
        <div class="input-group dashboard-filter">
            <!-- Add your filter elements here -->
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="panel">
                <div class="panel-header">
                    <h5>Tambahkan Siswa</h5>
                    <div id="tableSearch"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-dashed recent-order-table" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Umur</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $index => $student) { ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= htmlspecialchars($student['nama']) ?></td>
                                    <td><?= htmlspecialchars($student['kelas']) ?></td>
                                    <td><?= htmlspecialchars($student['jurusan']) ?></td>
                                    <td><?= htmlspecialchars($student['umur']) ?></td>
                                    <td><span class="badge bg-success p-3"><?= htmlspecialchars($student['status']) ?></span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="table-bottom-control"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('template/footer.php') ?>
