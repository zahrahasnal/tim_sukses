// public/js/dashboard.js

google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    // Fetch data from the API endpoint
    fetch('/api/chart-data')
        .then(response => response.json())
        .then(data => {
            var chartData = data;

            var chartData = google.visualization.arrayToDataTable(chartData);

            var options = {
                title: 'Monitoring Data by Column',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(chartData, options);
        })
        .catch(error => console.error('Error fetching data:', error));
}
