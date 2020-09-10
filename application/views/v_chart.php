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
            showGraph10();
            showGraph11();
            done();
        }, 500);
    }

    function showGraph1() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>/suhu_air?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("suhu_air").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Suhu",
                            data: values.reverse(),
                            backgroundColor: ['rgba(60,141,188, 0.2)'],
                            borderColor: ['rgba(60,141,188, 1)']
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
            url: "<?= base_url() ?>/suhu_udara?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("suhu_udara").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "suhu udara",
                            data: values.reverse(),
                            backgroundColor: ['rgba(70,0,0, 0.2)'],
                            borderColor: ['rgba(70,0,0, 1)']
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
            url: "<?= base_url() ?>/kelembaban?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("kelembaban").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "Kelembaban",
                            data: values.reverse(),
                            backgroundColor: ['rgba(255,165,0, 0.2)'],
                            borderColor: ['rgba(255,165,0, 1)']
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
            url: "<?= base_url() ?>/tds?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("tds").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "tds",
                            data: values.reverse(),
                            backgroundColor: ['rgba(240,128,128, 0.2)'],
                            borderColor: ['rgba(240,128,128, 1)']
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
            url: "<?= base_url() ?>/ph?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("ph").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "ph",
                            data: values.reverse(),
                            backgroundColor: ['rgba(124,252,0, 0.2)'],
                            borderColor: ['rgba(124,252,0, 1)']
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
            url: "<?= base_url() ?>/amonia?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("amonia").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "amonia",
                            data: values.reverse(),
                            backgroundColor: ['rgba(0,255,127, 0.2)'],
                            borderColor: ['rgba(0,255,127, 1)']
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
            url: "<?= base_url() ?>/arus_pompa_1?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("arus_pompa_1").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "arus pompa 1",
                            data: values.reverse(),
                            backgroundColor: ['rgba(32,178,170, 0.2)'],
                            borderColor: ['rgba(32,178,170, 1)']
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
            url: "<?= base_url() ?>/arus_pompa_2?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("arus_pompa_2").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "arus pompa 2",
                            data: values.reverse(),
                            backgroundColor: ['rgba(0,255,255, 0.2)'],
                            borderColor: ['rgba(0,255,255, 1)']
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
            url: "<?= base_url() ?>/arus_xpompa_1?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("arus_xpompa_1").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "arus xpompa 1",
                            data: values.reverse(),
                            backgroundColor: ['rgba(30,144,255, 0.2)'],
                            borderColor: ['rgba(30,144,255, 1)']
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

    function showGraph10() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>/arus_xpompa_2?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("arus_xpompa_2").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "arus xpompa 2",
                            data: values.reverse(),
                            backgroundColor: ['rgba(255,0,255, 0.2)'],
                            borderColor: ['rgba(255,0,255, 1)']
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

    function showGraph11() {
        $.ajax({
            method: "GET",
            url: "<?= base_url() ?>/uv?limit=60&order=desc&customer=<?= $this->session->userdata('customer'); ?>",
            success: function(e) {
                var nama = [],
                    values = [];
                for (var i in e) {
                    nama.push(e[i].waktu);
                    values.push(e[i].nilai);
                }
                var ctx = document.getElementById("uv").getContext('2d');
                var panzerChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: nama.reverse(),
                        datasets: [{
                            label: "uv",
                            data: values.reverse(),
                            backgroundColor: ['rgba(128,0,128, 0.2)'],
                            borderColor: ['rgba(128,0,128, 1)']
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

                <!--
                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Suhu Air
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="suhu_air"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                  
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Suhu Udara
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="suhu_udara"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                 
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            kelembaban
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="kelembaban"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            TDS
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="tds"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                   
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            PH
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="ph"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                   
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Amonia
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="amonia"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    
                </div>
-->
                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Arus Pompa 1
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="arus_pompa_1"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body-->
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Arus Pompa 2
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="arus_pompa_2"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body-->
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Arus XPompa 1
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="arus_xpompa_1"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body-->
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Arus XPompa 2
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="arus_xpompa_2"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body-->
                </div>

                <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            UV
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="grafik">
                            <canvas id="uv"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body-->
                </div>

                <!-- /.col -->
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