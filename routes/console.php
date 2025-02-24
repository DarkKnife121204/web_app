<?php

use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\DB;

Schedule::call(function () {
   DB::table('orders')->delete();
   DB::table('stores')->delete();
   DB::table('incomes')->delete();
   DB::table('sales')->delete();
})->twiceDailyAt(00, 12);

Schedule::command('parsing')->twiceDailyAt(00, 12);
