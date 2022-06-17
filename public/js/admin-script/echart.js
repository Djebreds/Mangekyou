var myChart = echarts.init(document.getElementById('test'), null);

var option = {
    title: {
        text: 'Testing Echarts'
    },
    tooltip: {},
    legend: {
        data: ['sales']
    },
    xAxis: {
        data: ['Shirts', 'Cardigans', 'Chiffons', 'Pants', 'Heels', 'Socks']
    },
    yAxis: {},
    series: [
        {
            name: 'sales',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20]
        }
    ]
};
window.addEventListener('resize', function () {
    myChart.resize();
})
myChart.setOption(option);