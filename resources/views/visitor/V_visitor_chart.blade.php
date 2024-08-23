<?php

use Illuminate\Support\Facades\DB;
// configuration config/database.php "mysql" set strict => false
// $visitor_chart = DB::statement("SELECT YEAR(created_at) as dyear, MONTHNAME(created_at) as dmonth, SUM(visit) as dvisit FROM `tb_visitor` GROUP BY dmonth ORDER BY dyear DESC, dmonth LIMIT 6");
$visitor_chart = DB::table('tb_visitor')
    ->selectRaw('YEAR(created_at) as dyear, MONTHNAME(created_at) as dmonth, SUM(visit) as dvisit')
    ->groupBy(DB::raw('dmonth', 'desc'))
    ->limit(6)
    ->get();
$arr_monthIndo = array('January' => 'Januari', 'February' => 'Februari', 'March' => 'Maret', 'April' => 'April', 'May' => 'Mei', 'June' => 'Juni', 'July' => 'Juli', 'August' => 'Agustus', 'September' => 'September', 'October' => 'Oktober', 'November' => 'November', 'December' => 'Desember');
foreach ($visitor_chart as $result) {
    $dmonth[] = $arr_monthIndo[$result->dmonth] . ' ' . $result->dyear;
    $dvisit[] = $result->dvisit;
}

if (isset($dmonth) && isset($dvisit)) {
    $jsondmonth = json_encode($dmonth);
    $jsondvisit = json_encode($dvisit);
} else {
    $jsondmonth = "[]";
    $jsondvisit = "[]";
} ?>

@push('script')
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= $jsondmonth ?>,
            datasets: [{
                label: ' Jumlah Kunjungan ',
                data: <?= $jsondvisit ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endpush