<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'date',
        'time',
        'user_agent',
        'visit',
    ];
    protected $table      = 'tb_visitor';
    public    $timestamps = true;

    public function get_visitor_chart()
    {
        // return DB::query(
        //     "SELECT YEAR(created_at) as dyear, MONTHNAME(created_at) as dmonth, SUM(visit) as dvisit FROM `tb_visitor` GROUP BY dmonth ORDER BY dyear DESC, dmonth LIMIT 6"
        // );
        // configuration config/database.php "mysql" set strict => false
        // $query = DB::statement("SELECT YEAR(created_at) as dyear, MONTHNAME(created_at) as dmonth, SUM(visit) as dvisit FROM `tb_visitor` GROUP BY dmonth ORDER BY dyear DESC, dmonth LIMIT 6");
        $query = DB::table('tb_visitor')
            ->selectRaw('YEAR(created_at) as dyear, MONTHNAME(created_at) as dmonth, SUM(visit) as dvisit')
            ->groupBy(DB::raw('dmonth', 'desc'))
            ->limit(6)
            ->get();
        return $query;
    }
}
