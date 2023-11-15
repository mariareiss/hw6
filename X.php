<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electric Vehicle Charging Times</title>
    <!-- Include Google Charts library -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <h1>Electric Vehicle Charging Times</h1>
    <div id="chargingTimesChart" style="width: 400px; height: 300px;"></div>

    <script>
        const electricVehicles = [
            {
                "model": "Tesla Model S",
                "manufacturer": "Tesla",
                "year": 2021,
                "charging_time": 4.5
            },
            {
                "model": "Nissan Leaf",
                "manufacturer": "Nissan",
                "year": 2020,
                "charging_time": 6
            },
            {
                "model": "Chevrolet Bolt EV",
                "manufacturer": "Chevrolet",
                "year": 2022,
                "charging_time": 5.5
            },
            // Add more vehicle data as needed
        ];

        google.charts.load('current', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = new google.visualization.DataTable();
            data.addColumn('string', 'Model');
            data.addColumn('number', 'Charging Time');

            electricVehicles.forEach(vehicle => {
                data.addRow([vehicle.model, vehicle.charging_time]);
            });

            const options = {
                title: 'Charging Times',
                pieHole: 0.4,
            };

            const chart = new google.visualization.PieChart(document.getElementById('chargingTimesChart'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>
