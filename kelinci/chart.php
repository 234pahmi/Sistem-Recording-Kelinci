<script type="text/javascript" src="../assets/chart.js/Chart.js"></script>
<script type="text/javascript" src="../assets/chart.js/kelinci.js"></script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Area Chart Example
    var ctx = document.getElementById("pertumbuhan").getContext("2d");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Minggu ke-5", "Minggu ke-7", "Minggu ke-9", "Minggu ke-11", "Minggu ke-13", "Minggu ke-15", "Minggu ke-17", "Minggu ke-19", "Minggu ke-21", "Minggu ke-23"],
            datasets: [{
                label: "Jantan",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 215, 123, 0.1)",
                borderColor: "rgba(78, 215, 123, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(78, 115, 293, 1)",
                pointHoverBorderColor: "rgba(78, 115, 293, 1)",
                pointHitRadius: 6,
                pointBorderWidth: 3,
                data: [
                    <?php
                    foreach ($kelinciJantan as $k) {
                        echo '"' . ceil($k['AVG(minggu_5)']) . '",' . '"' . ceil($k['AVG(minggu_7)']) . '",' . '"' . ceil($k['AVG(minggu_9)']) . '",' . '"' . ceil($k['AVG(minggu_11)']) . '",' . '"' . ceil($k['AVG(minggu_13)']) . '",' . '"' . ceil($k['AVG(minggu_15)']) . '",' . '"' . ceil($k['AVG(minggu_17)']) . '",' . '"' . ceil($k['AVG(minggu_19)']) . '",' . '"' . ceil($k['AVG(minggu_21)']) . '",' . '"' . ceil($k['AVG(minggu_23)']) . '",';
                    }
                    ?>

                ],
            }, {
                label: "Betina",
                lineTension: 0.3,
                backgroundColor: "rgba(268, 295, 23, 0.1)",
                borderColor: "rgba(268, 115, 113, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(231, 255, 25, 1)",
                pointBorderColor: "rgba(231, 275, 25, 1)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(231, 225, 25, 1)",
                pointHoverBorderColor: "rgba(231, 225, 25, 1)",
                pointHitRadius: 6,
                pointBorderWidth: 3,
                data: [
                    <?php
                    foreach ($kelinciBetina as $k) {
                        echo '"' . ceil($k['AVG(minggu_5)']) . '",' . '"' . ceil($k['AVG(minggu_7)']) . '",' . '"' . ceil($k['AVG(minggu_9)']) . '",' . '"' . ceil($k['AVG(minggu_11)']) . '",' . '"' . ceil($k['AVG(minggu_13)']) . '",' . '"' . ceil($k['AVG(minggu_15)']) . '",' . '"' . ceil($k['AVG(minggu_17)']) . '",' . '"' . ceil($k['AVG(minggu_19)']) . '",' . '"' . ceil($k['AVG(minggu_21)']) . '",' . '"' . ceil($k['AVG(minggu_23)']) . '",';
                    }
                    ?>

                ],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 15,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 8,
                        padding: 20,
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    },
                    scaleLabel: {
                        display: true,
                        labelString: "Gram",
                    }
                }],
            },
            legend: {
                display: true
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10

            },
        }


    });


    // Area Chart Example
    var ctx = document.getElementById("f").getContext("2d");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Minggu ke-5", "Minggu ke-7", "Minggu ke-9", "Minggu ke-11", "Minggu ke-13", "Minggu ke-15", "Minggu ke-17", "Minggu ke-19", "Minggu ke-21", "Minggu ke-23"],
            datasets: [{
                label: "F1",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 215, 123, 0.1)",
                borderColor: "rgba(78, 215, 123, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(78, 115, 293, 1)",
                pointHoverBorderColor: "rgba(78, 115, 293, 1)",
                pointHitRadius: 6,
                pointBorderWidth: 3,
                data: [
                    <?php
                    foreach ($f1 as $f) {
                        echo '"' . ceil($f['AVG(minggu_5)']) . '",' . '"' . ceil($f['AVG(minggu_7)']) . '",' . '"' . ceil($f['AVG(minggu_9)']) . '",' . '"' . ceil($f['AVG(minggu_11)']) . '",' . '"' . ceil($f['AVG(minggu_13)']) . '",' . '"' . ceil($f['AVG(minggu_15)']) . '",' . '"' . ceil($f['AVG(minggu_17)']) . '",' . '"' . ceil($f['AVG(minggu_19)']) . '",' . '"' . ceil($f['AVG(minggu_21)']) . '",' . '"' . ceil($f['AVG(minggu_23)']) . '",';
                    }
                    ?>

                ],
            }, {
                label: "F2",
                lineTension: 0.3,
                backgroundColor: "rgba(268, 295, 23, 0.1)",
                borderColor: "rgba(268, 55, 63, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(231, 255, 25, 1)",
                pointBorderColor: "rgba(231, 275, 25, 1)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(231, 225, 25, 1)",
                pointHoverBorderColor: "rgba(231, 225, 25, 1)",
                pointHitRadius: 6,
                pointBorderWidth: 3,
                data: [
                    <?php
                    foreach ($f2 as $f) {
                        echo '"' . ceil($f['AVG(minggu_5)']) . '",' . '"' . ceil($f['AVG(minggu_7)']) . '",' . '"' . ceil($f['AVG(minggu_9)']) . '",' . '"' . ceil($f['AVG(minggu_11)']) . '",' . '"' . ceil($f['AVG(minggu_13)']) . '",' . '"' . ceil($f['AVG(minggu_15)']) . '",' . '"' . ceil($f['AVG(minggu_17)']) . '",' . '"' . ceil($f['AVG(minggu_19)']) . '",' . '"' . ceil($f['AVG(minggu_21)']) . '",' . '"' . ceil($f['AVG(minggu_23)']) . '",';
                    }
                    ?>

                ],
            }, {
                label: "F3",
                lineTension: 0.3,
                backgroundColor: "rgba(48, 55, 293, 0.1)",
                borderColor: "rgba(48, 55, 283, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(50, 50, 50, 1)",
                pointBorderColor: "rgba(50, 50, 50, 1)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(50, 50, 50, 1)",
                pointHoverBorderColor: "rgba(50, 50, 50, 1)",
                pointHitRadius: 6,
                pointBorderWidth: 3,
                data: [
                    <?php
                    foreach ($f3 as $f) {
                        echo '"' . ceil($f['AVG(minggu_5)']) . '",' . '"' . ceil($f['AVG(minggu_7)']) . '",' . '"' . ceil($f['AVG(minggu_9)']) . '",' . '"' . ceil($f['AVG(minggu_11)']) . '",' . '"' . ceil($f['AVG(minggu_13)']) . '",' . '"' . ceil($f['AVG(minggu_15)']) . '",' . '"' . ceil($f['AVG(minggu_17)']) . '",' . '"' . ceil($f['AVG(minggu_19)']) . '",' . '"' . ceil($f['AVG(minggu_21)']) . '",' . '"' . ceil($f['AVG(minggu_23)']) . '",';
                    }
                    ?>

                ],
            }, {
                label: "F4",
                lineTension: 0.3,
                backgroundColor: "rgba(48, 230, 253, 0.1)",
                borderColor: "rgba(48, 180, 253, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(180, 100, 190, 1)",
                pointBorderColor: "rgba(180, 100, 190, 1)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(180, 100, 190, 1)",
                pointHoverBorderColor: "rgba(180, 100, 190, 1)",
                pointHitRadius: 6,
                pointBorderWidth: 3,
                data: [
                    <?php
                    foreach ($f4 as $f) {
                        echo '"' . ceil($f['AVG(minggu_5)']) . '",' . '"' . ceil($f['AVG(minggu_7)']) . '",' . '"' . ceil($f['AVG(minggu_9)']) . '",' . '"' . ceil($f['AVG(minggu_11)']) . '",' . '"' . ceil($f['AVG(minggu_13)']) . '",' . '"' . ceil($f['AVG(minggu_15)']) . '",' . '"' . ceil($f['AVG(minggu_17)']) . '",' . '"' . ceil($f['AVG(minggu_19)']) . '",' . '"' . ceil($f['AVG(minggu_21)']) . '",' . '"' . ceil($f['AVG(minggu_23)']) . '",';
                    }
                    ?>

                ],
            }, {
                label: "F5",
                lineTension: 0.3,
                backgroundColor: "rgba(191, 0, 255, 0.1)",
                borderColor: "rgba(191, 80, 255, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(0, 255, 0, 1)",
                pointBorderColor: "rgba(0, 255, 0, 1)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(0, 255, 0, 1)",
                pointHoverBorderColor: "rgba(0, 255, 0, 1)",
                pointHitRadius: 6,
                pointBorderWidth: 3,
                data: [
                    <?php
                    foreach ($f5 as $f) {
                        echo '"' . ceil($f['AVG(minggu_5)']) . '",' . '"' . ceil($f['AVG(minggu_7)']) . '",' . '"' . ceil($f['AVG(minggu_9)']) . '",' . '"' . ceil($f['AVG(minggu_11)']) . '",' . '"' . ceil($f['AVG(minggu_13)']) . '",' . '"' . ceil($f['AVG(minggu_15)']) . '",' . '"' . ceil($f['AVG(minggu_17)']) . '",' . '"' . ceil($f['AVG(minggu_19)']) . '",' . '"' . ceil($f['AVG(minggu_21)']) . '",' . '"' . ceil($f['AVG(minggu_23)']) . '",';
                    }
                    ?>

                ],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 15,
                    bottom: 40
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 8,
                        padding: 20,
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    },
                    scaleLabel: {
                        display: true,
                        labelString: "Gram",
                    }
                }],
            },
            legend: {
                display: true
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10

            }
        }


    });
</script>