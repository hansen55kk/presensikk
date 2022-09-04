<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pegawai;
use App\Models\Absen;

class DashboardController extends Controller
{
    public function __invoke()
    {
        if (Auth::user() == null)
            return redirect('login');
        $pegawai = Pegawai::get()->count();
        $lastAdded = Pegawai::get('created_at')->last();
        $lastAdded = $lastAdded->created_at;
        if ($pegawai == 0)
            return redirect('pegawai');
        $totalAbsen = Absen::get()->count();
        if ($totalAbsen != 0) {
            $today = Absen::where('created_at', '>=', date('Y-m-d') . ' 00:00:00')->count();
            $history = [];
            array_push($history, $today);
            for ($i = 1; $i <= 6; $i++) {
                $count = Absen::where('created_at', '>=', date('Y-m-d', time() - 3600 * 24 * $i) . ' 00:00:00')->where('created_at', '<=', date('Y-m-d', time() - 3600 * 24 * ($i - 1)) . ' 00:00:00')->count();
                array_push($history, $count);
            }
            $history = array_reverse($history);
            $dayHistory = [];
            for ($i = 1; $i <= 7; $i++) {
                $day = date('l', time() + 3600 * 24 * $i);
                $day = substr($day, 0, 3);
                array_push($dayHistory, $day);
            }
            $month = [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Okt',
                'Nov',
                'Des'
            ];
            $monthHistory = [];
            $monthCountHistory = [];
            $monthNow = (int) date('m');
            $yearNow = (int) date('Y');
            for ($i = 1; $i <= $monthNow; $i++) {
                array_push($monthHistory, $month[($i - 1)]);
                $monthCount = Absen::where('created_at', '>=', date('Y-m-d', mktime(0, 0, 0, $i, 1, $yearNow)) . ' 00:00:00')->where('created_at', '<', date('Y-m-d', mktime(0, 0, 0, ($i + 1), 1, $yearNow)) . ' 00:00:00')->count();
                array_push($monthCountHistory, $monthCount);
            }
            $total = Absen::get()->count();
            // $lastAdded = Pegawai::get('created_at')->last();
            // $lastAdded = $lastAdded->created_at;
            $lastScan = Absen::get('created_at')->last();
            $lastScan = $lastScan->created_at;
            $thisYearTotal = Absen::where('created_at', '>=', date('Y-m-d', mktime(0, 0, 0, 1, 1, $yearNow)))->where('created_at', '<=', date('Y-m-d', mktime(23, 59, 59, 12, 31, $yearNow)))->count();
            $tableNewest = Absen::orderBy('created_at', 'DESC')->get()->take(6);
            // dd($tableNewest);
            return view('pages.dashboard', compact('pegawai', 'today', 'history', 'dayHistory', 'monthHistory', 'monthCountHistory', 'total', 'lastAdded', 'lastScan', 'thisYearTotal', 'tableNewest'));
        } else {
            return view('pages.empty', compact('pegawai', 'lastAdded'));
        }
    }
}
