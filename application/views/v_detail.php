<script>
$(document).ready(function() {
    live_data();
})

function live_data() {
    setTimeout(function() {
        line_r();
        line_s();
        line_t();
        line_rs();
        line_st();
        line_rt();
        suhu();
        live_data();
    }, 1000);
}

function suhu() {
    $.ajax({
        url: "http://powermeter.onprojek.com/suhu?id=1&order=desc&customer=airnav",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#nilai_suhu').html(data[0]["value"] + " C");
        }
    });
}

function line_s() {
    $.ajax({
        url: "<?= base_url() ?>/line_s?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_s_tegangan').html(data[0]["tegangan"] + " V");
            $('#line_s_arus').html(data[0]["arus"] + " A");
            $('#line_s_daya').html(data[0]["daya"] + " W");
            $('#line_s_frekuensi').html(data[0]["frekuensi"] + " Hz");
            $('#line_s_kwh').html(data[0]["kwh"]);
        }
    });
}

function line_t() {
    $.ajax({
        url: "<?= base_url() ?>/line_t?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_t_tegangan').html(data[0]["tegangan"] + " V");
            $('#line_t_arus').html(data[0]["arus"] + " A");
            $('#line_t_daya').html(data[0]["daya"] + " W");
            $('#line_t_frekuensi').html(data[0]["frekuensi"] + " Hz");
            $('#line_t_kwh').html(data[0]["kwh"]);
        }
    });
}

function line_r() {
    $.ajax({
        url: "<?= base_url() ?>/line_r?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_r_tegangan').html(data[0]["tegangan"] + " V");
            $('#line_r_arus').html(data[0]["arus"] + " A");
            $('#line_r_daya').html(data[0]["daya"] + " W");
            $('#line_r_frekuensi').html(data[0]["frekuensi"] + " Hz");
            $('#line_r_kwh').html(data[0]["kwh"]);
        }
    });
}

function line_rs() {
    $.ajax({
        url: "<?= base_url() ?>/line_rs?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_rs_tegangan').html(data[0]["tegangan"] + " V");
        }
    });
}

function line_st() {
    $.ajax({
        url: "<?= base_url() ?>/line_st?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_st_tegangan').html(data[0]["tegangan"] + " V");

        }
    });
}

function line_rt() {
    $.ajax({
        url: "<?= base_url() ?>/line_rt?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_rt_tegangan').html(data[0]["tegangan"] + " V");

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
                    <h1 class="m-0 text-primary">Panel 1 (Surabaya)</h1>

                    <a href="<?= base_url('monitoring/reset_kwh') ?>">
                        <button type="button" class="btn btn-warning">
                            Reset KWH
                        </button>
                    </a>
                    <button type="button" class="btn btn-primary">
                        Suhu : <div id="nilai_suhu"></div>
                    </button>


                    <h3 class="m-0 text-secondary">Voltage</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 1</span>
                            <span class="info-box-number">
                                <div id="line_r_tegangan"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 2</span></span>
                            <span class="info-box-number">
                                <div id="line_s_tegangan"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 3</span>
                            <span class="info-box-number">
                                <div id="line_t_tegangan"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 12</span>
                            <span class="info-box-number">
                                <div id="line_rs_tegangan"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 23</span>
                            <span class="info-box-number">
                                <div id="line_st_tegangan"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 13</span>
                            <span class="info-box-number">
                                <div id="line_rt_tegangan"></div>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.content-wrapper -->
    </section>


    <!-- current section -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-secondary">Current</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wind"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 1</span>
                            <span class="info-box-number">
                                <div id="line_r_arus"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-wind"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 2</span></span>
                            <span class="info-box-number">
                                <div id="line_s_arus"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-wind"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 3</span>
                            <span class="info-box-number">
                                <div id="line_t_arus"></div>
                            </span>
                        </div>

                    </div>
                </div>


            </div>
            <!-- /.content-wrapper -->
    </section>


    <!-- KWH section -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-secondary">KWH</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-plug"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 1</span>
                            <span class="info-box-number">
                                <div id="line_r_kwh"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-plug"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 2</span></span>
                            <span class="info-box-number">
                                <div id="line_s_kwh"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-plug"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 3</span>
                            <span class="info-box-number">
                                <div id="line_t_kwh"></div>
                            </span>
                        </div>

                    </div>
                </div>


            </div>
            <!-- /.content-wrapper -->
    </section>


    <!-- power section -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-secondary">Power</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-dumbbell"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 1</span>
                            <span class="info-box-number">
                                <div id="line_r_daya"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-dumbbell"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 2</span></span>
                            <span class="info-box-number">
                                <div id="line_s_daya"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-dumbbell"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 3</span>
                            <span class="info-box-number">
                                <div id="line_t_daya"></div>
                            </span>
                        </div>

                    </div>
                </div>


            </div>
            <!-- /.content-wrapper -->
    </section>



    <!-- frequency section -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-secondary">Frequency</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-ellipsis-h"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 1</span>
                            <span class="info-box-number">
                                <div id="line_r_frekuensi"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-ellipsis-h"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 2</span></span>
                            <span class="info-box-number">
                                <div id="line_s_frekuensi"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-ellipsis-h"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line 3</span>
                            <span class="info-box-number">
                                <div id="line_t_frekuensi"></div>
                            </span>
                        </div>

                    </div>
                </div>


            </div>
            <!-- /.content-wrapper -->
    </section>



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-secondary">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->