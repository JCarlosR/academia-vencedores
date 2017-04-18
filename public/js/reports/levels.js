$(function () {
    $.getJSON('/api/levels', function (data) {
        showLevelsChart(data);
    });
});

function showLevelsChart(data) {
    var ctx = document.getElementById("myChart3").getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
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
