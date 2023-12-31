    <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>JavaScript Libraries Demo</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Include Axios library -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Include Lodash library -->
    <script src="https://cdn.jsdelivr.net/npm/lodash"></script>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <title>Electric Vehicle Charging Times</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Electric Vehicle Charging Times</h1>

    <canvas id="chargingTimesChart" width="400" height="200"></canvas>

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

        const ctx = document.getElementById('chargingTimesChart').getContext('2d');
        const chargingTimesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: electricVehicles.map(vehicle => vehicle.model),
                datasets: [{
                    label: 'Charging Time (hours)',
                    data: electricVehicles.map(vehicle => vehicle.charging_time),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        // Add more colors if you have more vehicles
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        // Add more colors if you have more vehicles
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

       
        axios.get('https://jsonplaceholder.typicode.com/posts/1')
            .then(response => {
                const electricVehicles = document.getElementById('dataContainer');
                dataContainer.innerHTML = `<h2>Sample Data:</h2>
                                           <p>${JSON.stringify(response.data)}</p>`;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });

    
        const numbers = [1, 2, 3, 4, 5];
        const sum = _.sum(numbers);
        console.log('Sum of numbers:', sum);


        $('#dataContainer').hide().fadeIn(1000);
    </script>
</body>
</html>



