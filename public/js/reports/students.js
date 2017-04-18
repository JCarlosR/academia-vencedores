$(function () {
    $.getJSON('/api/students', function (data) {
        showStudentsChart(data);
    });
});

function showStudentsChart(data) {
    var ctx = document.getElementById("myChart");
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Por género"],
            datasets: [{
                label: 'Mujeres',
                data: [data.female],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)'
                ],
                borderWidth: 1
            }, {
                label: 'Hombres',
                data: [data.male],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
}
