<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electric Vehicle Charging Times</title>
    <!-- Include Chartist.js library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chartist/dist/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chartist"></script>
</head>
<body>
    <h1>Electric Vehicle Charging Times</h1>
    <div class="ct-chart ct-golden-section" id="chargingTimesChart"></div>

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

        const labels = electricVehicles.map(vehicle => vehicle.model);
        const series = electricVehicles.map(vehicle => vehicle.charging_time);

        new Chartist.Pie('#chargingTimesChart', {
            labels: labels,
            series: series
        }, {
            donut: true,
            donutWidth: 60,
            donutSolid: true,
            startAngle: 270,
            total: series.reduce((a, b) => a + b, 0)
        });
    </script>
</body>
</html>
