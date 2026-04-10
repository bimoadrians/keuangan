  <style>
    /* 1. Sembunyikan teks judul saat dilihat di layar web biasa */
    .judul-print-only {
      display: none;
    }

    #tab_kod_rek th:first-child,
    #tab_kod_rek td:first-child {
      padding-left: 8px !important;
      padding-right: 8px !important;
      text-align: center !important;
    }

    /* 2. Aturan Khusus Saat Kertas Dicetak */
    @media print {

      @page {
        margin-top: 1cm;
        /* Memotong jarak kosong bawaan browser di bagian atas */
        margin-bottom: 1cm;
      }

      .bor_tab {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }

      #tab_kod_rek {
        width: 100% !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
      }

      /* Sembunyikan seluruh isi web */
      body * {
        visibility: hidden;
      }

      /* Tampilkan KEMBALI HANYA area cetak dan semua isinya */
      #area-cetak,
      #area-cetak * {
        visibility: visible;
      }

      html,
      body,
      .pc-container,
      .pc-content,
      .row,
      .col-sm-12,
      .card,
      .card-body {
        position: static !important;
        /* Mencegah elemen template menahan tabel */
        margin: 0 !important;
        padding: 0 !important;
      }

      /* Posisikan tabel pas di sudut kiri atas kertas */
      #area-cetak {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        /* Pastikan tidak ada margin luar yang menahan */
        margin-top: 10px !important;
        /* Pastikan tidak ada bantalan dalam */
        padding-top: 0 !important;
      }

      /* TAMPILKAN teks judul saat di-print */
      .judul-print-only {
        /* Mengubah dari none menjadi block */
        display: block;
        /* Membuat judul rata tengah di kertas */
        text-align: center;
      }

      .judul-print-only h3 {
        margin-top: 0 !important;
        padding-top: 0 !important;
      }
    }
  </style>
  <!-- [ Main Kod_Rek Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ Main Kod_Rek Content ] start -->
      <div class="row">
        <!-- Kod_Rek start -->
        <div class="col-sm-12">
          <div class="card table-card">
            <div class="card-header">
              <h4 class="mb-2">Kode Rekening Perkiraan</h4>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('ref') ?>">Referensi</i></a></li>
                <li class="breadcrumb-item" aria-current="page">Kode Rekening Perkiraan</li>
              </ul>
              <div class="px-0 py-3">
                <div class="row align-items-center justify-content-between g-3">
                  <div class="col-auto d-flex align-items-center">
                    <label for="kategoriFilter" class="col-form-label fw-bold me-3 text-nowrap">Kategori:</label>
                    <select id="kategoriFilter" class="form-select" style="min-width: 200px;" onchange="filterTabel()">
                      <option value="harta">Harta</option>
                      <option value="piutang">Piutang</option>
                      <option value="persediaan">Persediaan</option>
                      <option value="inventaris">Inventaris</option>
                      <option value="utang">Utang</option>
                      <option value="modal">Modal</option>
                      <option value="pendapatan">Pendapatan</option>
                      <option value="biaya">Biaya</option>
                    </select>
                  </div>

                  <div class="col-auto d-flex gap-2">
                    <button class="btn btn-secondary text-white" onclick="cetakLaporan()">
                      <i class="ph ph-printer me-2"></i> Cetak
                    </button>

                    <button class="btn btn-success text-black" data-bs-toggle="modal" data-bs-target="#add_rek" onclick="add()">
                      <i class="ph ph-plus me-2"></i> Tambah Rekening Perkiraan
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive" id="area-cetak">
                <div class="judul-print-only">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td width="20%" align="center"> <img src="http://si.skk.my.id/siskkk/my/keuangan/library/gambar.php?replid=5&amp;table=jbsumum.identitas"> </td>
                        <td valign="top" class="text-start" style="line-height: 1.0;">
                          <font size="5"><strong>Sekolah Kristen Kalam Kudus Surakarta</strong></font><br>
                          <font size="1"><strong>Jl. Adi Sucipto No.11, Manahan, Banjarsari, Kota Surakarta, Jawa Tengah, Kode Pos 57139 <br>Telp. (0271) 735735 <br> Website: skkksolo.sch.id&nbsp;&nbsp; Email: info@kalamkudussolo.sch.id </strong></font>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <hr width="100%">
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <h4 style="text-align : center; margin-top: 5px; color: #333;">
                    Rekening Perkiraan
                  </h4>

                  <h6 style="text-align : left; margin-bottom: 5px; margin-top: 50px; color: #333;">
                    Kategori: <span id="teks-kategori-print">Semua</span>
                  </h6>
                </div>
                <div class="px-4 bor_tab">
                  <table class="table table-bordered border-2 border-dark align-middle" id="tab_kod_rek">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kode</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Keterangan</th>
                        <th class="d-none">-</th>
                        <th class="text-center d-print-none">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">11020889</td>
                        <td>ASET</td>
                        <td>UNTUK rekening kantin dan toko sekolah</td>
                        <td class="d-none">-</td>
                        <td class="text-center text-nowrap d-print-none">
                          <button class="btn btn-warning text-black me-1" data-bs-toggle="modal" data-bs-target="#edit_tab"><i class="ph ph-pencil me-2"></i> Ubah</button>
                          <button class="btn btn-danger" onclick="del_tab(this)"><i class="ph ph-trash me-2"></i> Hapus</button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">2</td>
                        <td class="text-center">11020998</td>
                        <td>BCA Non a/n Yayasan Kalam Kudus Indonesia</td>
                        <td>untuk rekening kantin dan toko sekolah</td>
                        <td class="d-none">harta</td>
                        <td class="text-center text-nowrap d-print-none">
                          <button class="btn btn-warning text-black me-1" data-bs-toggle="modal" data-bs-target="#edit_tab"><i class="ph ph-pencil me-2"></i> Ubah</button>
                          <button class="btn btn-danger" onclick="del_tab(this)"><i class="ph ph-trash me-2"></i> Hapus</button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">3</td>
                        <td class="text-center">11020998</td>
                        <td>BCA Non a/n Yayasan Kalam Kudus Indonesia</td>
                        <td>untuk rekening kantin dan toko sekolah</td>
                        <td class="d-none">piutang</td>
                        <td class="text-center text-nowrap d-print-none">
                          <button class="btn btn-warning text-black me-1" data-bs-toggle="modal" data-bs-target="#edit_tab"><i class="ph ph-pencil me-2"></i> Ubah</button>
                          <button class="btn btn-danger" onclick="del_tab(this)"><i class="ph ph-trash me-2"></i> Hapus</button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">4</td>
                        <td class="text-center">11020889</td>
                        <td>ASET</td>
                        <td>UNTUK rekening kantin dan toko sekolah</td>
                        <td class="d-none">piutang</td>
                        <td class="text-center text-nowrap d-print-none">
                          <button class="btn btn-warning text-black me-1" data-bs-toggle="modal" data-bs-target="#edit_tab"><i class="ph ph-pencil me-2"></i> Ubah</button>
                          <button class="btn btn-danger" onclick="del_tab(this)"><i class="ph ph-trash me-2"></i> Hapus</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="modal fade" id="add_rek" tabindex="-1" aria-labelledby="modalTambahJudul" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahJudul">Tambah Rekening Perkiraan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <form id="formTambahRekening">

                          <div class="mb-3">
                            <label for="inputKategori" class="form-label fw-bold">Kategori</label>
                            <input type="text" class="form-control bg-light" id="inputKategori" readonly>
                          </div>

                          <div class="mb-3">
                            <label for="inputKode" class="form-label fw-bold">Kode</label>
                            <input type="text" class="form-control" id="inputKode" placeholder="Masukkan kode rekening...">
                          </div>

                          <div class="mb-3">
                            <label for="inputKeterangan" class="form-label fw-bold">Keterangan</label>
                            <textarea class="form-control" id="inputKeterangan" rows="3" placeholder="Masukkan keterangan..."></textarea>
                          </div>

                        </form>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan Data</button>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="modal fade" id="edit_tab" tabindex="-1" aria-labelledby="modalEditJudul" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalEditJudul">Ubah Rekening Perkiraan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <form id="formEditRekening">
                          <div class="mb-3">
                            <label for="editKategori" class="form-label fw-bold">Kategori</label>
                            <input type="text" class="form-control bg-light" id="editKategori" readonly>
                          </div>

                          <div class="mb-3">
                            <label for="editKode" class="form-label fw-bold">Kode</label>
                            <input type="text" class="form-control" id="editKode" placeholder="Masukkan kode rekening baru...">
                          </div>

                          <div class="mb-3">
                            <label for="editKeterangan" class="form-label fw-bold">Keterangan</label>
                            <textarea class="form-control" id="editKeterangan" rows="3" placeholder="Masukkan keterangan baru..."></textarea>
                          </div>
                        </form>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-warning text-white">Simpan Perubahan</button>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                  function cetakLaporan() {
                    // 1. Simpan nama tab/program yang asli ("SMARTERP")
                    let judulAsli = document.title;

                    // 2. Munculkan pop-up untuk mengganti teks header bawaan browser
                    let judulCetak = "JIBAS KEU [Cetak Kode Rekening Perkiraan]";

                    // 3. Jika pengguna mengisi teks, ubah title web sementara
                    if (judulCetak !== null && judulCetak.trim() !== "") {
                      document.title = judulCetak;
                    }

                    // 4. Lakukan proses cetak
                    window.print();

                    // 5. Kembalikan nama tab web menjadi "SMARTERP" seperti semula
                    document.title = judulAsli;
                  }

                  // Fungsi untuk menyiapkan isi modal sebelum ditampilkan
                  function add() {
                    // 1. Ambil elemen dropdown filter
                    let selectDropdown = document.getElementById("kategoriFilter");

                    // 2. Dapatkan teks yang sedang dipilih (Misal: "Harta" atau "Piutang")
                    let kategoriAktif = selectDropdown.options[selectDropdown.selectedIndex].text;

                    // 3. Masukkan teks tersebut ke dalam input Kategori di dalam Modal
                    document.getElementById("inputKategori").value = kategoriAktif;

                    // 4. Pastikan input Kode dan Keterangan selalu kosong saat modal baru dibuka
                    document.getElementById("inputKode").value = "";
                    document.getElementById("inputKeterangan").value = "";
                  }

                  // --- 2. FUNGSI HAPUS DATA ---
                  function del_tab(tombol) {
                    let yakin = confirm("Apakah anda yakin akan menghapus data ini?");

                    if (yakin) {
                      let tabel = document.getElementById("tab_kod_rek");
                      let tbody = tabel.querySelector("tbody") || tabel;

                      // 1. Hapus baris yang dipilih pengguna
                      let barisTabel = tombol.closest("tr");
                      barisTabel.remove();

                      // 2. Hitung sisa baris data yang ada di tabel
                      // Mengabaikan baris judul (th) dan baris kosong itu sendiri
                      let sisaBaris = tbody.querySelectorAll("tr:not(#baris-kosong)");
                      let jumlahData = 0;

                      sisaBaris.forEach(row => {
                        // Hanya hitung baris yang memiliki <td> dan tidak sedang disembunyikan oleh filter
                        if (row.getElementsByTagName("td").length > 0 && row.style.display !== "none") {
                          jumlahData++;
                        }
                      });

                      // 3. Jika sisa data 0, tampilkan baris "Tidak ada data untuk kategori ini."
                      if (jumlahData === 0) {
                        let barisKosong = document.getElementById("baris-kosong");

                        // Jika baris kosong belum ada, buat elemen baru
                        if (!barisKosong) {
                          barisKosong = document.createElement("tr");
                          barisKosong.id = "baris-kosong";
                          barisKosong.className = "d-print-none";
                          barisKosong.innerHTML = `<td colspan="6" class="text-center text-muted fw-bold py-4">Tidak ada data untuk kategori ini.</td>`;
                          tbody.appendChild(barisKosong);
                        } else {
                          // Jika sudah ada sebelumnya, pastikan teksnya sesuai dan tampilkan
                          barisKosong.innerHTML = `<td colspan="6" class="text-center text-muted fw-bold py-4">Tidak ada data untuk kategori ini.</td>`;
                          barisKosong.style.display = "";
                        }
                      }

                      alert("Data berhasil dihapus!");
                    }
                  }

                  // === TAMBAHAN BARU DI SINI ===
                  // Perintah ini akan otomatis menjalankan filterTabel() saat halaman selesai dimuat
                  document.addEventListener("DOMContentLoaded", function() {
                    filterTabel();

                    let modalEdit = document.getElementById('edit_tab');

                    if (modalEdit) {
                      modalEdit.addEventListener('show.bs.modal', function(event) {

                        // 1. Tangkap tombol 'Edit' spesifik yang baru saja diklik
                        let tombolEdit = event.relatedTarget;

                        // 2. Cari baris (tr) tempat tombol tersebut berada
                        let barisTabel = tombolEdit.closest('tr');

                        // 3. Ambil data dari kolom (td) di baris tersebut.
                        // PENTING: Sesuaikan angka di dalam cells[0] dan cells[1] dengan urutan kolom di tabel aslimu!
                        // cells[0] = Kolom ke-1, cells[1] = Kolom ke-2, dst.
                        let dataKode = barisTabel.cells[1].innerText.trim();
                        let dataKeterangan = barisTabel.cells[3].innerText.trim();

                        // 4. Ambil kategori dari filter (sesuai permintaanmu)
                        let selectDropdown = document.getElementById("kategoriFilter");
                        let kategoriAktif = selectDropdown.options[selectDropdown.selectedIndex].text;

                        // 5. Masukkan semua data tersebut ke dalam inputan Modal
                        document.getElementById("editKategori").value = kategoriAktif;
                        document.getElementById("editKode").value = dataKode;
                        document.getElementById("editKeterangan").value = dataKeterangan;
                      });
                    }
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
        <!-- Kod_Rek end -->
      </div>
      <!-- [ Main Kod_Rek Content ] end -->
    </div>
  </div>
  <!-- [ Main Kod_Rek Content ] end -->