<?php

namespace App\Http\Controllers;

use App\Helpers\MonthHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\ChurchCollections;
use App\Models\ChapelCollections;
use App\Models\Donation;
use App\Models\Expense;
use Carbon\Carbon;
use Tests\Feature\ExpenseTest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.5t
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //adding all collections in church and chapel
        $church_total = ChurchCollections::sum('total');
        $chapel_total = ChapelCollections::sum('first_collection');
        $overall_total = $church_total + $chapel_total;

        $array_data_collection = [];
        $todayDate = Carbon::now();

        for ($month = 1; $month <= 12; $month++) {
            $church_month_total = ChurchCollections::whereYear('date', $todayDate->year)->whereMonth('date', $month)->sum('total');
            $chapel_month_total = ChapelCollections::whereYear('date', $todayDate->year)->whereMonth('date', $month)->sum('first_collection');
            array_push($array_data_collection, $church_month_total + $chapel_month_total);
        }

        $thisMonthChapelCollection = ChapelCollections::whereYear('date', $todayDate->year)->whereMonth('date', $todayDate->month)->sum('first_collection');
        $thisMonthChurchCollection = ChurchCollections::whereYear('date', $todayDate->year)->whereMonth('date', $todayDate->month)->sum('total');
        $thisMonthTotal = $thisMonthChapelCollection + $thisMonthChurchCollection;

        //getting data from db
        $data = ChurchCollections::select('date')->orderBy('date')->get()->groupBy(function ($data) {
            return Carbon::parse($data->date)->format('M');
        });
        // $total=ChurchCollections::select(DB::raw('sum(total) as total'),DB::raw('YEAR(date) year, MONTH(date) month'))
        //    ->groupby('year','month')
        //    ->get();

        $months = [];
        $monthCount = [];
        foreach ($data as $month => $values) {
            $months[] = $month;
            $monthCount[] = count($values);
        }

        $donations = Donation::whereYear('date', $todayDate->year)->whereMonth('date', $month)->sum('amount');
        $expenses = Expense::whereYear('date', $todayDate->year)->whereMonth('date', $month)->sum('expense_amount');

        return view('reports.index', ['overall_total' => $overall_total, 'data' => $data, 'months' => $months, 'monthCount' => $monthCount, 'monthlyCollection' => $array_data_collection, 'thisMonth' => $thisMonthTotal, 'donations' => $donations, 'expenses' => $expenses]);
    }

    public function conductStatement()
    {
        return view('reports.create');
    }

    public function generateStatement(Request $request)
    {
        $request->validate([
            'month_issue' => 'required|numeric',
            'year_issue' => 'required|numeric'
        ]);

        $expenses = Expense::whereMonth('date', '=', $request->month_issue)->whereYear('date', '=' , $request->year_issue)->get();
        // $chapelIncomes = ChapelCollections::whereYear('date', $request->year_issue)->whereMonth('date', $request->month_issue)->get();
        // $churchIncomes = ChurchCollections::whereYear('date', $request->year_issue)->whereMonth('date', $request->month_issue)->get();
        // $donations = Donation::whereYear('date', $request->year_issue)->whereMonth('date', $request->month_issue)->get();

        $expensesTotal = Expense::whereMonth('date', '=', $request->month_issue)->whereYear('date', '=' , $request->year_issue)->sum('expense_amount');
        $chapelIncomesTotal = ChapelCollections::whereYear('date', $request->year_issue)->whereMonth('date', $request->month_issue)->sum('first_collection');
        $churchIncomesTotal = ChurchCollections::whereYear('date', $request->year_issue)->whereMonth('date', $request->month_issue)->sum('total');
        $donationsTotal = Donation::whereYear('date', $request->year_issue)->whereMonth('date', $request->month_issue)->sum('amount');
        $incomeTotal = $chapelIncomesTotal + $churchIncomesTotal + $donationsTotal;

        $month = MonthHelper::getLongMonth($request->month_issue);
        $netTotal = $incomeTotal - $expensesTotal;
        // dd($expenses, $chapelIncomes, $churchIncomes, $donations);
        // dd($expensesTotal,$chapelIncomesTotal,$churchIncomesTotal,$donationsTotal);

        return view('reports.statement',[
            'month' => $month,
            'year' => $request->year_issue,
            'chapelIncomesTotal' => $chapelIncomesTotal,
            'churchIncomesTotal' => $churchIncomesTotal,
            'donationsTotal' => $donationsTotal,
            'incomeTotal' => $incomeTotal,
            'expenses' => $expenses,
            'expensesTotal' => $expensesTotal,
            'netTotal' => $netTotal
        ]);

    }
}
