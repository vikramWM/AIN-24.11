<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Writer;
use App\Models\Status;
use App\Models\Formatting;
use App\Models\Services;
use App\Models\Writting;
use App\Models\Paper;
use App\Models\Payment;
use App\Models\Feedback;
use App\Models\College;
use App\Models\multipleswiter;
use App\Models\Leads;
use App\Models\Ordercall;
use App\Models\ProjectStatusCount;
use App\Models\FollowUpComment;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderComplete;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;





class OrderController extends Controller
{
    // public function index()
    // {
      
    //     if(auth()->user()->role_id == 2)
    //     {
    //         $id = auth()->user()->id;
    //         $data['orders'] = Order::with( 'payment')->where('uid', $id)->paginate(10);
    //         $data['leads']   = Leads::where('emp_id', $id)->where('status', 0)->get();
    //         // echo '<pre>'; print_r($data['leds']) ; exit;
    //     }elseif(auth()->user()->role_id == 8)
    //     {
    //         $id = auth()->user()->id;
    //         $data['orders'] = Order::with('writer' , 'subwriter')
    //             ->where('admin_id', $id)
    //             ->orderBy('order_id', 'desc')
    //             ->paginate(10);

    //         // echo '<pre>'; print_r($data['orders']) ; exit;
    //     }
    //     elseif(auth()->user()->role_id == 7)
    //     {
    //         $id = auth()->user()->id;
    //         $data['orders'] = Order::where('swid', $id)search
    //             ->orderBy('order_id', 'desc')
    //             ->paginate(10);

    //         // echo '<pre>'; print_r($data['leds']) ; exit;
    //     }
    //     elseif(auth()->user()->role_id == 6)
    //     {
    //         $id = auth()->user()->id;
    //         $data['orders'] = Order::
    //             where('wid', $id)
    //             ->orderBy('order_id', 'desc')
    //             ->paginate(10);

    //         // echo '<pre>'; print_r($data['leds']) ; exit;
    //     }else{

    //         $data['orders'] = Order::with('user', 'payment' , 'feedback')
    //             ->where('uid', '!=', 0) // Fix: Use '!=' for "not equal to"
    //             ->orderByDesc('id')
    //             ->paginate(10);
    //     }
        
        
    //     $data['Team']         = Writer::all();
    //     $data['Status']       = Status::all();
    //     $data['formatting']   = Formatting::all();
    //     $data['service']      = Services::all();
    //     $data['Writting']     = Writting::all();
    //     $data['paper']        = Paper::all();
    //     $data['user']         = User::all();
    //     $data['college']      = College::all();
    //     $data['admin']        = User::where('role_id', '=', '8')->where('flag', '=', 0)->get();
    //     $data['writerTL']     = User::where('role_id', '=', '6')->where('flag', '=', 0)->get();
    //     $data['SubWriter']    = User::where('role_id', '=', '7')->where('flag', '=', 0)->get();

    //     if(auth()->user()->role_id == 1){
    //         return view('order.my_orders', compact('data'));
    //     }
    //     elseif(auth()->user()->role_id == 2){
          
    //         return view('order.user_order', compact('data'));
    //     }
    //     elseif(auth()->user()->role_id == 3){
    //         return view('order.subadmin', compact('data'));
    //     }
    //     elseif(auth()->user()->role_id == 4){
    //         return view('order.marketingteam_order', compact('data'));
    //     }
    //     elseif(auth()->user()->role_id == 5){
    //         return view('order.projectteam_order', compact('data'));
    //     }
    //     elseif(auth()->user()->role_id == 6){
    //         return view('order.writer-tl_order', compact('data'));
    //     }
    //     elseif(auth()->user()->role_id == 7){
    //         return view('order.sub-writer_order', compact('data'));
    //     }
    //     elseif(auth()->user()->role_id == 8){
    //         return view('order.writer-admin_order', compact('data'));
    //     }

    // }


    public function index(Request $request)
    {
        $userRole = auth()->user()->role_id;
    
        switch ($userRole) {
            case 1:
                return $this->handleRoleOne($request);
            case 2:
                return $this->handleRoleTwo($request);
            case 3:
                return $this->handleRoleThree($request);
            case 4:
                return $this->handleRoleOne($request);
            case 5:
                return $this->handleRoleOne($request);
            case 6:
                return $this->handleRoleSix($request);
            case 7:
                return $this->handleRoleSeven($request);
            case 8:
                return $this->handleRoleEight($request);
             case 9:
                return $this->handleRoleOne($request);
            default:
                return abort(403, 'Unauthorized action.');
        }
    }
  
    private function handleRoleOne(Request $request)
    {
        $ordersQuery = Order::with('user', 'payment', 'feedback')->where('uid', '!=', 0);
    
      
    
        $data = [
            'Team' => Writer::all(),
            'Status' => Status::all(),
            'formatting' => Formatting::all(),
            'service' => Services::all(),
            'Writting' => Writting::all(),
            'paper' => Paper::all(),
            'user' => User::all(),
            'college' => College::all(),
            'admin' => User::where('role_id', 8)->where('flag', 0)->get(),
            'writerTL' => User::where('role_id', 6)->where('flag', 0)->get(),
            'SubWriter' => User::where('role_id', 7)->where('flag', 0)->get(),
            'projectStatusCounts' => ProjectStatusCount::all()
        ];
        $totalOrders = $ordersQuery->count();
        $totalWordCount = 0;

        foreach ($ordersQuery->get() as $order) {
            if (is_numeric($order->pages)) {
                $totalWordCount += $order->pages;
            }
        }
        if ($request->input('search') || $request->input('status') || $request->input('writer') || $request->input('writerTL') || $request->input('uid') || $request->input('date_status') || $request->input('from_date') || $request->input('to_date') || $request->input('SubWriter') || $request->input('college') || $request->input('extra') || $request->input('secondary_mobile') || $request->input('paper_type')) {
            $data['orders'] = $ordersQuery->orderByDesc('id')->get();
        } else {
            $perPage = 10;
            $page = $request->input('page') ?? 1;
            $ordersQuery->offset(($page - 1) * $perPage)->limit($perPage);
    
            
            $totalPages = ceil($totalOrders / $perPage);
    
            $data['orders'] = $ordersQuery->orderByDesc('id')->get();
            $data['totalOrders'] = $totalOrders;
            $data['totalWordCount'] = $totalWordCount;
            $data['totalPages'] = $totalPages;
        }
        
        if(auth()->user()->role_id == 1)
        {
            return view('order.my_orders', compact('data'));
        }
        elseif(auth()->user()->role_id == 4)
        {
            return view('order.marketingteam_order', compact('data'));
        } 
        elseif(auth()->user()->role_id == 5)
        {
            return view('order.projectteam_order', compact('data'));
        }
         elseif(auth()->user()->role_id == 9)
        {
            return view('order.subadmin_order', compact('data'));
        }
    }
    


private function handleRoleTwo()
{
    $id  = auth()->user()->id;
    $data['orders'] = Order::with('payment')->where('uid', $id)->paginate(10);
    $data['leads'] = Leads::where('emp_id', $id)->where('status', 0)->get();

    
    return view('order.user_order', compact('data'));
}



public function handleRoleSix(Request $request)
{
    $id = auth()->user()->id;
    $status = $request->input('status');
    $dateStatus = $request->input('date_status');
    $fromDate = $request->input('from_date');
    $toDate = $request->input('to_date');
    $WriterTL =$request->input('WriterTL');
    $SubWriter =$request->input('SubWriter');
    $extra =$request->input('extra');
    $startDateud =$request->input('startDate');
    $endDateud =$request->input('endDate');
    $startDatefd =$request->input('startDate1');
    $endDatefd =$request->input('endDate1');
    $daterange1 =$request->input('daterange');
    $daterange2 =$request->input('daterange1');


    $orders = Order::query();

    // Applying filters
    if ($request->input('search')) {
        $searchTerm = $request->input('search');
        $orders->where(function($query) use ($searchTerm) {
            $query->where('order_id', 'like', '%' . $searchTerm . '%')
                  ->orWhere('title', $searchTerm);
        });
    }

    if ($daterange1 != '') {
        $dateRange = explode(' to ', $daterange1);
        $startDate = date('Y-m-d', strtotime($dateRange[0]));
        $endDate = date('Y-m-d', strtotime($dateRange[1]));
        $orders->whereBetween('writer_fd', [$startDate, $endDate]);
    }

    if ($daterange2 != '') {

       
        $dateRange = explode(' to ', $daterange2);
        $startDate = date('Y-m-d', strtotime($dateRange[0]));
        $endDate = date('Y-m-d', strtotime($dateRange[1]));
        $orders->whereBetween('writer_ud', [$startDate, $endDate]);
    }
   
  
    if ($status != '') {
        if ($status == 'Not Assign') {
            $orders->where('writer_status',  '' );
        }
        else
        {

            $orders->where('writer_status',  $status );
        }
    }

  

   if($fromDate != '')
   {

        if($fromDate != '' && $toDate != '')
        {
            $orders->whereBetween('writer_deadline', [$fromDate, $toDate ]);
        }

        else{
            $orders->where('writer_deadline', $fromDate);
        }

       
    }
    

   
    
       
    

    if($WriterTL != '')
    {
        $orders->where('wid', $WriterTL);

    }

    if($SubWriter != '')
    {
        $orders->where('swid', $SubWriter );

    }

   

    if($extra != '')
    {
        if($extra == 'tech')
        {
        $orders->where('tech', '1' );
        }
        elseif($extra == 'resit')
        {
        $orders->where('resit', 'on' );
        }
        elseif($extra == 'failedjob')
        {
        $orders->where('is_fail', '1' );
            
        }
        elseif($extra == '1')
        {
        $orders->where('services', 'First Class Work' );
            
        }
    }


    // Fetching data for dropdowns
    $data = [
        'Team' => Writer::all(),
        'Status' => Status::all(),
        'formatting' => Formatting::all(),
        'service' => Services::all(),
        'Writting' => Writting::all(),
        'paper' => Paper::all(),
        'user' => User::all(),
        'college' => College::all(),
        'admin' => User::where('role_id', 8)->where('flag', 0)->get(),
        'writerTL' => User::where('role_id', 6)->where('flag', 0)->get(),
        'SubWriter' => User::where('role_id', 7)->where('flag', 0)->get(),
    ];

    // Fetching orders
    $data['orders'] = $orders->where('wid', $id)->orderBy('order_id', 'desc')->paginate(10);

    return view('order.writer-tl_order', compact('data'));
}



public function handleRoleSeven(Request $request)
{
    $id = auth()->user()->id;
    $status = $request->input('status');
    $dateStatus = $request->input('date_status');
    $fromDate = $request->input('from_date');
    $toDate = $request->input('to_date');
    $WriterTL =$request->input('WriterTL');
    $SubWriter =$request->input('SubWriter');
    $extra =$request->input('extra');
    $startDateud =$request->input('startDate');
    $endDateud =$request->input('endDate');
    $startDatefd =$request->input('startDate1');
    $endDatefd =$request->input('endDate1');
    $daterange1 =$request->input('daterange');
    $daterange2 =$request->input('daterange1');

    $orders = Order::query();

    // Applying filters
    if ($request->input('search')) {
        $searchTerm = $request->input('search');
        $orders->where(function($query) use ($searchTerm) {
            $query->where('order_id', 'like', '%' . $searchTerm . '%')
                  ->orWhere('title', $searchTerm);
        });
    }

    if ($daterange1 != '') {
        $dateRange = explode(' to ', $daterange1);
        $startDate = date('Y-m-d', strtotime($dateRange[0]));
        $endDate = date('Y-m-d', strtotime($dateRange[1]));
        $orders->whereBetween('writer_fd', [$startDate, $endDate]);
    }

    if ($daterange2 != '') {

       
        $dateRange = explode(' to ', $daterange2);
        $startDate = date('Y-m-d', strtotime($dateRange[0]));
        $endDate = date('Y-m-d', strtotime($dateRange[1]));
        $orders->whereBetween('writer_ud', [$startDate, $endDate]);
    }

   
  
    if ($status != '') {
        if ($status == 'Not Assign') {
            $orders->where('writer_status',  '' );
        }
        else
        {

            $orders->where('writer_status',  $status );
        }
    }

  

   if($fromDate != '')
   {

        if($fromDate != '' && $toDate != '')
        {
            $orders->whereBetween('writer_deadline', [$fromDate, $toDate ]);
        }

        else{
            $orders->where('writer_deadline', $fromDate);
        }
       
    }
    if($WriterTL != '')
    {
        $orders->where('wid', $WriterTL);

    }

    if($SubWriter != '')
    {
        $orders->where('swid', $SubWriter );

    }

   

    if($extra != '')
    {
        if($extra == 'tech')
        {
        $orders->where('tech', '1' );
        }
        elseif($extra == 'resit')
        {
        $orders->where('resit', 'on' );
        }
        elseif($extra == 'failedjob')
        {
        $orders->where('is_fail', '1' );
            
        }
        elseif($extra == '1')
        {
        $orders->where('services', 'First Class Work' );
            
        }
    }


    // Fetching data for dropdowns
    $data = [
        'Team' => Writer::all(),
        'Status' => Status::all(),
        'formatting' => Formatting::all(),
        'service' => Services::all(),
        'Writting' => Writting::all(),
        'paper' => Paper::all(),
        'user' => User::all(),
        'college' => College::all(),
        'admin' => User::where('role_id', 8)->where('flag', 0)->get(),
        'writerTL' => User::where('role_id', 6)->where('flag', 0)->get(),
        'SubWriter' => User::where('role_id', 7)->where('flag', 0)->get(),
    ];

    // Fetching orders
        if( $request->input('status') || $request->input('date_status') ||$fromDate = $request->input('from_date') || $request->input('to_date') || $request->input('WriterTL') || $request->input('SubWriter') || $request->input('extra') || $request->input('startDate') || $request->input('endDate') || $request->input('startDate1') || $request->input('endDate1')) 
        {
            
            $data['orders'] = $orders->where('swid', $id)->orderBy('order_id', 'desc')->get();
        }
        else
        {
            $data['orders'] = $orders->with('mulsubwriter')
            ->where(function ($query) {
                $userId = auth()->user()->id;
                $query->where('swid', $userId)
                    ->orWhereHas('mulsubwriter', function ($query) use ($userId) {
                        $query->where('user_id', $userId);
                    });
            })
            ->orderBy('order_id', 'desc')
            ->paginate(10);        }
     return view('order.sub-writer_order', compact('data'));
    }

    public function handleRoleEight(Request $request)
{
    $id = auth()->user()->id;
    

    $orders = Order::query();

    // Applying filters
    


    // Fetching data for dropdowns
    $data = [
        'Team' => Writer::all(),
        'Status' => Status::all(),
        'formatting' => Formatting::all(),
        'service' => Services::all(),
        'Writting' => Writting::all(),
        'paper' => Paper::all(),
        'user' => User::all(),
        'college' => College::all(),
        'admin' => User::where('role_id', 8)->where('flag', 0)->get(),
        'writerTL' => User::where('role_id', 6)->where('flag', 0)->where('admin_id',auth()->user()->id)->get(),
        'SubWriter' => User::where('role_id', 7)->where('flag', 0)->get(),
            ];

    // Fetching orders
        if( $request->input('status') || $request->input('date_status') ||$fromDate = $request->input('from_date') || $request->input('to_date') || $request->input('WriterTL') || $request->input('SubWriter') || $request->input('extra') || $request->input('startDate') || $request->input('endDate') || $request->input('startDate1') || $request->input('endDate1')) 
        {
            $data['orders'] = $orders->where('admin_id', $id)->orderBy('order_id', 'desc')->get();
        }
        else
        {
            $data['orders'] = $orders->with('writer' , 'subwriter', 'mulsubwriter')->where('admin_id', $id)->orderBy('writer_deadline', 'desc')->paginate(10);
            // echo '<pre>'; print_r($data['orders']); exit;
          
        }
     return view('order.writer-admin_order', compact('data'));
    }

    

    
  public function fail($id)
    {
        try {
          $order = Order::find($id);
          $order->is_fail = 1;
          $order->failed_by = auth()->user()->name;
          $order->failed_at = now();
          $order->save();

          $uid = $order->uid;
          $user = User::find($uid);
          $user->is_fail= 1;
          $user->save();

            return response()->json(['message' => 'Order updated successfully']);
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return response()->json(['error' => 'Failed to update order'], 500);
        }
    }
    public function updateOrderStatus(Request $request, $id)
    {
        try {
            $order = Order::find($id);
    
            if ($order->is_fail == 1) {
                // If the order is failed, cancel the failed status
                $order->is_fail = 0;            
                $action = 'cancelled';
            } else {
                // If the order is not failed, mark it as failed
                $order->is_fail = 1;
                $order->failed_by = auth()->user()->name;
                $order->failed_at = now();
                
                $uid = $order->uid;
                $user = User::find($uid);
                $user->is_fail= 1;
                $user->save();
                $action = 'failed';
            }
    
            $order->save();
    
            return response()->json(['message' => 'Order ' . $action . ' successfully']);
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return response()->json(['error' => 'Failed to update order'], 500);
        }
    }


    public function payment(Request $request, $id)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0.01', // Minimum amount should be 0.01
            'payee_name' => 'required|string',
            'company_accounts' => 'required|string',
        ]);
    
        // If validation fails
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    
        // Find the order
        $order = Order::find($id);
    
        if (!$order) {
            return Redirect::back()->with('error', 'Order not found.');
        }
    
        // Calculate the remaining amount to be paid
        $remainingAmount = $order->amount - $order->received_amount;
    
        // Check if the paid amount is valid
        $paidAmount = $request->input('amount');
        if ($paidAmount > $remainingAmount) {
            return Redirect::back()->with('error', 'Paid amount exceeds the remaining due amount.');
        }
    
        // Save payment details
        $payment = new Payment;
        $payment->order_id = $id;
        $payment->payment_date = now()->format('l d F Y h:i A');
        $payment->paid_amount = $paidAmount;
        $payment->reference = $request->input('message');
        $payment->payee_name = $request->input('payee_name');
        $payment->payment_update_by = auth()->user()->name;
        $payment->account_status = 1; // Assuming this is the default value
        $payment->company_accounts = $request->input('company_accounts');
        $payment->save();
    
        // Update the received amount in the order
        $order->received_amount += $paidAmount;
        $order->save();
    
        return Redirect::back()->with('success', 'Payment details updated successfully.');
    }

    
    public function OrderEdit(Request $req, $id)
    {
        // Find the order by ID
        $order = Order::find($id);
        $search =   $order->order_id;

        // Check if the user has the necessary role to edit this order
        

        // Check user role and update fields accordingly
        if (auth()->user()->role_id == 1) {
            // Fields specific to the admin role
            $order->title = $req->input('title');
            $order->order_date = $req->input('order_date');
            $order->writer_deadline = $req->input('writer_deadline');
            if ($order->order_date <= $req->input('delivery_date')) {
                // Delivery Date must be on or after the Order Date               
                $order->delivery_date = $req->input('delivery_date');
            }
            $order->amount = $req->input('amount');
            $order->received_amount = $req->input('r_amount');
            $order->delivery_time = $req->input('delivery_time');
            // Check if the input is a numeric value
            if ($req->filled('word') && !is_numeric($req->input('word'))) {
                // Redirect back with a warning message if not numeric
                return redirect()->back()->with('warning', 'Word must be a numeric value');
            }
            $order->pages = $req->input('word');
            $order->writer_deadline_time = $req->input('writer_deadline_time');

            if( $req->input('status') == 'Completed')
            {
                $order->projectstatus = $req->input('status');
                $order->status_date = Carbon::now('Asia/Kolkata');
                $order->status_by   = auth()->user()->name;

                $orderData = [
                    'name' => $req->input('user_name'),
                    'email' => $req->input('email'),
                    'title' => $req->input('title'),
                    'order_code' => $order->order_id,
                    'date'     => $order->delivery_date,
                    'due'     => $req->input('amount') - $req->input('r_amount'),
                ];
                Mail::to( $orderData['email'])->cc('user@gmail.com')->send(new OrderComplete($orderData));
               
            }
            elseif( $req->input('status') == 'Delivered')
            {
                if ((int)$order->amount - (int)$order->received_amount !== 0) {
                    return redirect()->back()->with('warning' , 'Order cannot be marked as Delivered if there is any due payment remaining.');
                }                
                $order->projectstatus = $req->input('status');
            }
            else
            {
                $order->projectstatus = $req->input('status');
                $order->status_date = Carbon::now('Asia/Kolkata');
                $order->status_by   = auth()->user()->name;
            }
           
             if( $req->input('writer_name') == 'team 13')
            {
                $order->writer_name = $req->input('writer_name');
               $order->admin_id =  '8392'; 
            } 
            elseif($req->input('writer_name') == 'team 02')
            {
                $order->writer_name = $req->input('writer_name');
               $order->admin_id =  '10123'; 
            }
            else
            {
                 $order->writer_name = $req->input('writer_name');
                  $order->admin_id =  '0';
            }
            
            
            $order->formatting = $req->input('formatting');
            $order->services = $req->input('services');
            $order->typeofwritting = $req->input('writting_type');
            $order->typeofpaper = $req->input('paper');
            if ($order->typeofpaper === 'Dissertation' || $order->typeofpaper === 'Thesis') {
                $order->chapter = $req->input('chapter');
            }else {
                $order->chapter = null;
            }
            $order->college_name = $req->input('college_name');
            $order->draftrequired = $req->input('daraft_status');
            $order->draft_date = $req->input('draft_date');
            $order->draft_time = $req->input('draft_time');
            $order->message = $req->input('messages');
            $order->college_name = $req->input('college_name');
            $order->resit = $req->input('resit');
            $order->tech = $req->input('tech');
            $order->module_code = $req->input('module_code');
            $order->semester = $req->input('semester');
           
           

            
            if($req->input('uid') != '')
            {

                $order->uid = $req->input('uid');
            }
            else
            {
               
                $user = User::find($order->uid);
                if ($req->filled('user_name')) {
                    $user->name = $req->input('user_name');
                }
                if ($req->filled('mobile')) {
                    $user->mobile_no = $req->input('mobile');
                }
                if ($req->filled('country_code')) {
                    $user->countrycode = $req->input('country_code');
                }
                if ($req->filled('mobile2')) {
                    $user->mobile_no2 = $req->input('mobile2');
                }
                if ($req->filled('country_code2')) {
                    $user->countrycode2 = $req->input('country_code2');
                }
                if ($req->filled('email')) {
                    $user->email = $req->input('email');
                }
                $user->save();
            }
           

        } 

        if (auth()->user()->role_id == 4 || auth()->user()->role_id == 9) {
        
            // Fields specific to the MarketingTeam role
            $order->title = $req->input('title');
            // $order->order_date = $req->input('order_date');
            
            
            // $order->delivery_date = $req->input('delivery_date');
            if ($order->order_date <= $req->input('delivery_date')) {
                // Delivery Date must be on or after the Order Date               
                $order->delivery_date = $req->input('delivery_date');
            }
            $order->amount = $req->input('amount');
            $order->received_amount = $req->input('r_amount');
            $order->delivery_time = $req->input('delivery_time');
            // Check if the input is a numeric value
            if ($req->filled('word') && !is_numeric($req->input('word'))) {
                // Redirect back with a warning message if not numeric
                return redirect()->back()->with('warning', 'Word must be a numeric value');
            }
            $order->pages = $req->input('word');
            if( $req->input('status') == 'Completed')
            {
                $order->projectstatus = $req->input('status');
                $order->status_date = Carbon::now('Asia/Kolkata');
                $order->status_by   = auth()->user()->name;

                $orderData = [
                    'name' => $req->input('user_name'),
                    'email' => $req->input('email'),
                    'title' => $req->input('title'),
                    'order_code' => $order->order_id,
                    'date'     => $order->delivery_date,
                    'due'     => $req->input('amount') - $req->input('r_amount'),
                ];
                Mail::to($orderData['email'])->cc('user@gmail.com')->send(new OrderComplete($orderData));
               
            }
            elseif( $req->input('status') == 'Delivered')
            {
                if ((int)$order->amount - (int)$order->received_amount !== 0) {
                    return redirect()->back()->with('warning' , 'Order cannot be marked as Delivered if there is any due payment remaining.');
                }                
                $order->projectstatus = $req->input('status');
            }
            else
            {
                $order->projectstatus = $req->input('status');
                $order->status_date = Carbon::now('Asia/Kolkata');
                $order->status_by   = auth()->user()->name;
            }

            $order->college_name = $req->input('college_name');
            
            $order->services = $req->input('services');
            
            // $order->chapter = $req->input('chapter');
            
            $order->draftrequired = $req->input('daraft_status');
            $order->draft_date = $req->input('draft_date');
            $order->draft_time = $req->input('draft_time');
            $order->message = $req->input('messages');
            $order->semester = $req->input('semester');
            $order->resit = $req->input('resit');
            $order->tech = $req->input('tech');
            $order->module_code = $req->input('module_code');
            $order->typeofpaper = $req->input('paper');
            if ($order->typeofpaper === 'Dissertation' || $order->typeofpaper === 'Thesis') {
                $order->chapter = $req->input('chapter');
            }else {
                $order->chapter = null;
            }
            $user = User::find($order->uid);
            if ($req->filled('user_name')) {
                $user->name = $req->input('user_name');
            }
            if ($req->filled('mobile')) {
                $user->mobile_no = $req->input('mobile');
            }
            if ($req->filled('country_code')) {
                $user->countrycode = $req->input('country_code');
            }
            if ($req->filled('mobile2')) {
                $user->mobile_no2 = $req->input('mobile2');
            }
            if ($req->filled('country_code2')) {
                $user->countrycode2 = $req->input('country_code2');
            }
            if ($req->filled('email')) {
                $user->email = $req->input('email');
            }
    
            // Save user changes
            $user->save();

        } 
        if (auth()->user()->role_id == 5) {
            // Fields specific to the project-team role
            $order->title = $req->input('title');
            // $order->order_date = $req->input('order_date');
            $order->writer_deadline = $req->input('writer_deadline');
            $order->writer_deadline_time = $req->input('writer_deadline_time');
            // $order->delivery_date = $req->input('delivery_date');
            
            // $order->delivery_time = $req->input('delivery_time');
            // Check if the input is a numeric value
            if ($req->filled('word') && !is_numeric($req->input('word'))) {
                // Redirect back with a warning message if not numeric
                return redirect()->back()->with('warning', 'Word must be a numeric value');
            }
            $order->pages = $req->input('word');
            
            if( $req->input('status') == 'Completed')
            {
                $order->projectstatus = $req->input('status');
                $order->status_date = Carbon::now('Asia/Kolkata');
                $order->status_by   = auth()->user()->name;

                $orderData = [
                    'name' => $req->input('user_name'),
                    'email' => $req->input('email'),
                    'title' => $req->input('title'),
                    'order_code' => $order->order_id,
                    'date'     => $order->delivery_date,
                    'due'     => $req->input('amount') - $req->input('r_amount'),
                ];
                Mail::to($orderData['email'])->cc('user@gmail.com')->send(new OrderComplete($orderData));
               
            }
            elseif( $req->input('status') == 'Delivered')
            {
                if ((int)$order->amount - (int)$order->received_amount !== 0) {
                    return redirect()->back()->with('warning' , 'Order cannot be marked as Delivered if there is any due payment remaining.');
                }                
                $order->projectstatus = $req->input('status');
            }
            else
            {
                $order->projectstatus = $req->input('status');
                $order->status_date = Carbon::now('Asia/Kolkata');
                $order->status_by   = auth()->user()->name;
            }
            
            $order->college_name = $req->input('college_name');

            $order->draftrequired = $req->input('daraft_status');
            $order->draft_date = $req->input('draft_date');
            $order->draft_time = $req->input('draft_time');
            $order->message = $req->input('messages');
            $order->module_code = $req->input('module_code');
            $order->chapter = $req->input('chapter');
              if( $req->input('writer_name') == 'team 13')
            {
                $order->writer_name = $req->input('writer_name');
               $order->admin_id =  '8392'; 
            } 
             elseif($req->input('writer_name') == 'team 02')
            {
                $order->writer_name = $req->input('writer_name');
               $order->admin_id =  '10123'; 
            }
            else
            {
                 $order->writer_name = $req->input('writer_name');
                  $order->admin_id =  '0'; 
            }


        }
        if (auth()->user()->role_id == 7) {
            // Fields specific to the subwriter-team role
            
            $order->writer_status = $req->input('writer_status');
            
            $order->message = $req->input('messages');
        }
        

        // Save order changes
        $order->save();
        
        // Update or create a record in the ProjectStatusCount table
        $statusCount = ProjectStatusCount::where('order_Id', $order->id)
                        ->where('status', $req->input('status'))
                        ->first();
        $lastStatusCount = ProjectStatusCount::where('order_Id', $order->id)
            ->orderBy('updated_at', 'desc')
            ->first();
        // dd($lastStatusCount->status, $req->input('status'), $statusCount);
        if ($statusCount && $lastStatusCount->status != $req->input('status')) {
            $statusCount->increment('count');
            $statusCount->save(); // Save the updated record
        } elseif (!$statusCount){
            $statusCount = ProjectStatusCount::create([
                'order_Id' => $order->id,
                'status' => $req->input('status'),
                'count' => 1
            ]);
        }
        // Now $statusCount contains the saved record

        // Update user details only if the corresponding input fields have a value
       

        return redirect('/order')->with(['Success' => "Order Updated", 'search' => $search]);
    
}


    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $uid = $request->input('uid');
        $status = $request->input('status');
        $writer = $request->input('writer');
        $dateStatus = $request->input('date_status');
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $WriterTL =$request->input('WriterTL');
        $SubWriter =$request->input('SubWriter');
        $college =$request->input('college');
        $extra =$request->input('extra');
        $secondaryMobile = $request->input('secondary_mobile'); // Add this line to get the secondary mobile number
        $selectedDataTextBox = $request->input('selectedDataTextBox'); // Add this line to get the secondary mobile number
        $paper_type = $request->input('paper_type');
        $data = [
            'projectStatusCounts' => ProjectStatusCount::all()
        ];

        $orders = Order::query();
    
        if ($searchTerm != '') {
            $orders->where(function($query) use ($searchTerm) {
                $query->where('order_id', 'like', '%' . $searchTerm . '%')
                      ->orWhere('title', 'like', '%' . $searchTerm . '%');
            });
        }
        if($selectedDataTextBox)
        {
            $orders->where('order_id' , $selectedDataTextBox);
                     
            
        }

       
        if ($uid != '' ) {
          
          
            $orders->where('uid', $uid);
       
    }
        
        
        // Add the condition to filter by secondary mobile number
        if ($secondaryMobile != '') {
            $orders->where('module_code', 'like', '%' . $secondaryMobile . '%' );
        }

        // ... (remaining code)
    
       
    
        if ($status != '') {
            $orders->where('projectstatus',  $status );
        }
    
        if ($writer != '') {
            if($writer == 'team 13')
            {
                $orders->where('admin_id',  8392 );
            }
            elseif($writer == 'Not Assign')
            {
                 $orders->where(function ($query) {
                        $query->whereNull('writer_name')
                              ->orWhere('writer_name', '');
                    });            
                
            }
            else
            {

                $orders->where('writer_name', 'Like', $writer );
            }
        }
    
        if ($dateStatus != '' || $fromDate != '' || $toDate != '') 
        {
            if ($fromDate != '' && $toDate != '' && $dateStatus != '') 
            {
   
                if($dateStatus == 'draft_date')
                {
                    $orders->whereBetween($dateStatus, [$fromDate, $toDate])->where('draftrequired' , 'y' );

                }
                else
                {
                    if ($dateStatus == 'failed_at') {
                        $orders = Order::where('is_fail', 1)
                        ->whereBetween(DB::raw("STR_TO_DATE($dateStatus, '%Y-%m-%d')"), [$fromDate, $toDate]);
                    }else {
                        $orders->whereBetween($dateStatus, [$fromDate, $toDate]);
                    }
                }
            } 
            elseif($fromDate != '' && $toDate != '')
            {
                $orders->whereBetween('order_date', [$fromDate, $toDate]);
            }
            elseif($fromDate != '')
            {
                $orders->where('order_date', $fromDate);
            }

            elseif($dateStatus != '')
             {
                $orders->where('order_date', Carbon::today());
             }
            }
        
        
           
        

        if($WriterTL != '')
        {
            $orders->where('wid', $WriterTL);

        }

        if($SubWriter != '')
        {
            // $orders->where('swid', $SubWriter );
            $multipleWriters = multipleswiter::where('user_id', $SubWriter)->get();
                    
            $orderIds = $multipleWriters->pluck('order_id')->toArray();
            
            $orders->whereIn('id', $orderIds); 

        }

        if($college != '')
        {
            $orders->where('college_name', $college );
        }

        if($extra != '')
        {
            if($extra == 'tech')
            {
            $orders->where('tech', '1' );
            }
            elseif($extra == 'resit')
            {
            $orders->where('resit', 'on' );
            }
            elseif($extra == 'failedjob')
            {
            $orders->where('is_fail', '1' );
                
            }
            elseif($extra == '1')
            {
            $orders->where('services', 'First Class Work' );
                
            }
        }

        if ($paper_type != '') {
            $orders->where('typeofpaper',  $paper_type );
        }
    
        $orders = $orders->orderBy('id', 'desc')->where('uid', '!=' ,'0')->get();
            
        if ($orders->isEmpty()) {
            return response()->json(['message' => 'No data found']);
        }
         
        $totalOrderCount = $orders->count();
    
        
        $totalWordCount = $orders->reduce(function ($carry, $order) {
            return $carry + (is_numeric($order->pages) ? $order->pages : 0);
        }, 0);
    
    
        $output = '';
        $index = 1;
    
        foreach ($orders as $order) {
            // Your existing code for creating the output string goes here
            $output .= '<tr';
            
            // Check if the order has a user and the user is_fail property is set to 1
            if ($order->user && $order->user->is_fail == 1) {
                $output .= ' style="color:blue"';
            }
            
            $output .= '>';    
            $output .= '<td>' .  $index++. '</td>
                            <td>
                                ' . $order->order_id . '
                                ' . ($order->feedback_ticket != '' ? '<span class="badge badge-light-danger fs-7 fw-bold ">' . $order->feedback_ticket . '</span>' : '') . '

                                ' . ($order->is_fail == 1 ? '<span class="badge badge-light-danger fs-7 fw-bold">Fail Order <br> '.(auth()->user()->role_id ==  '1' ? \Carbon\Carbon::parse($order->failed_at)->format('d M Y H:i:s A') : '').'</span>' : '') . '
                                ' . ($order->services == 'First Class Work' ? '<span class="badge badge-light-info fs-7 fw-bold">First Class Work</span>' : '') . '
                                ' . ($order->resit == 'on' ? '<span class="badge badge-light-danger fs-7 fw-bold">Resit</span>' : '') . '
                           
                                </td>  
                            
                                '.($order->user !=  ''  && auth()->user()->role_id !=  '5' ? 
                                
                                '<td>
                                '.$order->user->name.'
                                <span class="badge badge-light-danger fs-7 fw-bold">'.$order->user->mobile_no.'</span>                                
                                </td> '
                                
                                : '') .'

                                '.($order->user ==  ''  &&  auth()->user()->role_id !=  '5'  ? 
                                
                                '<td>
                                Deleted User
                                </td> '
                                
                                : '') .'
                                
                            <td>'.\Carbon\Carbon::parse($order->order_date)->format('d M Y').'</td>
                            
                            <td  onclick="updateDeliveryDate('.$order->id.')">
                            ' . ($order->delivery_date != null ? \Carbon\Carbon::parse($order->delivery_date)->format('d M Y') : 'Not Available') . '
                            ' . ($order->draftrequired == 'Y' ? '<span class="badge badge-light-success fs-7 fw-bold">'. \Carbon\Carbon::parse($order->draft_date)->format('d M Y').' ('. ( \Carbon\Carbon::parse($order->draft_time)->format('H:i') ).')</span>' : '') . '
                            </td>
                            <td>'.$order->title.'
                                  '.(auth()->user()->role_id ==  '1' ||  auth()->user()->role_id ==  '4' ||  auth()->user()->role_id ==  '9' ?
                            '
                                 <br>  ' . ($order->semester != '' ? ''.$order->semester.'' : '') . '
                            '
                        : '') .'
                            ' . ($order->chapter != '' ? '<span class="badge badge-light-danger fs-7 fw-bold">'.$order->chapter.'</span>' : '') . '
                            ' . ($order->tech == '1' ? '<span class="badge badge-light-success fs-7 fw-bold">Technical Work</span>' : '') . '
                            ' . ($order->module_code != '' ? '<span class="badge badge-light-danger fs-7 fw-bold">'.$order->module_code.'</span>' : '') . '
                            </td>
                            <td onclick="status('.$order->id.')">
                            '.($order->projectstatus ==  'Pending' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:pink; color:white">'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Other' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:#44f2e4; color:black">'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Advance Assignment' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:#44f2e4; color:black">'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'In Progress' ? '<span class="badge badge-light-info fs-7 fw-bold" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Hold Work' ? '<span class="badge badge-light-danger fs-7 fw-bold" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Completed' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:#eaea00; color:black" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Delivered' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:green; color:white" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Feedback' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:black; color:white" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Feedback Delivered' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:black; color:white" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Cancelled' ? '<span class="badge badge-light-danger fs-7 fw-bold" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Draft Ready' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:#eaea00; color:black" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Draft Delivered' ? '<span class="badge badge-light-danger fs-7 fw-bold"  style="background:green; color:white" >'.$order->projectstatus .'</span>' : '') .'
                            '.($order->projectstatus ==  'Initiated' ? '<span class="badge badge-light-danger fs-7 fw-bold"  style="background:pink; color:white">'.$order->projectstatus .'</span>' : '') .'
                            
                        ';
                            if (auth()->user()->role_id == '1') {
                                $statusCounts = $data["projectStatusCounts"]->where("order_Id", $order->id)
                                                    ->where("status", $order->projectstatus);
                                if ($statusCounts->isNotEmpty()) {
                                    foreach ($statusCounts as $statusCount) {
                                        $output .= '<span class="badge badge-sm badge-circle badge-light-success">' . $statusCount->count . '</span>';
                                    }
                                }
                            }
                            $output .= '</td>';

                            $output .= '

                        '.(auth()->user()->role_id ==  '1' ||  auth()->user()->role_id ==  '4' ||  auth()->user()->role_id ==  '9' ?
                            '<td>
                                '.($order->status_issue ==  'Issue Raised' ? '<span class="badge badge-light-danger fs-7 fw-bold">'.$order->status_issue .'</span>' : '') .'
                                '.($order->status_issue ==  'Client Discussion Done' ? '<span class="badge badge-light-info fs-7 fw-bold">'.$order->status_issue .'</span>' : '') .'
                                '.($order->status_issue ==  'Writer discussion Done' ? '<span class="badge badge-light-success fs-7 fw-bold">'.$order->status_issue .'</span>' : '') .'
                                '.($order->status_issue ==  'Work in progress' ? '<span class="badge badge-light-warning fs-7 fw-bold">'.$order->status_issue .'</span>' : '') .'
                                '.($order->status_issue ==  'Case Resolved' ? '<span class="badge badge-light-success fs-7 fw-bold">'.$order->status_issue .'</span>' : '') .'
                                '.($order->status_issue ==  'Issues Raised Again' ? '<span class="badge badge-light-danger fs-7 fw-bold" style="background:red; color:white">'.$order->status_issue .'</span>' : '') .'
                                '.($order->status_issue ==  '' ? '<span class="badge badge-light-warning fs-7 fw-bold"> </span>' : '') .'
                            </td>'
                        : '') .'
                        

                       '.(auth()->user()->role_id !=  '5' ? 
                       
                       
                       ' 
                            <td>'.$order->pages.'</td>
                            <td>'.$order->amount.'</td> 
                            <td>'.$order->received_amount.'</td>
                            <td> '.(is_numeric($order->amount) !=  '' ? '<span >'.$order->amount - $order->received_amount .'</span>' : '') .'</td>
                       '
                       
                       : '') .'
                            
                            '. 
                            
                            '<td>       
                            '.($order->writer_name ==  ''  || $order->writer_name ==  NULL ? '<span class="badge badge-light-danger fs-7 fw-bold" >N/A</span>' : '') .'

                            
                            '.$order->writer_name.' 
                            '.($order->writer_deadline !=  '' ? '<span class="badge badge-light-info fs-7 fw-bold" ">'.\Carbon\Carbon::parse($order->writer_deadline)->format('d M Y').'</span>' : '') .'
                            
                            </td> '
                            
                            .'

                          </td>';
                            
                            if (auth()->user()->role_id == '1') {
                                $output .= '<td>';
                                if ($order->l_converted_by != null) {
                                    $output .= 'Convert By (' . $order->l_converted_by . ')';
                                } else {
                                    $output .= 'Convert By (N/A)';
                                }
                                if ($order->failed_by != null) {
                                    $output .= '<br>Failed By: ' . $order->failed_by . ' at ' . $order->failed_at;
                                } else {
                                    $output .= '<br>Failed By: (N/A)';
                                }
                                $output .= '</td>';
                            }
                            

                            
                            $output .= '<td class="text-end">
                            <a   target="_blank" href="edit.'.$order->id.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <span class="svg-icon svg-icon-3">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </a>
                            
                        
                          
                            '.(auth()->user()->role_id !=  '5' ? 
                            '
                            <a href="orderpayments.'.$order->id.'"  target="_blank"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <span class="svg-icon svg-icon-3">
                                    <li class="fa fa-money"></li>
                                </span>
                            </a>
                            
                               <a href="#" id="clickToDownload'.$order->order_id.'" class="btn btn-icon btn-bg-danger btn-active-color-dark btn-sm me-1 download-btn'.$order->id.'" onclick="downloadFiles(this)">
                                <span class="svg-icon svg-icon-3">
                                    <i class="fa fa-download fa-lg"></i>
                                </span>
                            </a>

                            
                            
                           

                            <a href="#" 
                                onclick="showConfirmation('.$order->id.','.$order->is_fail.')"
                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <span class="svg-icon svg-icon-3">
                                        <i>F</i>
                                    </span>
                            </a>

                            <a href="/comment.'.$order->order_id.'"   target="_blank" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <span class="svg-icon svg-icon-3">
                                    <i>T</i>
                                </span>
                            </a> 
                            

                            


                            <a href="#" onclick="showConfirmationclick('.$order->id.')" id="clickToCallBtn{{$order->id}}" class="btn btn-icon btn-bg-success btn-active-color-light btn-sm me-1">
                                <span class="svg-icon svg-icon-3">
                                    <i class="fa fa-phone fa-lg"></i>
                                </span>
                            </a>'

                            : '') .'
                            
                               '.(auth()->user()->role_id ==  '9' ? 
                            '
                             <a href="#" onclick="CallToWriter('.$order->id.')" id="clickToCallBtn{{$order->id}}" class="btn btn-icon btn-bg-warning btn-active-color-light btn-sm me-1">
                                <span class="svg-icon svg-icon-3">
                                    <i class="fa fa-phone fa-lg"></i>
                                </span>
                            </a>
                            
                            '
                             : '') .'
                            
                            </td>
                            
                        </tr>';
        }
    
        return response()->json([
            'output' => $output,
            'totalWordCount' => $totalWordCount,
            'totalOrderCount' => $totalOrderCount,
        ]);
    }
    
    public function fetchSubWriters(Request $request)
    {
        $tlId = $request->input('tlId');

        // Fetch SubWriters based on TL ID
        $subWriters = User::where('tl_id', $tlId)->get();

        // Return the SubWriters as JSON response
        return response()->json($subWriters);
    }

    public function orderEditPage($id)
    {
        $order = Order::with('user')->find($id);

        if (!$order) {
            abort(404, 'Order not found');
        }
        if(auth()->user()->role_id == 7)
        {
            $id = auth()->user()->id;
            $data['orders'] = Order::with('user', 'payment' , 'feedback')
                ->where('swid', $id)
                ->orderBy('order_id', 'desc')
                ->paginate(10);

            // echo '<pre>'; print_r($data['leds']) ; exit;
        }

        $data['Team']         = Writer::all();
        $data['Status']       = Status::all();
        $data['formatting']   = Formatting::all();
        $data['service']      = Services::all();
        $data['Writting']     = Writting::all();
        $data['paper']        = Paper::all();
        $data['college']      = College::all();
        $data['admin']        = User::where('role_id', '=', '8')->where('flag', '=', 0)->get();
        $data['writerTL']     = User::where('role_id', '=', '6')->where('flag', '=', 0)->get();
        $data['SubWriter']    = User::where('role_id', '=', '7')->where('flag', '=', 0)->get();
        $data['ordersub']     = multipleswiter::where('order_id', $id)->get();

    
        // echo '<pre>'; print_r($data['ordersub']); exit;
        $userDetails = $order->user;
        if(auth()->user()->role_id == 8)
        {
            // echo '<pre>'; print_r( $data['ordersub']); exit;
            return view('order.edit.admin_edit', compact('order','data'));

        }
        elseif(auth()->user()->role_id == 4 || auth()->user()->role_id == 9)
        {
            return view('order.Order View & Edit.order_edit_marketing-team', compact('order', 'userDetails', 'data'));

        }
        elseif(auth()->user()->role_id == 5)
        {
            return view('order.Order View & Edit.order_edit_project-team', compact('order', 'userDetails', 'data'));

        }
        elseif(auth()->user()->role_id == 7)
        {
            return view('order.Order View & Edit.order_edit_sub-writer', compact('order', 'userDetails', 'data'));

        }

        elseif(auth()->user()->role_id == 6)
        {
            return view('order.Order View & Edit.order_edit_writerTl', compact('order', 'userDetails', 'data'));

        }
        else
        {
            return view('order.order_edit', compact('order', 'userDetails', 'data'));
        }
    }
    public function orderCallPage($id)
    {
        $order = Order::with('user', 'ordercall.user')->find($id);

        // echo '<pre>'; print_r($order);exit;

        if (!$order) {
            abort(404, 'Order not found');
        }
        $data['orders'] = Order::with('user', 'payment')
                ->where('uid', '!=', 0) // Fix: Use '!=' for "not equal to"
                ->orderByDesc('id')
                ->paginate(10);
                
        $data['Team'] = Writer::all();
        $data['Status'] = Status::all();
        $data['formatting'] = Formatting::all();
        $data['service'] = Services::all();
        $data['Writting'] = Writting::all();
        $data['paper'] = Paper::all();
        $data['college'] = College::all();
        $data['user'] = User::all();

        $userDetails = $order->user;

        return view('order.order_call', compact('order', 'userDetails', 'data'));
    }

    public function orderCommentPage($id)
    {
        $order = Order::with('feedback.user')->where('order_id', $id)->first();
        
        // Check if the order exists
        if (!$order) {
            abort(404, 'Order not found');
        }
    
        return view('order.order_comment', compact('order'));
    }
    

    
    public function saveFeedback(Request $request)
    {
        // Validate the request if needed
        $request->validate([
            'orderId' => 'required',
            'inputVal' => 'required',
        ]);

        // Save data to the feedback table
        $feedback = new Feedback;
        $feedback->order_id = $request->orderId;
        $feedback->message = $request->inputVal;
        $feedback->save();

        // Update feedback status in the order table
        $order = Order::find($request->orderId); // Assuming you have an Order model
        $order->feedback_issue = 1; 
        $order->save();

        // You can return a response if needed
        return response()->json(['message' => 'Feedback saved successfully']);
    }


public function feedbacksheet(Request $req)
{
    $data['writer'] = Writer::all();
    $query = Order::with(['feedback' => function ($query) {
        $query->orderByDesc('id');
    }, 'feedback.user'])->where('feedbackissue', '1')->orderByDesc('feedback_date');

    $edited_on = $req->input('edited_on');
    $fromDate = $req->input('fromDate');
    $toDate = $req->input('toDate');

    if ($fromDate != '' && $toDate != '') {
        if ($edited_on == 'Order-date') {
            $query->whereBetween('order_date', [$fromDate, $toDate])->orderBy('order_date', 'desc');
        } elseif ($edited_on == 'Feedback-date') {
            $query->whereBetween('feedback_date', [$fromDate, $toDate])->orderBy('feedback_date', 'desc');
        }
    } elseif ($fromDate != '') {
        if ($edited_on == 'Order-date') {
            $query->whereDate('order_date', $fromDate)->orderBy('order_date', 'desc');
        } elseif ($edited_on == 'Feedback-date') {
            $query->whereDate('feedback_date', $fromDate)->orderBy('feedback_date', 'desc');
        }
    }

    if ($req->filled('search')) {
        $order_id = $req->input('search');
        $query->where('order_id', $order_id);
    }
    if ($req->filled('ticket_no')) {
        $ticket_no = $req->input('ticket_no');
        $query->where('feedback_ticket', $ticket_no);
    }

    if ($req->filled('writer')) {
        $writer = $req->input('writer');
        $query->where('writer_name', $writer);
    }

    if ($req->filled('status')) {
        $status = $req->input('status');
        $query->where('status_issue', $status);
    }

    // Get the pagination status based on search and filter conditions
    $perPage = ($req->filled('search') || $req->filled('status')) ? Order::count() : 20;
    $currentPage = Paginator::resolveCurrentPage('page');

    // Apply pagination
    Paginator::currentPageResolver(function () use ($currentPage) {
        return $currentPage;
    });

    $orders = $query->paginate($perPage);

    return view('order.feedbacksheet', compact('orders', 'data'));
}


    // public function action_feedback()
    // {
    //     $feedback_action = New Feedbacksheet;
    //     $feedback_action->action_comment = $req->input('comment');
    //     $feedback_action->created_by =  auth()->user()->id;
    //     $feedback_action->order_id  = $req->input('order_id');
    //     $feedback_action->save();
    //     redirect()->back()->with('Success', 'Action Submitted');
    // }
    
    public function orderPayment($id)
    {
        $order = Order::with('user')->find($id);
        return view('order.order_payment', compact('order'));
    }

    public function orderPayment_delete(Request $req, $id)
    {
        $order = $req->input('order_id');
        $newOrder = Order::find($order);
        $newOrder->received_amount = $newOrder->received_amount - $req->input('amount') ;
        $newOrder->SAVE();
        
        Payment::destroy($id);

        return redirect()->back()->with('Success', 'Action Submitted');
    }

    public function insert_feedback(Request $req ,$id)
    {

        $order = Order::find($id);

        $uks = substr($order->order_id, 0, 3);
        if ($order->feedbackissue == 1 && $order->status_issue == 'Case Resolved') {
            $order->status_issue = 'Issues Raised Again';
            // dd($order->feedbackissue,$order->status_issue);
        }
          if($order->feedbackissue != 1)
        {
            $order->status_issue = 'Issue Raised';
          $order->feedback_ticket = substr(uniqid(), 0, 7);

            
        }
        $order->feedbackissue = 1;
        $order->comment = $req->input('comment');
        $order->feedback_date = Carbon::now();
        
      
       


        $order->save();

        $feedback = new Feedback;
        $feedback->order_id = $id;
        $feedback->comment = $req->input('comment');
        $feedback->created_by = auth()->user()->id; // Assuming you are using authentication
        
        $feedback->save();

        

        return response()->json(['status' => 'success','created_at' => $feedback->created_at ,'message' => $feedback->comment]);
    }

    public function sendFeedback(Request $request)
    {
        // Validate your request if necessary
        $request->validate([
            'message' => 'required|string',
            'order_id' => 'required|string',
        ]);

        // Save the feedback
        $feedback = new Feedback;
        $feedback->action_comment = $request->input('message');
        $feedback->order_id = $request->input('order_id');
        $feedback->created_by = auth()->user()->id; // Assuming you are using authentication

        $order = Order::find($request->input('order_id'));
        if ($order->feedbackissue == 1 && $order->status_issue == 'Case Resolved') {
            $order->status_issue = 'Issues Raised Again';
            $order->save();
        }
        $feedback->status = $order->status_issue;

        $feedback->save();

        // You can also fetch the user's name and avatar from the authenticated user
        $user = auth()->user();

        // Return the response
        return response()->json([
            'status' => 'success',
            'message' => $feedback->action_comment,
            'f_status' => $feedback->status,
            'created_at' => $feedback->created_at->diffForHumans(),
            'user' => [
                'name' => $user->name,
                'avatar' => asset($user->photo),
            ],
        ]);
    }
    public function status_update(Request $req, $id){
        $order = Order::find($id);
        $order->status_issue = $req->input('status');

        $order-> save();

        return redirect()->back()->with('Success', 'Feedback status update successfully');
    }

    public function markAsRead(Request $request)
{
    $orderId = $request->input('order_id');

    $order = Order::find($orderId);

    if (!$order) {
        return response()->json(['success' => false, 'message' => 'Order not found']);
    }

    // Assuming 'is_read' is a boolean field
    $order->is_read = 0; // Set it to 0 to mark it as read

    try {
        $order->save();
        return response()->json(['success' => true, 'message' => 'Order marked as read']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Failed to mark as read']);
    }
}
public function OrderCallInsert(Request $request, $id)
{
    $order = Order::find($id);
    $callBack = new Ordercall; 
    $callBack->order_id = $order->id;
    $callBack->created_by = auth()->user()->id;
    $callBack->message = $request->input('callcontent');
    $callBack->save();

    return back()->with('success', 'Your call detail submitted successfully');
}

    public function OrderEditwriterAdmin(Request $req, $id)
    {
            if(auth()->user()->role_id == 8)
            {

                // $subwriter = ;
                // dd();
            $order = Order::find($id);
            $order->writer_status = $req->input('status'); // Update the field name
            $order->wid = $req->input('tlSelect');

           
            
             // Update the field name
            $order->writer_fd = $req->input('fromdate'); // Update the field name
            $order->writer_ud = $req->input('uptodate'); // Update the field name
            $order->writer_fd_h = $req->input('writer_fd_half'); // Update the field name
            $order->writer_ud_h = $req->input('writer_ud_half'); // Update the field name
            $order->save();
            
            if( $req->input('subwriterSelect') != '')
            {
                $subwriterIds = $req->input('subwriterSelect');

                // Delete existing entries with the same order_id
                multipleswiter::where('order_id', $id)->delete();
                
                // Insert new entries
                foreach ($subwriterIds as $subwriterId) {
                    $writer = new multipleswiter;
                    $writer->order_id = $id;
                    $writer->user_id = $subwriterId;
                    $writer->save();
                }
            }

           
            
        }            
            elseif(auth()->user()->role_id == 6)
            {
                $order = Order::find($id);
                $order->writer_status = $req->input('status'); // Update the field name
                // $order->swid = $req->input('subwriterSelect'); 
                
                if($req->input('subwriterSelect') == 'SelfTlwriter')
                {
                    $order->wid  = auth()->user()->id;
                }
            
                $order->save();

                foreach($req->input('subwriterSelect') as $subwriterId)
            {
                $writer = new multipleswiter;
                $writer->order_id = $id;
                $writer->user_id = $subwriterId; // Assigning individual subwriter ID from the array
                $writer->save();
            }

            }
            elseif(auth()->user()->role_id == 7)
            {
                $order = Order::find($id);
                $order->writer_status = $req->input('status'); // Update the field name
                $order->save();

            }
            return redirect()->back()->with('success', 'Order Update Successfully');
        
        }

        public function search_writer( Request $request)
        {
            $searchTerm = $request->input('search');
            $status = $request->input('status');
            $dateStatus = $request->input('date_status');
            $fromDate = $request->input('from_date');
            $toDate = $request->input('to_date');
            $WriterTL =$request->input('WriterTL');
            $SubWriter =$request->input('SubWriter');
            $extra =$request->input('extra');
            $startDateud =$request->input('startDate');
            $endDateud =$request->input('endDate');
            $startDatefd =$request->input('startDate1');
            $endDatefd =$request->input('endDate1');
            $daterange1 =$request->input('daterange');
            $daterange2 =$request->input('daterange1');


    
        $orders = Order::query();
    
        if ($searchTerm != '') {
            $orders->where(function($query) use ($searchTerm) {
                $query->where('order_id', 'like', '%' . $searchTerm . '%')
                      ->orWhere('title', $searchTerm);
            });
        }
        
        
    
        if ($daterange1 != '') {
            $dateRange = explode(' to ', $daterange1);
            $startDate = date('Y-m-d', strtotime($dateRange[0]));
            $endDate = date('Y-m-d', strtotime($dateRange[1]));
            $orders->whereBetween('writer_fd', [$startDate, $endDate]);
        }

        if ($daterange2 != '') {

       
            $dateRange = explode(' to ', $daterange2);
            $startDate1 = date('Y-m-d', strtotime($dateRange[0]));
            $endDate1 = date('Y-m-d', strtotime($dateRange[1]));
            $orders->whereBetween('writer_ud', [$startDate1, $endDate1]);
        }
       
      
        if ($status != '') {
            if ($status == 'Not Assign') {
                $orders->where(function($query) {
                    $query->whereNull('writer_status')
                          ->orWhere('writer_status', '');
                });
            } else {
                $orders->where('writer_status', $status);
            }
        }
    
      
    
       if ($dateStatus != '' || $fromDate != '' || $toDate != '') 
        {
            if ($fromDate != '' && $toDate != '' && $dateStatus != '') 
            {

                if($dateStatus == 'draft_date')
                {
                    $orders->whereBetween($dateStatus, [$fromDate, $toDate])->where('draftrequired' , 'y' );

                }
                else
                {
                    $orders->whereBetween($dateStatus, [$fromDate, $toDate]);
                }
            } 
            elseif($fromDate != '' && $toDate != '')
            {
                $orders->whereBetween('writer_deadline', [$fromDate, $toDate]);
            }
            elseif($fromDate != '')
            {
                $orders->where('writer_deadline', $fromDate);
            }

            elseif($dateStatus != '')
            {
                $orders->where('writer_deadline', Carbon::today());
            }
        }
        if ($WriterTL != '') {
            if ($WriterTL == 'Not Assigned') {
                $orders->where(function($query) {
                    $query->where('wid', '')
                          ->orWhereNull('wid');
                });
            } else {
                $orders->where('wid', $WriterTL);
            }
        }        

       
        if ($SubWriter != '') {
            // if ($SubWriter == 'Not Assigned') {
            //     // Retrieve all records from multipleswiter where user_id is empty or null
            //     $multipleWriters = multipleswiter::whereNull('user_id')->orWhere('user_id', '')->get();
                
            //     // Extract order IDs from the retrieved multipleWriters
            //     $orderIds = $multipleWriters->pluck('order_id')->toArray();
                
            //     // Exclude orders with the extracted order IDs
            //     $orders->whereNotIn('id', $orderIds);
            // }
                
            $multipleWriters = multipleswiter::where('user_id', $SubWriter)->get();
            
            $orderIds = $multipleWriters->pluck('order_id')->toArray();
            
            $orders->whereIn('id', $orderIds);
            
        }
        

       

        if($extra != '')
        {
            if($extra == 'tech')
            {
            $orders->where('tech', '1' );
            }
            elseif($extra == 'resit')
            {
            $orders->where('resit', 'on' );
            }
            elseif($extra == 'failedjob')
            {
            $orders->where('is_fail', '1' );
                
            }
            elseif($extra == '1')
            {
            $orders->where('services', 'First Class Work' );
                
            }
        }

        $id = auth()->user()->id;

    
        $orders = $orders->orderBy('writer_ud', 'desc')  ->where('admin_id', $id)->get();
            
        if ($orders->isEmpty()) {
            return response()->json(['message' => 'No data found']);
        }
    // Calculate total order count
    $totalOrderCount = $orders->count();

    // Calculate total word count
    // $totalWordCount = $orders->sum('pages');
    $totalWordCount = $orders->reduce(function ($carry, $order) {
        return $carry + (is_numeric($order->pages) ? $order->pages : 0);
    }, 0);
    // dd($totalOrderCount,$totalWordCount);
        $output = '';
        $index = 1;
    
        foreach ($orders as $order) {
            // Your existing code for creating the output string goes here
            $output .= '<tr>
                            <td>' .  $index++. '</td>
                            <td>
                                ' . $order->order_id . '
                                ' . ($order->is_fail == 1 ? '<span class="badge badge-light-danger fs-7 fw-bold">Fail Order</span>' : '') . '
                                ' . ($order->services == 'First Class Work' ? '<span class="badge badge-light-info fs-7 fw-bold">First Class Work</span>' : '') . '
                                ' . ($order->resit == 'on' ? '<span class="badge badge-light-danger fs-7 fw-bold">Resit</span>' : '') . '
                           
                                </td>  
                            
                               

                               
                                
                            <td>
                            ' . ($order->writer_fd != 0000-00-00 ?   \Carbon\Carbon::parse($order->writer_fd)->format('d M ')  : '') . '
                            <span class="badge badge-light-danger fs-7 fw-bold">'.$order->writer_fd_h.'</span>

                            </br>

                            ' . ($order->writer_ud != 0000-00-00 ?   \Carbon\Carbon::parse($order->writer_ud)->format('d M ')  : '') . '
                            <span class="badge badge-light-danger fs-7 fw-bold">'.$order->writer_ud_h.'</span>
                            
                            
                            </td>
                            
                            
                            <td>'.$order->title.'
                            ' . ($order->chapter != '' ? '<span class="badge badge-light-danger fs-7 fw-bold">'.$order->chapter.'</span>' : '') . '
                            ' . ($order->tech == '1' ? '<span class="badge badge-light-success fs-7 fw-bold">Technical Work</span>' : '') . '
                            </td>
                            <td>
                            '.($order->writer_status ==  'In Progress' || $order->writer_status ==  'In progress' ? '<span class="badge badge-light-info fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Completed' ? '<span class="badge badge-light-warning fs-7 fw-bold">'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Delivered' ? '<span class="badge badge-light-info fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Hold' ? '<span class="badge badge-light-danger fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Feedback' ? '<span class="badge badge-light-warning fs-7 fw-bold"  >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Feedback Delivered' ? '<span class="badge badge-success fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Draft Delivered' ? '<span class="badge badge-secondary fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Quality Accepted' ? '<span class="badge badge-light-info fs-7 fw-bold"  >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Quality Rejected' ? '<span class="badge badge-light-danger fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Draft Ready' ? '<span class="badge badge-light-primary fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Draft Feedback' ? '<span class="badge badge-success fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Attached to Email (Draft)' ? '<span class="badge badge-light-warning fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Complete file Ready' ? '<span class="badge badge-secondary fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Attached to Email (Complete file)' ? '<span class="badge badge-light-primary fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  '' || $order->writer_status ==  'Not Assigned' ? '<span class="badge badge-light-danger fs-7 fw-bold" >'."Not Assign" .'</span>' : '') .'
                            
                       </td>

                       <td>' .  $order->pages. '</td>';
                      
                       $output .= '<td>';

                       $subWriterNames = [];

                       foreach ($order->mulsubwriter as $writer) {
                            if ($writer !== null && $writer->user !== null) {
                                if ($writer->user->name !== null) {
                                    $subWriterNames[] = $writer->user->name;
                                }
                            }
                        }

                       
                       if (empty($subWriterNames) && $order->subwriter != null && $order->subwriter->name != null) {
                           $output .= $order->subwriter->name; // Display if no sub-writer names are found and $order->subwriter->name is not null
                       } else {
                           foreach ($subWriterNames as $name) {
                               $output .= $name . '<br>'; // Display sub-writer names
                           }
                       }
                       
                       $output .= ($order->writer != '' ? '<span class="badge badge-light-info fs-7 fw-bold">('.$order->writer->name.')</span>' : '');
                       
                        
                        

                        $output .= '</td>';

                        $output .= '<td>';
                        // Formatting writer deadline
                        $output .= ($order->writer_deadline != '0000-00-00') ? \Carbon\Carbon::parse($order->writer_deadline)->format('d M Y') : '';

                        // If draft required, include date and time within a span
                        if ($order->draftrequired == 'Y') {
                            $output .= '<span class="badge badge-light-info fs-7 fw-bold">(';
                            if ($order->draft_date && $order->draft_date != '0000-00-00') {
                                $output .= \Carbon\Carbon::parse($order->draft_date)->format('d M Y'). ' ';
                            }
                            if ($order->draft_time && $order->draft_time != '00:00:00') {
                                $output .= \Carbon\Carbon::parse($order->draft_time)->format('g:i A');
                            }
                            $output .= ')</span>';
                        }
                        $output .= '</td>
                       <td class="text-center">
                       <a href="/edit.'.$order->id.'"
                       target="_blank"
                           class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"">
                               <span class=" svg-icon svg-icon-3">
                           <li class="fa fa-edit"></li>
                           </span>
                       </a>
                    </td>
                        </tr>';
        }
    
        // return response()->json($output);
        return response()->json([
            'output' => $output,
            'totalWordCount' => $totalWordCount,
            'totalOrderCount' => $totalOrderCount,
        ]);
        }
    


        public function search_writerTl( Request $request)
        {
            $searchTerm = $request->input('search');
            $status = $request->input('status');
            $dateStatus = $request->input('date_status');
            $fromDate = $request->input('from_date');
            $toDate = $request->input('to_date');
            $WriterTL =$request->input('WriterTL');
            $SubWriter =$request->input('SubWriter');
            $extra =$request->input('extra');
            $startDateud =$request->input('startDate');
            $endDateud =$request->input('endDate');
            $startDatefd =$request->input('startDate1');
            $endDatefd =$request->input('endDate1');
            $daterange1 =$request->input('daterange');
            $daterange2 =$request->input('daterange1');


    
        $orders = Order::query();
    
        if ($searchTerm != '') {
            $orders->where(function($query) use ($searchTerm) {
                $query->where('order_id', 'like', '%' . $searchTerm . '%')
                      ->orWhere('title', $searchTerm);
            });
        }
        
        
    
      
        if ($daterange1 != '') {
            $dateRange = explode(' to ', $daterange1);
            $startDate = date('Y-m-d', strtotime($dateRange[0]));
            $endDate = date('Y-m-d', strtotime($dateRange[1]));
            $orders->whereBetween('writer_fd', [$startDate, $endDate]);
        }

        if ($daterange2 != '') {

       
            $dateRange = explode(' to ', $daterange2);
            $startDate1 = date('Y-m-d', strtotime($dateRange[0]));
            $endDate1 = date('Y-m-d', strtotime($dateRange[1]));
            $orders->whereBetween('writer_ud', [$startDate1, $endDate1]);
        }
       
      
        if ($status != '') {
            if ($status == 'Not Assign') {
                $orders->where('writer_status',  '' );
            }
            else
            {

                $orders->where('writer_status',  $status );
            }
        }
    
      
    
       if($fromDate != '')
       {

            if($fromDate != '' && $toDate != '')
            {
                $orders->whereBetween('writer_deadline', [$fromDate, $toDate ]);
            }

            else{
                $orders->where('writer_deadline', $fromDate);
            }

           
        }
        

       
        
           
        

        if($WriterTL != '')
        {
            $orders->where('wid', $WriterTL);

        }

       if ($SubWriter != '') {
                  
                $multipleWriters = multipleswiter::where('user_id', $SubWriter)->get();
                
                $orderIds = $multipleWriters->pluck('order_id')->toArray();
                
                $orders->whereIn('id', $orderIds);
                
            }

       

        if($extra != '')
        {
            if($extra == 'tech')
            {
            $orders->where('tech', '1' );
            }
            elseif($extra == 'resit')
            {
            $orders->where('resit', 'on' );
            }
            elseif($extra == 'failedjob')
            {
            $orders->where('is_fail', '1' );
                
            }
            elseif($extra == '1')
            {
            $orders->where('services', 'First Class Work' );
                
            }
        }

        $id = auth()->user()->id;

    if(auth()->user()->role_id == 6)
    {
        $orders = $orders->orderBy('id', 'desc')  ->where('wid', $id)->get();
    }
    elseif(auth()->user()->role_id == 7)
    {
        $orders = $orders->orderBy('id', 'desc')  ->where('swid', $id)->get();

    }
            
        if ($orders->isEmpty()) {
            return response()->json(['message' =>  'gv']);
        }
    
        $output = '';
        $index = 1;
    
        foreach ($orders as $order) {
            // Your existing code for creating the output string goes here
            $output .= '<tr>
                            <td>' .  $index++. '</td>
                            <td>
                                ' . $order->order_id . '
                                ' . ($order->is_fail == 1 ? '<span class="badge badge-light-danger fs-7 fw-bold">Fail Order</span>' : '') . '
                                ' . ($order->services == 'First Class Work' ? '<span class="badge badge-light-info fs-7 fw-bold">First Class Work</span>' : '') . '
                                ' . ($order->resit == 'on' ? '<span class="badge badge-light-danger fs-7 fw-bold">Resit</span>' : '') . '
                           
                                </td>  
                            
                               

                               
                                
                            <td>
                            ' . ($order->writer_fd != 0000-00-00 ?   \Carbon\Carbon::parse($order->writer_fd)->format('d M ')  : '') . '
                            <span class="badge badge-light-danger fs-7 fw-bold">'.$order->writer_fd_h.'</span>

                            </br>

                            ' . ($order->writer_ud != 0000-00-00 ?   \Carbon\Carbon::parse($order->writer_ud)->format('d M ')  : '') . '
                            <span class="badge badge-light-danger fs-7 fw-bold">'.$order->writer_ud_h.'</span>
                            
                            
                            </td>
                            
                            
                            <td>'.$order->title.'
                            ' . ($order->chapter != '' ? '<span class="badge badge-light-danger fs-7 fw-bold">'.$order->chapter.'</span>' : '') . '
                            ' . ($order->tech == '1' ? '<span class="badge badge-light-success fs-7 fw-bold">Technical Work</span>' : '') . '
                            </td>
                            <td>
                            '.($order->writer_status ==  'In Progress'  ? '<span class="badge badge-light-info fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Completed' ? '<span class="badge badge-light-warning fs-7 fw-bold">'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Delivered' ? '<span class="badge badge-light-success fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Hold' ? '<span class="badge badge-light-danger fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Feedback' ? '<span class="badge badge-light-warning fs-7 fw-bold"  >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Feedback Delivered' ? '<span class="badge badge-light-success fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Draft Delivered' ? '<span class="badge badge-light-success fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Quality Accepted' ? '<span class="badge badge-light-info fs-7 fw-bold"  >'.$order->writer_status .'</span>' : '') .'
                            '.($order->writer_status ==  'Quality Rejected' ? '<span class="badge badge-light-danger fs-7 fw-bold" >'.$order->writer_status .'</span>' : '') .'
                            
                       </td>

                       <td>' .  $order->pages. '</td>';
                       
                       if(auth()->user()->role_id !=  '7') {
                            $output .= '<td>';

                            $subWriterNames = [];

                            foreach ($order->mulsubwriter as $writer) {
                                if ($writer != '') {
                                    $subWriterNames[] = $writer->user->name;
                                }
                            }

                            if (empty($subWriterNames) && $order->subwriter != null && $order->subwriter->name != null) {
                                $output .= $order->subwriter->name; // Display if no sub-writer names are found and $order->subwriter->name is not null
                            } else {
                                foreach ($subWriterNames as $name) {
                                    $output .= $name . '<br>'; // Display sub-writer names
                                }
                            }

                            $output .= ($order->writer != '' ? '<span class="badge badge-light-info fs-7 fw-bold">('.$order->writer->name.')</span>' : '');

                            $output .= '</td>';
                        }


                        $output .= '<td class="text-center">
                       <a href="/edit.'.$order->id.'"
                       target="_blank"
                           class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"">
                               <span class=" svg-icon svg-icon-3">
                           <li class="fa fa-edit"></li>
                           </span>
                       </a>
                    </td>
                        </tr>';
        }
    
        return response()->json($output);
        }
 
        public function swapUserData(Request $request)
        {
            $userId = $request->input('user_id');
        
            // Retrieve the user by ID
            $user = User::find($userId);
        
            if ($user) {
                // Swap the values
                $tempCountryCode = $user->countrycode;
                $tempMobileNo = $user->mobile_no;
        
                $user->countrycode = $user->countrycode2;
                $user->mobile_no = $user->mobile_no2;
        
                $user->countrycode2 = $tempCountryCode;
                $user->mobile_no2 = $tempMobileNo;
        
                // Save the changes
                $user->save();
            
        
                // Include the swapped data in the response
                $responseData = [
                    'success' => true,
                    'message' => 'Data swapped successfully',
                    'mobile1' => [
                        'country_code' => $user->countrycode,
                        'mobile_number' => $user->mobile_no,
                    ],
                    'mobile2' => [
                        'country_code' => $user->countrycode2,
                        'mobile_number' => $user->mobile_no2,
                    ],
                ];
        
                return response()->json($responseData, 200);
            } else {
                return response()->json(['success' => false, 'message' => 'User not found'], 404);
            }
        }
        
        public function call($id)
        {
            $user = User::find($id);
            return view('api.clic2call', compact('user'));
        }

        public function myOrder ()
        {
            $data['title'] = 'Assignment Writing Help in London,UK | Assignment Writing Service in UK';
            $data['description'] = '';
            $data['keyword'] = '';
            
            $user = Auth::user();
    
            $orders = Order::where('uid', $user->id)->orderBy('created_at', 'desc')->get();
            
            $leads = Leads::where('emp_id', $user->id)->get();
            return view('frontend.my-orders',compact('data', 'orders', 'leads'));
        }
        
               public function qc(Request $request)
        {
            $data['executive'] = User::where('role_id', 3)->get();
            $data['writer'] = User::where('role_id', 6)->where('flag', 0)->get();
            $data['SubWriter'] = User::where('role_id', 7)->where('flag', 0)->get();
            
            $ordersQuery = Order::with('writer','mulsubwriter', 'subwriter')
                ->whereNotNull('admin_id')
                ->where('admin_id', '!=', 0)
                ->orderBy('created_at', 'desc');

            $searchTerm = $request->input('search');
            $status = $request->input('status');
            $writer = $request->input('writer');
            $SubWriter = $request->input('SubWriter');
            $dateStatus = $request->input('date_status');
            $fromDate = $request->input('fromDate');
            $toDate = $request->input('toDate');
            $admin = $request->input('admin');
            $qc_standard = $request->input('qc_standard');
            $secondaryMobile = $request->input('secondary_mobile');
            $selectedDataTextBox = $request->input('selectedDataTextBox');
            $edited_on = $request->input('edited_on');
            $OldSubWriter = $request->input('OldSubWriter');

            if ($fromDate != '' && $toDate != '') {
                if ($edited_on == 'Order-date') {
                    $ordersQuery->whereBetween('writer_deadline', [$fromDate, $toDate]);
                } elseif ($edited_on == 'Qc-date') {
                    $ordersQuery->whereBetween('qc_date', [$fromDate, $toDate]);
                }
            } elseif ($fromDate != '') {
                if ($edited_on == 'Order-date') {
                    $ordersQuery->whereDate('writer_deadline', $fromDate);
                } elseif ($edited_on == 'Qc-date') {
                    $ordersQuery->whereDate('qc_date', $fromDate);
                }
            }

            if ($searchTerm != '') {
                $ordersQuery->where(function ($query) use ($searchTerm) {
                    $query->where('order_id', 'like', '%' . $searchTerm . '%')
                        ->orWhere('title', $searchTerm);
                });
            }

            // if ($status != '') {
            //     $ordersQuery->where('qc_status', $status);
            // }
            if ($status != '') {
                $ordersQuery->where(function($query) use ($status) {
                    if ($status == 'Not Assigned') {
                        $query->where('writer_status', '')->orWhereNull('writer_status')->orWhere('writer_status', 'Not Assigned');
                    } else {
                        $query->where('writer_status', $status);
                    }
                });
            }

            if ($writer != '') {
                $ordersQuery->where('wid', $writer);
            }
              if ($SubWriter != '') {
                  
                $multipleWriters = multipleswiter::where('user_id', $SubWriter)->get();
                
                $orderIds = $multipleWriters->pluck('order_id')->toArray();
                
                $ordersQuery->whereIn('id', $orderIds);
                
            }
            
             
            if ($OldSubWriter != '') {
                $ordersQuery->where('swid',$OldSubWriter);
            }
            
            if ($admin != '') {
                $ordersQuery->where('qc_admin', $admin);
            }

            if ($qc_standard != '') {
                $ordersQuery->where('qc_standard', $qc_standard);
            }

           
            if ($fromDate != '' || $toDate != '' || $searchTerm != '' || $status != '' || $writer != '' || $SubWriter != '' || $admin != '' || $qc_standard != '' || $OldSubWriter != '') {
                $orders = $ordersQuery->paginate(1000);
                $data['orders'] = $orders;
            }
            else
            {
                $orders = $ordersQuery->paginate(10);
                $data['orders'] = $orders;
            }


            return view('order.qc-sheet', compact('data'));
        }

        
        public function QcUpdate(Request $request , $id)
        {
            
            
            $validatedData = $request->validate([
                'qc_status' => 'required', 
                'qc_standard' => 'required',
                'comment' => 'required',
            ]);

            $order = Order::find($id);

            if (!$order) {
                return redirect()->back()->with('error', 'Order not found');
            }

            $order->writer_status = $validatedData['qc_status'];
            
            $order->qc_standard = $validatedData['qc_standard'];

            $order->qc_comment = $validatedData['comment'];

            $order->writer_deadline = $request->input('writer_date');

            $order->qc_date = Carbon::now('Asia/Kolkata');

            $order->save();

            return redirect()->back()->with('success', 'Order updated successfully');
        }
        
         public function followUp()
        {
            $data['orders'] = Order::with(['user', 'followUpComments'])->orderBy('writer_deadline', 'desc')->paginate(10);
            foreach ($data['orders'] as $order) {
                $order->allCommentsByUid = FollowUpComment::where('uid', $order->uid)->get();
            }
            return view('follow.follow' , compact('data'));



        }

         public function followUpUpdate(Request $request, $id)
        {
            
            $order = Order::find($id);
        
            if (!$order) {
                return redirect()->back()->with('danger', 'Order Not Found');
            }
        
            
            $uid = $order->uid;
        
            
            Order::where('uid', $uid)->each(function ($order) use ($request) {
                $order->follow_status = $request->input('follow_up_status');
                $order->follow_comment = $request->input('comment');
                $order->followupdate = now();
                $order->follow_up_user = auth()->user()->name;
                $order->save();
        
            });
            FollowUpComment::create([
                'order_id' => $order->id,
                'uid' => $order->uid,
                'comment' => $request->input('comment'),
                'commented_by' => auth()->user()->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            return redirect()->back()->with('success', 'Orders Updated');
        }
        
         public function orderWD (Request $request)
        {
            $ordersQuery = Order::with('user', 'payment', 'feedback')->where('uid', '!=', 0);
            $tlId = $request->input('tlId');
            if ($tlId != '') {
                 // Fetch orders for the selected TL
                $orders = Order::where('wid', $tlId)->get();

                return response()->json(['orders' => $orders]);
            }
           
      
    
            $data = [
                'Team' => Writer::all(),
                'Status' => Status::all(),
                'formatting' => Formatting::all(),
                'service' => Services::all(),
                'Writting' => Writting::all(),
                'paper' => Paper::all(),
                'user' => User::all(),
                'college' => College::all(),
                'admin' => User::where('role_id', 8)->where('flag', 0)->get(),
                'writerTL' => User::where('role_id', 6)->where('flag', 0)->get(),
                'SubWriter' => User::where('role_id', 7)->where('flag', 0)->get(),
            ];
        
            $data['orders'] = $ordersQuery->orderByDesc('id')->paginate(10);
            return view('order.writer-WD', compact('data'));
        }
        
        public function orderWD2(Request $request)
        {
            $tlId = $request->input('tlId');
            $swId = $request->input('swId');
            $fromDate = $request->input('from_date');
            $toDate = $request->input('to_date');
            
            if (!$tlId && !$swId && !$fromDate && !$toDate) {
                return response()->json(['message' => 'No parameters provided.'], 400);
            }
            $query = Order::query()->with('writer','mulsubwriter')->where('admin_id', '!=', 0);
            if ($tlId === "Not Assigned") {
                $query->where(function ($query) {
                    $query->whereNull('wid')
                        ->orWhere('wid', '');
                });
            } elseif ($tlId) {
                $query->where('wid', $tlId);
            }
            if ($swId) {
                $multipleWriters = multipleswiter::where('user_id', $swId)->get();
                $orderIds = $multipleWriters->pluck('order_id')->toArray();
                $query->whereIn('id', $orderIds);      
            }
        
            if ($fromDate && $toDate) {
                $query->where(function ($query) use ($fromDate, $toDate) {
                    $query->whereBetween('writer_fd', [$fromDate, $toDate])
                        ->orWhereBetween('writer_ud', [$fromDate, $toDate]);
                });
            }
        
            $orders = $query->orderByDesc('created_at')->get();           
            $expandedOrders = [];
            $totalWordCount = 0;
            $totalWordCount = $orders->reduce(function ($carry, $order) {
                return $carry + (is_numeric($order->pages) ? $order->pages : 0);
            }, 0); // Initialize total word count
            $totalOrders = $orders->count(); // Count total number of orders
        
            foreach ($orders as $order) {
                $startDate = $order->writer_fd && $order->writer_fd !== '0000-00-00' ? Carbon::parse($order->writer_fd) : null;
                $endDate = $order->writer_ud && $order->writer_ud !== '0000-00-00' ? Carbon::parse($order->writer_ud) : null;
                $subWriterNames = [];
                foreach ($order->mulsubwriter as $mulsubwriter) {
                    if ($mulsubwriter->user !== null) {
                        $subWriterNames[] = $mulsubwriter->user->name;
                    }
                }
                if ($order->writer !== null) {
                    $writerName2 = $order->writer->name;
                } else {
                    $writerName2 = "";
                }
                if (!$startDate || !$endDate) {
                    $expandedOrder = [
                        'order_id' => $order->order_id,
                        'date' => 'Not Mentioned',
                        'title' => $order->title ? $order->title : 'Not Mentioned', // Check if title is null or empty
                        'pages' => $order->pages ? $order->pages : 'Not Mentioned', // Check if pages is null or empty
                        'writer_name' => $writerName2,
                        'sub_writer_names' => implode(', ', $subWriterNames), 
                    ];
        
                    $expandedOrders[] = $expandedOrder;
                    continue; 
                }
                $title = $order->title ? $order->title : 'Not Mentioned';
                $pages = $order->pages ? $order->pages : 'Not Mentioned';
                
                for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
                    $expandedOrder = [
                        'order_id' => $order->order_id,
                        'date' => $date->toDateString(),
                        'title' => $title, // Use the title value set earlier
                        'pages' => $pages, // Use the pages value set earlier
                        'writer_name' => $writerName2,
                        'sub_writer_names' => implode(', ', $subWriterNames), 
                        
                    ];
                    $expandedOrders[] = $expandedOrder;
                }
            }
            // Sort expanded orders by date in ascending order
            usort($expandedOrders, function($a, $b) {
                return strtotime($a['date']) - strtotime($b['date']);
            });
            if ($fromDate && $toDate) {
                $filteredOrders = [];
                foreach ($expandedOrders as $expandedOrder) {
                    if ($expandedOrder['date'] >= $fromDate && $expandedOrder['date'] <= $toDate) {
                        $filteredOrders[] = $expandedOrder;
                    }
                }
                return response()->json([
                    'orders' => $filteredOrders,
                    'total_word_count' => $totalWordCount, // Include total word count in the response
                    'total_orders' => $totalOrders,
                ]);
            }
            return response()->json([
                'orders' => $expandedOrders,
                'total_word_count' => $totalWordCount, // Include total word count in the response
                'total_orders' => $totalOrders,
            ]);
        }

public function updateDate(Request $request)
{
    // Check if a date has been selected
    if ($request->input('selectedDate') != '') {
        $orderId = $request->input('orderId');
        $date = $request->input('selectedDate');

        // Find the order by its ID, or fail if not found
        $order = Order::findOrFail($orderId);

        // Check if the selected date is on or after the order date
        if ($order->order_date <= $date) {
            // Update the delivery date and save the order
            $order->delivery_date = $date;
            $order->save();

            // Return a success response
            return response()->json(['message' => 'Date updated successfully', 'order' => $order]);
        } else {
            // Return an error response if the delivery date is before the order date
            return response()->json(['Error' => 'Delivery date cannot be before the order date.']);           
        }
    } else {
        // Return an error response if no date is selected
        return response()->json(['Error' => 'Date not selected']);
    }
}
public function updateStatus(Request $request)
    {
        if(  $request->input('status') != '')
        {
            $orderId = $request->input('orderId');
            $index = $request->input('status');

            $id = $index + 1 ;
            // dd($id);

            $statusName = Status::find( $id);
            try {
                $order = Order::findOrFail($orderId);
            } catch (ModelNotFoundException $e) {
                return response()->json(['error' => 'Order not found']);
            }
    
            try {
                $userDetails = User::findOrFail($order->uid);
            } catch (ModelNotFoundException $e) {
                return response()->json(['error' => 'User details not found']);
            }
            
            if( $statusName->status == 'Completed')
            {      
                $order->projectstatus = $statusName->status;
                $orderData = [
                    'name' => $userDetails->name,
                    'email' => $userDetails->email,
                    'title' => $order->title,
                    'order_code' => $order->order_id,
                    'date'     => $order->delivery_date,
                    'due'     => (int)$order->amount - (int)$order->received_amount,
                ];
                // dd($orderData);
                Mail::to($orderData['email']) ->send(new OrderComplete($orderData));
               
            }elseif( $statusName->status == 'Delivered' && (int)$order->amount - (int)$order->received_amount !== 0)
            {                
                return response()->json(['warning' => 'Order cannot be marked as Delivered if there is any due payment remaining.']);                                                
            }
            $order->projectstatus = $statusName->status;
            $order->status_date = Carbon::now('Asia/Kolkata');
            $order->status_by   = auth()->user()->name;
            
            $order->save();
            // Update or create a record in the ProjectStatusCount table
            $statusCount = ProjectStatusCount::where('order_Id', $request->input('orderId'))
                ->where('status', $statusName->status)
                ->first();
            $lastStatusCount = ProjectStatusCount::where('order_Id', $request->input('orderId'))
                ->orderBy('updated_at', 'desc')
                ->first();
            // dd($lastStatusCount->status, $req->input('status'), $statusCount);
            if ($statusCount && $lastStatusCount->status != $statusName->status) {
                $statusCount->increment('count');
                $statusCount->save(); // Save the updated record
            } elseif (!$statusCount){
                $statusCount = ProjectStatusCount::create([
                'order_Id' => $order->id,
                'status' => $statusName->status,
                'count' => 1
                ]);
            }
            // Now $statusCount contains the saved record
            return response()->json(['message' => 'Status updated successfully', 'order' => $order]);

        }
        else
        {
            return response()->json(['message' => 'Status Not Selected']);

        }
        

        // Return response
    }

public function statusDetails(Request $request)
{
    $from_date = $request->input('from_date');
    $to_date = $request->input('to_date');
    
    $query = Order::with('user')->where('uid', '!=', 0)
    ->where('status_date', '!=', '0000-00-00 00:00:00');

    if ($from_date && $to_date) {
        $query->whereDate('status_date', '>=', $from_date)->whereDate('status_date', '<=', $to_date);
    }

    if ($from_date && $to_date) {
    $data['order'] = $query->get();
    }
    else
    {
        $data['order'] = $query->paginate(10);

    }

    return view('order.order-status-details', compact('data'));
}

  public function writerAvailable(Request $request)
    {
        $today = $request->input('available_date', Carbon::today()->format('Y-m-d'));
    
        $users = User::with(['writerWork' => function ($query) {
                $query->select(['id', 'user_id', 'order_id']);
            }, 'writerWork.order' => function ($query) {
                $query->select(['id', 'order_id', 'writer_fd', 'writer_fd_h', 'writer_ud', 'writer_ud_h']);
            }])
            ->where('role_id', 7)
            ->whereDoesntHave('writerWork.order', function ($query) use ($today) {
                $query->whereDate('writer_fd', '<=', $today)
                    ->whereDate('writer_ud', '>=', $today);
            })
            ->where('flag', 0)
            ->get(['id', 'name', 'email', 'mobile_no']);
    
        $usersWithTime = User::whereHas('writerWork.order', function ($query) use ($today) {
                $query->whereDate('writer_ud', '=', $today)->where('writer_ud_h', '!=', '');
            })
            ->with(['writerWork' => function ($query) use ($today) {
                $query->whereHas('order', function ($query) use ($today) {
                    $query->whereDate('writer_ud', '=', $today)->where('writer_ud_h', '!=', '');
                });
            }])
            ->where('role_id', 7)
            ->where('flag', 0)
            ->get(['id', 'name', 'email', 'mobile_no'])
           ;
           
           
    
        return view('order.writerAvailable', compact('users', 'usersWithTime' , 'today'));
    }

}

    
    

    

