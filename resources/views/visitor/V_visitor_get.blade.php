<?php

use App\Models\M_Visitor;

date_default_timezone_set('Asia/Jakarta');

$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/MSIE (\d+\.\d+);/', $user_agent)) {
    $browser = "Internet Explorer";
} else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $user_agent)) {
    $browser = "Chrome";
} else if (preg_match('/Edge\/\d+/', $user_agent)) {
    $browser = "Edge";
} else if (preg_match('/Firefox[\/\s](\d+\.\d+)/', $user_agent)) {
    $browser = "Firefox";
} else if (preg_match('/OPR[\/\s](\d+\.\d+)/', $user_agent)) {
    $browser = "Opera";
} else if (preg_match('/Safari[\/\s](\d+\.\d+)/', $user_agent)) {
    $browser = "Safari";
} else {
    $browser = "Lainnya";
}

$query_visitor = M_Visitor::where('ip_address', $_SERVER['REMOTE_ADDR'])->get();
foreach ($query_visitor as $item) {
    $idp_visitor = $item->idp_visitor;
    $created_at  = $item->created_at;
    $visit       = $item->visit;
}

if (count($query_visitor) < 1 || date('Y-m', strtotime($created_at)) != date('Y-m')) {
    $data = [
        'ip_address' => $_SERVER['REMOTE_ADDR'],
        'user_agent' => $browser,
        'visit'      => 1
    ];
    M_Visitor::create($data);
} else {
    $data = [
        'ip_address' => $_SERVER['REMOTE_ADDR'],
        'user_agent' => $browser,
        'visit'      => $visit + 1
    ];
    M_Visitor::where('idp_visitor', $idp_visitor)->update($data);
}
