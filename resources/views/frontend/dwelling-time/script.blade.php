<script>
$(function() {
    $('#container').highcharts({
        title: {
            text: 'Dwelling Time 2018',
            x: -20 //center
        },
        subtitle: {
            text: 'Data Dwelling Time Per Bulan 2018',
            x: -20
        },
        xAxis: {
            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
        },
        yAxis: {
            title: {
                text: 'Dwelling Time (hari)'
            },
            plotLines: [{
                value: 3,
                width: 5,
                color: 'yellow'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        
        series: [{
            name: 'JICT',
            lineWidth: 5,
            data: [0, 5.18, 3.31, 3.38, 4.42, 5.85, 4.25, 4.59, 4.05, 5.04, 3.32, 3.12]
        }, {
            name: 'NPCT1',
            lineWidth: 5,
            data: [0.79, 2.18, 3.71, 3.20, 0, 0, 2.95, 3.26, 3.51, 2.97, 3.67, 2.87]
        }, {
            name: 'KOJA',
            lineWidth: 5,
            data: [0, 4.77, 2.56, 3.27, 3.47, 5.11, 4.83, 3.61, 3.67, 5.10, 3.04, 2.79]
        }, {
            name: 'TER3',
            lineWidth: 5,
            data: [0, 3.75, 5.77, 3.99, 0.89, 3.59, 3.26, 3.37, 1.97, 2.65, 2.37, 3.33]
        }, {
            name: 'TMAL',
            lineWidth: 5,
            data: [0, 0, 2.95, 3.64, 4.17, 5.56, 3.60, 3.03, 3.31, 2.65, 2.57, 2.99]
        }]
    });
});
</script>