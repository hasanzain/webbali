<script>
$(document).ready(function() {
    live_data();
})

function live_data() {
    setTimeout(function() {
        data_sensor();
        relay1();
        relay2();
        relay3();
        relay4();
        relay5();
        relay6();
        relay7();
        relay8();
        icmp();
        live_data();
    }, 1000);
}

function data_sensor() {
    $.ajax({
        url: "<?= base_url() ?>/data_sensor?order=desc&limit=1",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_suhu').html(data[0]["suhu"] + " C");
            $('#line_arus').html(data[0]["arus"] + " A");
            $('#line_tegangan').html(data[0]["tegangan"] + " V");
            $('#line_daya').html(data[0]["daya"] + " W");
        }
    });
}

function relay1() {
    $.ajax({
        url: "<?= base_url() ?>/relay?nama=relay1",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_relay_1').html("status relay : " + data[0]["status"]);
        }
    });
}

function relay2() {
    $.ajax({
        url: "<?= base_url() ?>/relay?nama=relay2",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_relay_2').html("status relay : " + data[0]["status"]);
        }
    });
}

function relay3() {
    $.ajax({
        url: "<?= base_url() ?>/relay?nama=relay3",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_relay_3').html("status relay : " + data[0]["status"]);
        }
    });
}

function relay4() {
    $.ajax({
        url: "<?= base_url() ?>/relay?nama=relay4",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_relay_4').html("status relay : " + data[0]["status"]);
        }
    });
}

function relay5() {
    $.ajax({
        url: "<?= base_url() ?>/relay?nama=relay5",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_relay_5').html("status relay : " + data[0]["status"]);
        }
    });
}

function relay6() {
    $.ajax({
        url: "<?= base_url() ?>/relay?nama=relay6",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_relay_6').html("status relay : " + data[0]["status"]);
        }
    });
}

function relay7() {
    $.ajax({
        url: "<?= base_url() ?>/relay?nama=relay7",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_relay_7').html("status relay : " + data[0]["status"]);
        }
    });
}

function relay8() {
    $.ajax({
        url: "<?= base_url() ?>/relay?nama=relay8",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_relay_8').html("status relay : " + data[0]["status"]);
        }
    });
}

function icmp() {
    $.ajax({
        url: "<?= base_url() ?>/icmp?order=desc&limit=1&lokasi=benoa",
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#line_icmp_1').html("status ICMP : " + data[0]["icmp_1"]);
            $('#line_icmp_2').html("status ICMP : " + data[0]["icmp_2"]);
            $('#line_icmp_3').html("status ICMP : " + data[0]["icmp_3"]);
            $('#line_icmp_4').html("status ICMP : " + data[0]["icmp_4"]);
            $('#line_icmp_5').html("status ICMP : " + data[0]["icmp_5"]);
            $('#line_icmp_6').html("status ICMP : " + data[0]["icmp_6"]);
            $('#line_icmp_7').html("status ICMP : " + data[0]["icmp_7"]);
            $('#line_icmp_8').html("status ICMP : " + data[0]["icmp_8"]);

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
                    <h1 class="m-0 text-primary">Sensor Benoa</h1>


                    <h3 class="m-0 text-secondary">Data</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">


                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i
                                class="fas fa-thermometer-quarter"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Suhu</span>
                            <span class="info-box-number">
                                <div id="line_suhu"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-water"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Arus</span></span>
                            <span class="info-box-number">
                                <div id="line_arus"></div>
                            </span>
                        </div>

                    </div>
                </div>


                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bolt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tegangan</span>
                            <span class="info-box-number">
                                <div id="line_tegangan"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dumbbell"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Daya</span>
                            <span class="info-box-number">
                                <div id="line_daya"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">


                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-toggle-on"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relay 1</span>
                            <span class="info-box-number">
                                <div id="line_relay_1"></div>
                                <div id="line_icmp_1"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-toggle-on"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relay 2</span>
                            <span class="info-box-number">
                                <div id="line_relay_2"></div>
                                <div id="line_icmp_2"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-toggle-on"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relay 3</span>
                            <span class="info-box-number">
                                <div id="line_relay_3"></div>
                                <div id="line_icmp_3"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-toggle-on"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relay 4</span>
                            <span class="info-box-number">
                                <div id="line_relay_4"></div>
                                <div id="line_icmp_4"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-toggle-on"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relay 5</span>
                            <span class="info-box-number">
                                <div id="line_relay_5"></div>
                                <div id="line_icmp_5"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-toggle-on"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relay 6</span>
                            <span class="info-box-number">
                                <div id="line_relay_6"></div>
                                <div id="line_icmp_6"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-toggle-on"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relay 7</span>
                            <span class="info-box-number">
                                <div id="line_relay_7"></div>
                                <div id="line_icmp_7"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>


                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-toggle-on"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Relay 8</span>
                            <span class="info-box-number">
                                <div id="line_relay_8"></div>
                                <div id="line_icmp_8"></div>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>

            </div>
            <!-- /.content-wrapper -->
    </section>



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-secondary">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->