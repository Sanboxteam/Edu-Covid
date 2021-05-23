// // Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example

function chartPositif() {
    var ctx = document.getElementById("chart");
    var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Tanggal 20", "Tanggal 21", "Tanggal 22", "Tanggal 23", "Tanggal 24", "Tanggal 25"],
            datasets: [{
                label: "Jumlah kasus positif:",
                backgroundColor: "green",
                borderColor: "rgba(2,117,216,1)",
                data: [1455788, 1460184, 1465928, 1471225, 1476452, 1482559],
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 1400000,
                        max: 1500000,
                        maxTicksLimit: 3
                    },
                    gridLines: {
                        display: true
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });
}

function chartMeninggal() {
    var ctx = document.getElementById("meninggal");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Tanggal 20", "Tanggal 21", "Tanggal 22", "Tanggal 23", "Tanggal 24", "Tanggal 25"],
            datasets: [{
                label: "Jumlah Kasus Meninggal Dunia:",
                backgroundColor: "white",
                borderColor: "rgba(2,117,216,1)",
                data: [39447, 39711, 39778, 40012, 40081, 40124],
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 37000,
                        max: 42000,
                        maxTicksLimit: 3
                    },
                    gridLines: {
                        display: true
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });
}