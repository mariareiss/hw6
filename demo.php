<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electric Vehicle Charging Times</title>
    <!-- Include ApexCharts library -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <h1>Electric Vehicle Charging Times</h1>
    <div id="chargingTimesChart"></div>

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

        const chartOptions = {
            chart: {
                type: 'pie',
                height: 300,
            },
            series: electricVehicles.map(vehicle => vehicle.charging_time),
            labels: electricVehicles.map(vehicle => vehicle.model),
            colors: [
                '#FF6347',
                '#4682B4',
                '#32CD32',
                // Add more colors if you have more vehicles
            ],
            title: {
                text: 'Charging Times'
            }
        };

        const chart = new ApexCharts(document.querySelector("#chargingTimesChart"), chartOptions);
        chart.render();
    </script>
</body>
</html>
