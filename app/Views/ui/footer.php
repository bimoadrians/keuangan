<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-6 my-1">
                <!-- <p class="m-0">Gradient Able &#9829; crafted by Team <a href="https://codedthemes.com/" target="_blank">Codedthemes</a></p> -->
            </div>
            <div class="col-sm-6 ms-auto my-1">
                <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
                    <li class="list-inline-item"><a href="../index.html">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- [Page Specific JS] start -->
<script src="<?php echo base_url('assets/js/plugins/apexcharts.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/jsvectormap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/world.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/world-merc.js') ?>"></script>

<!-- [Page Specific JS] end -->
<!-- Required Js -->
<script src="<?php echo base_url('assets/js/plugins/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/simplebar.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        // 1. Inisialisasi DataTable (Simpan ke variabel 'table')
        var table = $('#tab_kod_rek').DataTable({
            "pageLength": 10,
            "language": {
                "zeroRecords": "Tidak ada data untuk kategori ini.", // Pesan otomatis jika data kosong
                "infoEmpty": "Tidak ada data tersedia",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data"
            }
        });

        // 2. Logika Filter Dropdown (Menggantikan fungsi filterTabel lama)
        $('#kategoriFilter').on('change', function() {
            let filterValue = $(this).val();
            let teksPilihan = $(this).find('option:selected').text();

            // Update judul untuk print
            document.getElementById("teks-kategori-print").innerText = teksPilihan;

            // Lakukan filter pada kolom ke-5 (indeks 4)
            // .draw() akan otomatis mengatur ulang nomor urut dan paginasi
            table.column(4).search(filterValue).draw();
        });

        // 3. Menangani Penomoran Ulang (Otomatis saat difilter)
        table.on('order.dt search.dt', function() {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
</script>
<script src="<?php echo base_url('assets/js/fonts/custom-font.js') ?>"></script>
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/theme.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/feather.min.js') ?>"></script>


<script>
    layout_change('light');
</script>

<script>
    layout_sidebar_change('light');
</script>

<script>
    change_box_container('false');
</script>

<script>
    layout_caption_change('true');
</script>

<script>
    layout_rtl_change('false');
</script>

<script>
    preset_change('preset-1');
</script>

<script>
    header_change('header-1');
</script>


</body>
<!-- [Body] end -->

</html>