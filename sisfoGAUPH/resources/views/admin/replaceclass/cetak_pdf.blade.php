<div class="table-responsive">
    <h1 class="" style="text-align : center">UNIVERSITAS PELITA HARAPAN</h1>

    <h2 class="" style="text-align : center">Pengajuan Replacement Class</h2>
    <br>

    <p>Hal : Permohonan pengganti waktu kuliah, kuliah tambahan dan perubahan jadwal kelas</p>
    <br>
    
    <p>Kepada Yth.</p>
    <p>Kaprodi Sistem Informasi -Kampus Kota Medan-</p>
    <p>Fakultas Ilmu Komputer</p>
    <p>Universitas Pelita Harapan Medan Campus</p>
    <br>

    <p>Dengan ini memberitahukan bahwa :</p>
    @foreach($replaceclass as $item)
    <p style="margin-left: 30px">Nama Dosen : {{ $item->nama_lengkap }}</p>
    <p style="margin-left: 30px">Mata Kuliah : {{ $item->mata_kuliah }}</p>
    <p style="margin-left: 30px">Prodi : Sistem Informasi -Kampus Kota Medan-</p>
    <p style="margin-left: 30px">Kelas : {{ $item->kelas }}</p>
    <p style="margin-left: 30px">Semester : Ganjil</p>
    <p style="margin-left: 30px">Tahun Akademik : 2022/2023</p>

    <p>Bermaksud untuk mengganti jadwal kelas</p>
    <p style="margin-left: 30px">Tanggal : {{ $item->jadwal_kuliah }}</p>
    <p style="margin-left: 30px">Waktu : {{ $item->jam_kuliah }}</p>

    <p>Menjadi kelas pada</p>
    <p style="margin-left: 30px">Tanggal : {{ $item->tanggal_replacement }}</p>
    <p style="margin-left: 30px">Waktu : {{ $item->jam_replacement }}</p>
    <p style="margin-left: 30px">Alasan : {{ $item->alasan }}</p>
    @endforeach
    <br>

    <p>Atas perhatian dan persetujuan Bapak / Ibu kami ucapkan terima kasih.</p>
    <p class="" style="text-align: center">True Knowledge, Faith in Christ, Godly Character</p>
</div>