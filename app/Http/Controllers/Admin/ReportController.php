<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletUsageInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PDF;

class ReportController extends Controller
{
    private $url = 'admin.report';
    public function index()
    {
        if(!request('pdf'))
            return view($this->url);

        switch (request('pdf')) {
            case '7':
                $title='7 days'; break;
            case '30':
                $title='30 days'; break;
            case '6':
                $title='6 months'; break;
            case '12':
                $title='1 year'; break;
            case '1':
                $title='All'; break;
        }
        $data = '<center><h1>Report for '.$title.' sales</h1><br>';
        $pdf = PDF::loadHTML($this->getRecords( request('pdf'),$data ));
        return $pdf->stream(request('pdf').' Reports.pdf');
    }

    public function show($id)
    {
        $range = request('selectRange');
        return $this->getRecords($range,$data='');
    }

    /**
     * Ajax call for display records
     */
    public function getRecords($range,$data)
    {
        if(($range%6)!=0){
            if($range==1)
                $sales = ToiletUsageInfo::where('status',1)->get();
            else
                $sales = ToiletUsageInfo::where('status',1)->where('created_at','>=',Carbon::now()->subdays($range))->get();
        }
        else{
            $sales = ToiletUsageInfo::where('status',1)->where("created_at",">=", Carbon::now()->subMonths($range))->get();
        }
        $total=0;
        foreach($sales as $sale) {
            $total+=$sale->toilet['price'];
        }
        
        $data.='<table class="table table-hover">
                <thead>
                <tr class="thead-light">
                    <th>Id</th>
                    <th>Transact Id</th>
                    <th>Owner email</th>
                    <th>User email</th>
                    <th>Toilet id</th>
                    <th title="Total revenue is $'.$total.'">
                        Paid | <b class="text-success">$'.$total.'</b>
                    </th>
                    <th>Used on</th>
                </tr>
                </thead>
                <tbody>';
        if( count($sales) == 0 )
            $data.='<tr><td colspan="7"><center><h2>No Reports found</h2><hr></center></td></tr>';
        else{
            foreach($sales as $sale) {
                $data.='<tr>
                    <th scope="row">'.$sale->id.'</th>
                    <td>'.$sale->transaction_id.'</td>
                    <td title="id-'.$sale->owner['id'].'">
                        '.$sale->owner['email'].'
                    </td>
                    <td title="id-'.$sale->user['id'].'">
                        '.$sale->user['email'].'
                    </td>
                    <td title="'.$sale->toilet['toilet_name'].'">
                        '.$sale->toilet_id.'
                    </td>
                    <td><b>$'.$sale->toilet['price'].'</b></td>
                    <td>'.$sale->created_at->format('d/m/Y').' at '.$sale->created_at->format('g:i A').'</td>
                </tr>';
            }
        }
        $data.='</tbody>
            </table>';

        return $data;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
