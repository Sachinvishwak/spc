<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Asset;
use App\Models\Ticket;
use DateTime;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://api.weatherapi.com/v1/forecast.json?key=d04f590835284944af371731202110&q=Singapore");
        // SSL important
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        $output = json_decode($output);
        $current_icon = $output->current->condition->icon;
        $forecastdayArray = $output->forecast->forecastday[0]->hour;
        $g1 = new DateTime($output->location->localtime);
        $solts = array();
        foreach($forecastdayArray as $value)
        {
            $g2 = new DateTime($value->time);
            if ($g2 > $g1) {
                array_push($solts,$value);
            } 
        }

        $current_tmp = $output->current->temp_c;

        return view('admin.dashboard')->with('current_tmp',$current_tmp)->with('current_icon',$current_icon)->with('solts',$solts);
    }

    public function assets()
    {
        $tlsearch = array();
        if(!isset($_GET['filter']))
        {
            $assets = Asset::orderBy('id', 'DESC')->get();
        }else{
            $assets = Asset::select('*');
            if($_GET['text_value'] != "")
            {
                $text_value = $_GET['text_value'];
                $assets = $assets->where('brand_name','like', '%' . $text_value . '%');
                $assets = $assets->orWhere('serial_no','like', '%' . $text_value . '%');
                $tlsearch['text_value'] = $text_value;
            }
            if($_GET['search_location'] != "")
            {
                $search_location = $_GET['search_location'];
                $assets = $assets->where('location',$_GET['search_location']);
                $tlsearch['search_location'] = $search_location;
            }
            if($_GET['from'] != "")
            {
                $from = date('Y-m-d',strtotime($_GET['from']))." 00:00:00";
                $assets = $assets->where('created_at','>',$from);
                $tlsearch['from'] = $_GET['from'];
            }
            if($_GET['to'] != "")
            {
                $to = date('Y-m-d',strtotime($_GET['to']))." 00:00:00";
                $assets = $assets->where('created_at','<'.$to);
                $tlsearch['to'] = $_GET['to'];
            }
            
            $assets = $assets->orderBy('id', 'DESC')->get();
        }
        
        return view('admin.assets')->with('assets',$assets)->with('tlsearch',$tlsearch);
    }

    public function createAsset()
    {
        return view('admin.createAsset');
    }

    public function assetDelete($id)
    {
        Asset::where('id',$id)->delete();
        return redirect()->route('admin.assets');
    }
    
    public function assetEdit($id)
    {
        $asset = Asset::where('id',$id)->first();
        return view('admin.editAsset')->with('asset',$asset);
    }
    
    public function assetView($id)
    {
        $asset = Asset::where('id',$id)->first();
        return view('admin.viewAsset')->with('asset',$asset);
    }

    public function updateAsset(Request $request)
    {
        $inputs = $request->all();
        Asset::where('id',$inputs['id'])->update(
            array(
                'asset_id' => $inputs['asset_id'],
                'brand_name' => $inputs['brand_name'],
                'serial_no' => $inputs['serial_no'],
                'template_id' => $inputs['template_id'],
                'location' => $inputs['location'],
                'updated_at' => date('Y-m-d H:i:s')
            )
        );
        return redirect()->route('admin.assets');
    }

    public function assetFormSubmit(Request $request)
    {
        $inputs = $request->all();
        $Asset = new Asset;
        $Asset->asset_id = $inputs['asset_id'];
        $Asset->brand_name = $inputs['brand_name'];
        $Asset->serial_no = $inputs['serial_no'];
        $Asset->template_id = $inputs['template_id'];
        $Asset->location = $inputs['location'];
        $Asset->save();
        return redirect()->route('admin.assets');
    }

    public function production()
    {
        return view('admin.production');
    }

    public function insight()
    {
        return view('admin.insight');
    }



    public function Insights_Equipment()
    {
        return view('admin.Insights_Equipment');
    }

    public function Insight_propeller_live_data_chart()
    {
        return view('admin.Insight_propeller_live_data_chart');
    }


    public function Insight_Predictive_Analysis()
    {
        return view('admin.Insight_Predictive_Analysis');
    }

    
    public function Insights_Propellor_Summary()
    {
        return view('admin.Insights_Propellor_Summary');
    }










    public function maintenence()
    {
        $open = Ticket::where('status',0)->count();
        $inprogress = Ticket::where('status',1)->count();
        $completed = Ticket::where('status',2)->count();

        $tickets = Ticket::orderBy('id', 'DESC')->get();
        return view('admin.maintenence')->with('tickets',$tickets)->with('open',$open)->with('inprogress',$inprogress)->with('completed',$completed);
    }

    //ticketFormSubmit
    public function ticketFormSubmit(Request $request)
    {
        $inputs = $request->all();
        $Ticket = new Ticket;
        $Ticket->ticket_id = $inputs['ticket_id'];
        $Ticket->issued_by = $inputs['issued_by'];
        $Ticket->location = $inputs['location'];
        $Ticket->severity = $inputs['severity'];
        $Ticket->summary = $inputs['summary'];
        $Ticket->save();
        return redirect()->route('admin.maintenence');
    } 

    public function ticketEdit($id)
    {
        $ticket = Ticket::where('id',$id)->first();
        return view('admin.editTicket')->with('ticket',$ticket);
    }

    public function updateTicket(Request $request)
    {
        $inputs = $request->all();
        Ticket::where('id',$inputs['id'])->update(
            array(
                'ticket_id' => $inputs['ticket_id'],
                'issued_by' => $inputs['issued_by'],
                'severity' => $inputs['severity'],
                'summary' => $inputs['summary'],
                'location' => $inputs['location'],
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $inputs['status']
            )
        );
        return redirect()->route('admin.maintenence');
    }
    

    public function ticketDelete($id)
    {
        Ticket::where('id',$id)->delete();
        return redirect()->route('admin.maintenence');
    }

    public function ticketView($id)
    {
        $ticket = Ticket::where('id',$id)->first();
        return view('admin.viewTicket')->with('ticket',$ticket);
    }

    public function report()
    {
        return view('admin.report');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate the data
        $this->validate($request, [
          'name'          => 'required',
          'email'         => 'required',
          'password'      => 'required'

        ]);

        // store in the database
        $admins = new Admin;
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password=bcrypt($request->password);

        $admins->save();


        return redirect()->route('admin.auth.login');

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
