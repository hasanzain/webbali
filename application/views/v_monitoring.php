<script>
$(document).ready(function() {
    live_data();
})

function live_data() {
    setTimeout(function() {
        suhu_air();
        suhu_udara();
        kelembaban();
        tds();
        ph();
        amonia();
        arus_pompa_1();
        arus_pompa_2();
        arus_xpompa_1();
        arus_xpompa_2();
        uv();
        p1();
        p2();
        xp1();
        xp2();
        relay_uv();
        level1();
        level2();
        xlevel1();
        xlevel2();
        live_data();
    }, 1000);
}


function p1() {
    $.ajax({
        url: "<?= base_url() ?>/p1?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#p1').html(data[0]["status"]);
        }
    });
}

function p2() {
    $.ajax({
        url: "<?= base_url() ?>/p2?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#p2').html(data[0]["status"]);
        }
    });
}

function xp1() {
    $.ajax({
        url: "<?= base_url() ?>/xp1?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#xp1').html(data[0]["status"]);
        }
    });
}

function xp2() {
    $.ajax({
        url: "<?= base_url() ?>/xp2?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#xp2').html(data[0]["status"]);
        }
    });
}

function relay_uv() {
    $.ajax({
        url: "<?= base_url() ?>/relay_uv?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#relay_uv').html(data[0]["status"]);
        }
    });
}

function level1() {
    $.ajax({
        url: "<?= base_url() ?>/level1?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#level1').html(data[0]["status"]);
        }
    });
}

function level2() {
    $.ajax({
        url: "<?= base_url() ?>/level2?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#level2').html(data[0]["status"]);
        }
    });
}

function xlevel1() {
    $.ajax({
        url: "<?= base_url() ?>/xlevel1?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#xlevel1').html(data[0]["status"]);
        }
    });
}

function xlevel2() {
    $.ajax({
        url: "<?= base_url() ?>/xlevel2?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#xlevel2').html(data[0]["status"]);
        }
    });
}


function suhu_air() {
    $.ajax({
        url: "<?= base_url() ?>/suhu_air?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#suhu_air').html(data[0]["nilai"]);
        }
    });
}

function suhu_udara() {
    $.ajax({
        url: "<?= base_url() ?>/suhu_udara?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#suhu_udara').html(data[0]["nilai"]);
        }
    });
}

function kelembaban() {
    $.ajax({
        url: "<?= base_url() ?>/kelembaban?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#kelembaban').html(data[0]["nilai"]);
        }
    });
}

function tds() {
    $.ajax({
        url: "<?= base_url() ?>/tds?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#tds').html(data[0]["nilai"]);
        }
    });
}

function ph() {
    $.ajax({
        url: "<?= base_url() ?>/ph?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#ph').html(data[0]["nilai"]);
        }
    });
}

function amonia() {
    $.ajax({
        url: "<?= base_url() ?>/amonia?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#amonia').html(data[0]["nilai"]);
        }
    });
}

function arus_pompa_1() {
    $.ajax({
        url: "<?= base_url() ?>/arus_pompa_1?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#arus_pompa_1').html(data[0]["nilai"]);
        }
    });
}

function arus_pompa_2() {
    $.ajax({
        url: "<?= base_url() ?>/arus_pompa_2?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#arus_pompa_2').html(data[0]["nilai"]);
        }
    });
}

function arus_xpompa_1() {
    $.ajax({
        url: "<?= base_url() ?>/arus_xpompa_1?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#arus_xpompa_1').html(data[0]["nilai"]);
        }
    });
}

function arus_xpompa_2() {
    $.ajax({
        url: "<?= base_url() ?>/arus_xpompa_2?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#arus_xpompa_2').html(data[0]["nilai"]);
        }
    });
}

function uv() {
    $.ajax({
        url: "<?= base_url() ?>/uv?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#uv').html(data[0]["nilai"]);
        }
    });
}
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-primary">DAFTAR PANEL</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <a href="<?= base_url('detail') ?>?name=panel_1">
                        <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-bolt"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Panel 1</span>
                                <span class="info-box-text">Surabaya</span>
                            </div>

                        </div>
                    </a>
                </div>

            </div>
            <!-- /.content-wrapper -->
    </section>




    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-secondary">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->