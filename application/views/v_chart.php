<script>
$(document).ready(function() {
    done();

    function done() {
        setTimeout(() => {
            showGraph1();
            showGraph2();
            showGraph3();
            showGraph4();
            showGraph5();
            showGraph6();
            showGraph7();
            showGraph8();
            showGraph9();
            done();
        }, 500);
    }

    function showGraph1() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_r?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].arus);
                }
                var ctx = document.getElementById("arus_line_r").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Arus Line 1",
                            data: values.reverse(),
                            backgroundColor: ['rgba(222, 52, 70, 0.2)'],
                            borderColor: ['rgba(222, 52, 70, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }



    function showGraph2() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_s?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].arus);
                }
                var ctx = document.getElementById("arus_line_s").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Arus Line 2",
                            data: values.reverse(),
                            backgroundColor: ['rgba(250, 194, 12, 0.2)'],
                            borderColor: ['rgba(250, 194, 12, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }


    function showGraph3() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_t?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].arus);
                }
                var ctx = document.getElementById("arus_line_t").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Arus Line 3",
                            data: values.reverse(),
                            backgroundColor: ['rgba(53, 60, 67, 0.2)'],
                            borderColor: ['rgba(53, 60, 67, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }

    function showGraph4() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_r?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].daya);
                }
                var ctx = document.getElementById("daya_line_r").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Daya Line 1",
                            data: values.reverse(),
                            backgroundColor: ['rgba(222, 52, 70, 0.2)'],
                            borderColor: ['rgba(222, 52, 70, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }



    function showGraph5() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_s?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].daya);
                }
                var ctx = document.getElementById("daya_line_s").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Daya Line 2",
                            data: values.reverse(),
                            backgroundColor: ['rgba(250, 194, 12, 0.2)'],
                            borderColor: ['rgba(250, 194, 12, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }


    function showGraph6() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_t?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].daya);
                }
                var ctx = document.getElementById("daya_line_t").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Daya Line 3",
                            data: values.reverse(),
                            backgroundColor: ['rgba(53, 60, 67, 0.2)'],
                            borderColor: ['rgba(53, 60, 67, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }



    function showGraph7() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_r?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].kwh);
                }
                var ctx = document.getElementById("kwh_line_r").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Kwh line r",
                            data: values.reverse(),
                            backgroundColor: ['rgba(222, 52, 70, 0.2)'],
                            borderColor: ['rgba(222, 52, 70, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }

    function showGraph8() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_s?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].kwh);
                }
                var ctx = document.getElementById("kwh_line_s").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Kwh line s",
                            data: values.reverse(),
                            backgroundColor: ['rgba(250, 194, 12, 0.2)'],
                            borderColor: ['rgba(250, 194, 12, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }

    function showGraph9() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>line_t?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].kwh);
                }
                var ctx = document.getElementById("kwh_line_t").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Kwh line t",
                            data: values.reverse(),
                            backgroundColor: ['rgba(53, 60, 67, 0.2)'],
                            borderColor: ['rgba(53, 60, 67, 1)']
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        animation: {
                            duration: 0
                        },
                        hover: {
                            animationDuration: 0
                        },
                        responsiveAnimationDuration: 0
                    }
                });
            }
        });
    }

});
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Real Time Monitor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>



    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Arus Line 1
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="arus_line_r"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body-->
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Arus Line 2
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="arus_line_s"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body-->
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Arus Line 3
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="arus_line_t"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>


                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Daya Line 1
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="daya_line_r"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>


                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Daya Line 2
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="daya_line_s"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>


                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Daya Line 3
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="daya_line_t"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Kwh Line 1
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="kwh_line_r"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Kwh line 2
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="kwh_line_s"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Kwh Line 3
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="kwh_line_t"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->