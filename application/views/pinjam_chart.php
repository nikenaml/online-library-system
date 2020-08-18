<html>
<head>
    <title>Chart</title>
</head>
<body>

<div class="row">

    <!--chart-->
    <div class="col-sm-6">
        <div id="container-chart"></div>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script type="text/javascript">
        Highcharts.chart('container-chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Laporan Peminjaman Harian'
            },
            tooltip: {
                pointFormat: '{literal}<b>{point.y} Buku</b>{/literal}'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '{literal}{point.name}<br /> {point.y} Buku aja{/literal}'
                    }
                }
            },
            series: [{
                name: 'Buku Dipinjam',
                innerSize: '50%',
                colorByPoint: true,
                data: [

                {foreach $daftar_pinjam as $pinjam}
                {
                    name: '{$pinjam.tanggal_pinjam}',
                    y: {$pinjam.total_buku}
                }, 
                {/foreach}

                ]
            }]
        });
        </script>
    </div>

    <!--table-->
    <div class="col-sm-6">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Buku Dipinjam</th>
                </tr>
            </thead>
            <tbody>
                {foreach $daftar_pinjam as $pinjam}
                <tr>
                    <td>{$pinjam.tanggal_pinjam}</td>
                    <td><span class="badge badge-primary">{$pinjam.total_buku} Buku</span></td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

</div>

</body>
</html>