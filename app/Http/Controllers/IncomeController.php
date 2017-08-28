<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Incomes;
use Auth;
use Session;
use App\Model\OnsiteOrders;
use App\Model\TawayOrders;
use App\Model\HomedOrders;
use App\Model\Expenses;
use App\Model\MonthlyIncomes;
use App\Model\DailyIncomes;
use App\User;
use App\Http\Requests\ExpenseRequest;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check())
        {
            $id = Auth::user()->getId();
            $admin = User::find($id);

            //$orderItem = Salerecords::where('user_id', '=', $id)->get();
            
            if($admin->type == 1) {
                $date = date('M/d/y');
                
                list($month, $day, $year) = explode('/',$date);
                //return $month;
                $daily_incomes = DailyIncomes::where([
                                                        ['month','=',$month],
                                                        ['year','=',$year]
                                                ])->orderBy('id','desc')->take($day)->get();
                
                $monthly_incomes = MonthlyIncomes::where('year','=',$year)->orderBy('id','desc')->take($month)->get();

                return view('accounts_view')
                ->with(compact('daily_incomes','monthly_incomes'));
            }
            else if($admin->type == 0 )
                  return redirect()->route('onsite-orders');
        } else {
             return redirect()->route('logout');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postExpense(ExpenseRequest $request)
    {
        
        $date = date('M/d/y');        
        list($month, $day, $year) = explode('/',$date);
        $expense = new Expenses;
        $expense->day = $day;
        $expense->month = $month;
        $expense->year = $year;
        $expense->reason_expense = $request->expense_reason;
        $expense->ex_cost = $request->expense_ammount;
        
        $expense->save();

        Session::flash('success', 'Expense Added Successfully !!');

        return redirect()->route('accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
