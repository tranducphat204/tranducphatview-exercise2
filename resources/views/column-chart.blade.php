<!DOCTYPE html>
<html>

<head>
    <title>Column Chart</title>
    <script src="{{ asset('js/chart.js') }}"></script>
</head>

<body>
    <canvas id="columnChart"></canvas>

    <script>
        var ctx = document.getElementById('columnChart').getContext('2d');

        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
                datasets: [{
                    label: 'Column Chart',
                    data: [10, 20, 30, 40, 50],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>