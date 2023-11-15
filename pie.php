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
    <title>Pie Chart Colors</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Pie Chart Colors</h1>
  <canvas id="Pie chart colors" width="400" height="200"></canvas>

<script>
const data = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};
// </block:setup>

// <block:config:0>
const config = {
  type: 'doughnut',
  data: data,
};
// </block:config>

module.exports = {
  actions: [],
  config: config,
};
</script>
</body>
</html>
