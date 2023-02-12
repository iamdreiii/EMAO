<!DOCTYPE html>
<html>
<head>
    <title>Chart.js Multi-line Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
   
</head>
<body>
<!-- <canvas id="myChart2"></canvas> -->
<!-- DISPERSAL -->
<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var monthsdispersal = <?php echo $monthsdispersal; ?>;
    var yearsdispersal = <?php echo $yearsdispersal; ?>;
    var data_pointsdispersal = <?php echo $data_pointsdispersal; ?>;
    var colors = ['#007bff', '#28a745', '#dc3545', '#ffc107', '#17a2b8', '#6610f2'];
    var datasetsdispersal = [];
    for (var i = 0; i < yearsdispersal.length; i++) {
        datasetsdispersal.push({
        label: yearsdispersal[i],
        data: data_pointsdispersal[i],
        borderColor: colors[i % colors.length],
        backgroundColor: colors[i % colors.length],
        fill: false
    });
    }
    var chart2 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: monthsdispersal,
        datasets: datasetsdispersal
    },
    options: {
        maintainAspectRatio: false,
        scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<!-- USERS -->
<script>
    var ctx = document.getElementById('myChart4').getContext('2d');
    var monthsuser = <?php echo $monthsuser; ?>;
    var yearsuser = <?php echo $yearsuser; ?>;
    var data_pointsuser = <?php echo $data_pointsuser; ?>;
    var colors = ['#007bff', '#28a745', '#dc3545', '#ffc107', '#17a2b8', '#6610f2'];
    var datasetsuser = [];
    for (var i = 0; i < yearsuser.length; i++) {
    datasetsuser.push({
        label: yearsuser[i],
        data: data_pointsuser[i],
        borderColor: colors[i % colors.length],
        backgroundColor: colors[i % colors.length],
        fill: false
    });
    }
    var chart4 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: monthsuser,
        datasets: datasetsuser
    },
    options: {
        maintainAspectRatio: false,
        scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<!-- FARMERS -->
<script>
    var ctx = document.getElementById('myChart1').getContext('2d');
    var monthsfarmer = <?php echo $monthsfarmer; ?>;
    var yearsfarmer = <?php echo $yearsfarmer; ?>;
    var data_pointsfarmer = <?php echo $data_pointsfarmer; ?>;
    var colors = ['#007bff', '#28a745', '#dc3545', '#ffc107', '#17a2b8', '#6610f2'];
    var datasetsfarmer = [];
    for (var i = 0; i < yearsfarmer.length; i++) {
    datasetsfarmer.push({
        label: yearsfarmer[i],
        data: data_pointsfarmer[i],
        borderColor: colors[i % colors.length],
        backgroundColor: colors[i % colors.length],
        fill: false
    });
    }
    var chart1 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: monthsfarmer,
        datasets: datasetsfarmer
    },
    options: {
        maintainAspectRatio: false,
        scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<!-- PETS -->
<script>
    var ctx = document.getElementById('myChart3').getContext('2d');
    var monthspet = <?php echo $monthspet; ?>;
    var yearspet = <?php echo $yearspet; ?>;
    var data_pointspet = <?php echo $data_pointspet; ?>;
    var colors = ['#007bff', '#28a745', '#dc3545', '#ffc107', '#17a2b8', '#6610f2'];
    var datasetspet = [];
    for (var i = 0; i < yearspet.length; i++) {
    datasetspet.push({
        label: yearspet[i],
        data: data_pointspet[i],
        borderColor: colors[i % colors.length],
        backgroundColor: colors[i % colors.length],
        fill: false
    });
    }
    var chart3 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: monthspet,
        datasets: datasetspet
    },
    options: {
        maintainAspectRatio: false,
        scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>

