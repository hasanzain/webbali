<script>
$(document).ready(function() {
    live_data();
})

function live_data() {
    setTimeout(function() {
        line_r();
        live_data();
    }, 1000);
}


function line_r() {
    $.ajax({
        url: "<?= base_url() ?>/line_r?limit=1&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_r_tegangan').html(data[0]["tegangan"]);
            $('#line_r_arus').html(data[0]["arus"]);
            $('#line_r_daya').html(data[0]["daya"]);
            $('#line_r_kwh').html(data[0]["kwh"]);
            $('#line_r_frekuensi').html(data[0]["frekuensi"]);
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

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line R</span>
                            <span class="info-box-number">
                                <div id="line_r_tegangan"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line S</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line T</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line RS</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line ST</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line RT</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
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

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-wind"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line R</span>
                            <span class="info-box-number">
                                <div id="line_r_arus"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-wind"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line S</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-wind"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line T</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
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

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-dumbbell"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line R</span>
                            <span class="info-box-number">
                                <div id="line_r_daya"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-dumbbell"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line S</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-dumbbell"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line T</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.content-wrapper -->
    </section>


    <!-- kwh section -->
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

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-tachometer-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line R</span>
                            <span class="info-box-number">
                                <div id="line_r_kwh"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-tachometer-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line S</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-tachometer-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line T</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
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

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-ellipsis-h"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line R</span>
                            <span class="info-box-number">
                                <div id="line_r_frekuensi"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-ellipsis-h"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line S</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-4 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-ellipsis-h"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Line T</span>
                            <span class="info-box-number">
                                <div id="arus_pompa_1"></div>
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