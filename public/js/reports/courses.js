$(function () {
    $.getJSON('/api/courses', function (data) {
        showCoursesChart(data);
    });
});

function showCoursesChart(data) {
    var ctx = document.getElementById("myChart2").getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: data.names,
            datasets: [{
                backgroundColor: [
                    "#2ecc71",
                    "#3498db",
                    "#95a5a6",
                    "#9b59b6",
                    "#f1c40f",
                    "#e74c3c",
                    "#34495e"
                ],
                data: data.counts
            }]
        }
    });
}
