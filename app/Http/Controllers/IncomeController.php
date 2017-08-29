<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Incomes;
use Auth;
use Session;
use App\Model\OnsiteOrders;
use App\Model\OnsiteOrderManipulations;
use App\Model\TawayOrders;
use App\Model\TawayOrderManipulations;
use App\Model\HomedOrders;
use App\Model\HomedOrderManipulations;
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
                //$day = explode('.',$day);
                //return $day;
                $daily_incomes = DailyIncomes::where([
                                                        ['month','=',$month],
                                                        ['year','=',$year]
                                                ])->orderBy('id','desc')->take($day)->get();
                $month1 = [
                    'Jan' => '1',
                    'Feb' => '2',
                    'Mar' => '3',
                    'Apr' => '4',
                    'May' => '5',
                    'Jun' => '6',
                    'Jul' => '7',
                    'Aug' => '8',
                    'Sep' => '9',
                    'Oct' => '10',
                    'Nov' => '11',
                    'Dec' => '12'
                ];
                //return $month1[$month];
                $monthly_incomes = MonthlyIncomes::where('year','=',$year)->orderBy('id','desc')->take($month1[$month])->get();
                //return $monthly_incomes;
                $expense_day = $day;
                $expense = [];
                for($i=0; $expense_day>=0; $i++,$expense_day-- ) {
                    $expense[$i]= Expenses:: where([
                        ['day','=', $expense_day],
                        ['month','=', $month],
                        ['year','=', $year]
                    ])->get();
                    
                }
                //return $expense[1];

                return view('accounts_view')
                ->with(compact('daily_incomes','monthly_incomes','expense'));
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

        $daily = DailyIncomes::where([
            ['day','=',$day],
            ['month','=',$month],
            ['year','=',$year]
        ])->get();

        foreach($daily as $daily)
        $daily->expense += $request->aexpense_mmount;
        
        $daily->save();

        Session::flash('success', 'Expense Added Successfully !!');
        
        return redirect()->route('accounts');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        if($request->r_total =="")
            return "Please Insert Received Cash Ammount, Try Again !!";
        else if($request->r_total < $request->total)
            return "Error On Received Cash Ammount, Try Again !!";
        else if( $request->total< $request->discount)
            return "Error On Discount Cash Ammount, Try Again !!";

        if($request->cat == "onsite"){

            $order = OnsiteOrders::find($request->id);
            $order_mani = OnsiteOrderManipulations::where('order_id','=',$request->id)->get();
            
            if($order->is_paid == 0)
            {
                $date = date('M/d/y');
                list($month, $day, $year) = explode('/',$date);
                
                $daily = DailyIncomes::where([
                    ['day', '=', $day],
                    ['month', '=', $month],
                    ['year', '=', $year],
                    ])->get();
                
                $d_expense = Expenses::where([
                    ['day','=',$day],
                    ['month','=',$month],
                    ['year','=',$year],
                ])->get();

                $ex_money=0.0;
                
                if(count($d_expense)>0)
                {
                    
                    foreach($d_expense as $d_expenses){
                        $ex_money+=$d_expenses->ex_cost;
                    }
                    
                }

                if(count($daily)<=0){
                    $n_daily = new DailyIncomes;
                    $n_daily->day = $day;
                    $n_daily->month = $month;
                    $n_daily->year = $year;
                    $n_daily->expense = $ex_money; 
                    $n_daily->income = ( $request->total - $request->discount);

                    $n_daily->save();
                }
                else{
                        foreach($daily as $daily){
                            $daily->income += ($request->total - $request->discount);
                            $daily->expense = $ex_money; 
                            $daily->save();
                        }
                }

                $monthly = MonthlyIncomes::where([
                    ['month','=', $month],
                    ['year','=', $year],
                    ])->get();

                $m_expense = Expenses::where([
                    ['month','=',$month],
                    ['year','=',$year]
                    ])->get();

                $monthly_items = DailyIncomes::where([
                    ['month','=', $month],
                    ['year','=', $year]
                ])->get();
                
                $monthly_incomes= 0.0;
                
                foreach($monthly_items as $monthly_items1){
                    $monthly_incomes += $monthly_items1->income;
                }
                $ex_money_m=0.0;

                if(count($m_expense)>0)
                {
                    
                    foreach($m_expense as $m_expenses){
                        $ex_money_m+=$m_expenses->ex_cost;
                    }
                  
                }

                if(count($monthly)<=0){

                    $n_monthly = new MonthlyIncomes;
                    $n_monthly->month = $month;
                    $n_monthly->year = $year;
                    $n_monthly->expense = $ex_money_m; 
                    $n_monthly->income = $monthly_incomes;
                    $n_monthly->save();

                }
                else{
                    foreach($monthly as $monthly){
                        $monthly->income = $monthly_incomes;
                         $monthly->expense = $ex_money_m; 
                        $monthly->save();
                    }
                }
                $order->is_paid = 1;
                $order->save();
                
            }
            else{
                return "Order Already Enrolled !!";
            }

        }
        else if($request->cat == "taway"){
            $order = TawayOrders::find($request->id);
            $order_mani = TawayOrderManipulations::where('order_id','=',$request->id)->get();
            
            if($order->is_paid == 0)
            {
                $date = date('M/d/y');
                list($month, $day, $year) = explode('/',$date);
                
                $daily = DailyIncomes::where([
                    ['day', '=', $day],
                    ['month', '=', $month],
                    ['year', '=', $year],
                    ])->get();
                
                $d_expense = Expenses::where([
                    ['day','=',$day],
                    ['month','=',$month],
                    ['year','=',$year],
                ])->get();

                $ex_money=0.0;
                
                if(count($d_expense)>0)
                {
                    
                    foreach($d_expense as $d_expenses){
                        $ex_money+=$d_expenses->ex_cost;
                    }
                    
                }

                if(count($daily)<=0){
                    $n_daily = new DailyIncomes;
                    $n_daily->day = $day;
                    $n_daily->month = $month;
                    $n_daily->year = $year;
                    $n_daily->expense = $ex_money; 
                    $n_daily->income = ( $request->total - $request->discount);

                    $n_daily->save();
                }
                else{
                        foreach($daily as $daily){
                            $daily->income += ($request->total - $request->discount);
                            $daily->expense = $ex_money; 
                            $daily->save();
                        }
                }

                $monthly = MonthlyIncomes::where([
                    ['month','=', $month],
                    ['year','=', $year],
                    ])->get();

                $m_expense = Expenses::where([
                    ['month','=',$month],
                    ['year','=',$year]
                    ])->get();

                $monthly_items = DailyIncomes::where([
                    ['month','=', $month],
                    ['year','=', $year]
                ])->get();
                
                $monthly_incomes= 0.0;
                
                foreach($monthly_items as $monthly_items1){
                    $monthly_incomes += $monthly_items1->income;
                }
                $ex_money_m=0.0;

                if(count($m_expense)>0)
                {
                    
                    foreach($m_expense as $m_expenses){
                        $ex_money_m+=$m_expenses->ex_cost;
                    }
                  
                }

                if(count($monthly)<=0){

                    $n_monthly = new MonthlyIncomes;
                    $n_monthly->month = $month;
                    $n_monthly->year = $year;
                    $n_monthly->expense = $ex_money_m; 
                    $n_monthly->income = $monthly_incomes;
                    $n_monthly->save();

                }
                else{
                    foreach($monthly as $monthly){
                        $monthly->income = $monthly_incomes;
                         $monthly->expense = $ex_money_m; 
                        $monthly->save();
                    }
                }
                $order->is_paid = 1;
                $order->save();
                
            }
            else{
                return "Order Already Enrolled !!";
            }

        }
        else if($request->cat === "homed"){
            
            $order = HomedOrders::find($request->id);
            $order_mani = HomedOrderManipulations::where('order_id','=',$request->id)->get();
            
            if($order->is_paid == 0)
            {
                $date = date('M/d/y');
                list($month, $day, $year) = explode('/',$date);
                
                $daily = DailyIncomes::where([
                    ['day', '=', $day],
                    ['month', '=', $month],
                    ['year', '=', $year],
                    ])->get();
                
                $d_expense = Expenses::where([
                    ['day','=',$day],
                    ['month','=',$month],
                    ['year','=',$year],
                ])->get();

                $ex_money=0.0;
                
                if(count($d_expense)>0)
                {
                    
                    foreach($d_expense as $d_expenses){
                        $ex_money+=$d_expenses->ex_cost;
                    }
                    
                }

                if(count($daily)<=0){
                    $n_daily = new DailyIncomes;
                    $n_daily->day = $day;
                    $n_daily->month = $month;
                    $n_daily->year = $year;
                    $n_daily->expense = $ex_money; 
                    $n_daily->income = ( $request->total - $request->discount);

                    $n_daily->save();
                }
                else{
                        foreach($daily as $daily){
                            $daily->income += ($request->total - $request->discount);
                            $daily->expense = $ex_money; 
                            $daily->save();
                        }
                }

                $monthly = MonthlyIncomes::where([
                    ['month','=', $month],
                    ['year','=', $year],
                    ])->get();

                $m_expense = Expenses::where([
                    ['month','=',$month],
                    ['year','=',$year]
                    ])->get();

                $monthly_items = DailyIncomes::where([
                    ['month','=', $month],
                    ['year','=', $year]
                ])->get();
                
                $monthly_incomes= 0.0;
                
                foreach($monthly_items as $monthly_items1){
                    $monthly_incomes += $monthly_items1->income;
                }
                $ex_money_m=0.0;

                if(count($m_expense)>0)
                {
                    
                    foreach($m_expense as $m_expenses){
                        $ex_money_m+=$m_expenses->ex_cost;
                    }
                  
                }

                if(count($monthly)<=0){

                    $n_monthly = new MonthlyIncomes;
                    $n_monthly->month = $month;
                    $n_monthly->year = $year;
                    $n_monthly->expense = $ex_money_m; 
                    $n_monthly->income = $monthly_incomes;
                    $n_monthly->save();

                }
                else{
                    foreach($monthly as $monthly){
                        $monthly->income = $monthly_incomes;
                         $monthly->expense = $ex_money_m; 
                        $monthly->save();
                    }
                }
                $order->is_paid = 1;
                $order->save();
                
            }
            else{
                return "Order Already Enrolled !!";
            }
            
        }
        return "Order Enrolled Successfully !!";
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
