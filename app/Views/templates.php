<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>UAS PWL</title>

    <link href="<?= base_url('lib/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/typicons.font/typicons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/flag-icon-css/css/flag-icon.min.css') ?>" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="<?= base_url('css/azia.css') ?>">


</head>

<body>

    <div class="az-header">
        <div class="container">
            <div class="az-header-left">
                <a href="<?= site_url('home/index') ?>" class="az-logo"><span></span>ABC</a>
                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-menu">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="<?= site_url('home/index') ?>" class="nav-link">
                            <ion-icon name="home" style="font-size: 20px; margin-right:2px;"></ion-icon> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('toko/index') ?>" class="nav-link">
                            <ion-icon name="shirt" style="font-size: 20px; margin-right:2px;"></ion-icon> Kaos
                        </a>
                    </li>
                </ul>
            </div><!-- az-header-menu -->
            <?php
            $jml_item = 0;
            $cart = $cart->contents();
            foreach ($cart as $c) {
                $jml_item += $c['qty'];
            }
            ?>
            <div class="az-header-right">
                <a href="<?= site_url('toko/keranjang') ?>" class="nav-link mr-3" style="color: black;">
                    <ion-icon name="cart" style="font-size: 20px; margin-right:2px;"></ion-icon>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white">
                        <?= $jml_item; ?>
                    </span>
                </a>
                <small><?= session()->get('username') ?> |</small>
                <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="<?= base_url('img/face1.jpg') ?>" alt=""></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="az-header-profile">
                            <div class="az-img-user">
                                <img src="<?= base_url('img/face1.jpg') ?>" alt="">
                            </div><!-- az-img-user -->
                            <h6><?= session()->get('username') ?></h6>
                            <span>Premium Member</span>
                        </div><!-- az-header-profile -->
                        <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="<?= site_url('auth/logout') ?>" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                    </div><!-- dropdown-menu -->
                </div>
            </div><!-- az-header-right -->
        </div><!-- container -->
    </div><!-- az-header -->




    <?= $this->renderSection('content'); ?>





    <script src="<?= base_url('lib/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('lib/ionicons/ionicons.js') ?>"></script>
    <script src="<?= base_url('lib/jquery.flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('lib/jquery.flot/jquery.flot.resize.js') ?>"></script>
    <script src="<?= base_url('lib/chart.js/Chart.bundle.min.js') ?>"></script>
    <script src="<?= base_url('lib/peity/jquery.peity.min.js') ?>"></script>

    <script src="<?= base_url('js/azia.js') ?>"></script>
    <script src="<?= base_url('js/chart.flot.sampledata.js') ?>"></script>
    <script src="<?= base_url('js/dashboard.sampledata.js') ?>"></script>
    <script src="<?= base_url('js/jquery.cookie.js') ?>" type="text/javascript"></script>
    <script>
        $(function() {
            'use strict'

            var plot = $.plot('#flotChart', [{
                data: flotSampleData3,
                color: '#007bff',
                lines: {
                    fillColor: {
                        colors: [{
                            opacity: 0
                        }, {
                            opacity: 0.2
                        }]
                    }
                }
            }, {
                data: flotSampleData4,
                color: '#560bd0',
                lines: {
                    fillColor: {
                        colors: [{
                            opacity: 0
                        }, {
                            opacity: 0.2
                        }]
                    }
                }
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 8
                },
                yaxis: {
                    show: true,
                    min: 0,
                    max: 100,
                    ticks: [
                        [0, ''],
                        [20, '20K'],
                        [40, '40K'],
                        [60, '60K'],
                        [80, '80K']
                    ],
                    tickColor: '#eee'
                },
                xaxis: {
                    show: true,
                    color: '#fff',
                    ticks: [
                        [25, 'OCT 21'],
                        [75, 'OCT 22'],
                        [100, 'OCT 23'],
                        [125, 'OCT 24']
                    ],
                }
            });

            $.plot('#flotChart1', [{
                data: dashData2,
                color: '#00cccc'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.2
                            }]
                        }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 35
                },
                xaxis: {
                    show: false,
                    max: 50
                }
            });

            $.plot('#flotChart2', [{
                data: dashData2,
                color: '#007bff'
            }], {
                series: {
                    shadowSize: 0,
                    bars: {
                        show: true,
                        lineWidth: 0,
                        fill: 1,
                        barWidth: .5
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 35
                },
                xaxis: {
                    show: false,
                    max: 20
                }
            });


            //-------------------------------------------------------------//


            // Line chart
            $('.peity-line').peity('line');

            // Bar charts
            $('.peity-bar').peity('bar');

            // Bar charts
            $('.peity-donut').peity('donut');

            var ctx5 = document.getElementById('chartBar5').getContext('2d');
            new Chart(ctx5, {
                type: 'bar',
                data: {
                    labels: [0, 1, 2, 3, 4, 5, 6, 7],
                    datasets: [{
                        data: [2, 4, 10, 20, 45, 40, 35, 18],
                        backgroundColor: '#560bd0'
                    }, {
                        data: [3, 6, 15, 35, 50, 45, 35, 25],
                        backgroundColor: '#cad0e8'
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: false
                    },
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            display: false,
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11,
                                max: 80
                            }
                        }],
                        xAxes: [{
                            barPercentage: 0.6,
                            gridLines: {
                                color: 'rgba(0,0,0,0.08)'
                            },
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11,
                                display: false
                            }
                        }]
                    }
                }
            });

            // Donut Chart
            var datapie = {
                labels: ['Search', 'Email', 'Referral', 'Social', 'Other'],
                datasets: [{
                    data: [25, 20, 30, 15, 10],
                    backgroundColor: ['#6f42c1', '#007bff', '#17a2b8', '#00cccc', '#adb2bd']
                }]
            };

            var optionpie = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false,
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            };

            // For a doughnut chart
            var ctxpie = document.getElementById('chartDonut');
            var myPieChart6 = new Chart(ctxpie, {
                type: 'doughnut',
                data: datapie,
                options: optionpie
            });

        });
    </script>
</body>

</html>