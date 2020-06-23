<?php

namespace App\Http\Controllers;

use App\Tution_fee;
use Illuminate\Http\Request;

class TutionFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tution_fee()
    {
   $tutionFees=Tution_fee::all();
        return view('school.pages.tution_fee')->with('tutionFees',$tutionFees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
		return view('school.pages.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
		  
        $tutionFee=new Tution_fee;
        
        $tutionFee->id=$request->id;
        $tutionFee->sn=$request->sn;
        $tutionFee->date=$request->date;
        $tutionFee->stdName=$request->stdName;
        $tutionFee->section=$request->section;
        $tutionFee->receiptNo=$request->receiptNo;
        $tutionFee->roll=$request->roll;
        $tutionFee->months=$request->months;
        $tutionFee->re_admission=$request->re_admission;
        $tutionFee->guide=$request->guide;
        $tutionFee->red_crecent=$request->red_crecent;
        $tutionFee->current=$request->current;
        $tutionFee->dues=$request->dues;
        $tutionFee->advance=$request->advance;
        $tutionFee->exam_fee=$request->exam_fee;
        $tutionFee->school=$request->school;
        $tutionFee->ccc=$request->ccc;
        $tutionFee->others=$request->others;
        $tutionFee->admit_card=$request->admit_card;
        $tutionFee->syllebus=$request->syllebus;
        $tutionFee->total=$request->total;
        $tutionFee->save();
		  return redirect()->route('tution_fee');
		  //insert data into student table
	  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tution_fee  $tution_fee
     * @return \Illuminate\Http\Response
     */
    public function show(Tution_fee $tution_fee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tution_fee  $tution_fee
     * @return \Illuminate\Http\Response
     */
   
        public function edit($id)
        {
            $tutionFee = Tution_fee :: find($id);
            
            
                return view('school.pages.edit')->with('tutionFee',$tutionFee);
        }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tution_fee  $tution_fee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $tutionFee =Tution_fee::find($id);
		
        $tutionFee->id=$request->id;
             $tutionFee->sn=$request->sn;
             $tutionFee->date=$request->date;
             $tutionFee->stdName=$request->stdName;
             $tutionFee->section=$request->section;
             $tutionFee->receiptNo=$request->receiptNo;
             $tutionFee->roll=$request->roll;
             $tutionFee->months=$request->months;
             $tutionFee->re_admission=$request->re_admission;
             $tutionFee->guide=$request->guide;
             $tutionFee->red_crecent=$request->red_crecent;
             $tutionFee->current=$request->current;
             $tutionFee->dues=$request->dues;
             $tutionFee->advance=$request->advance;
             $tutionFee->exam_fee=$request->exam_fee;
             $tutionFee->school=$request->school;
             $tutionFee->ccc=$request->ccc;
             $tutionFee->others=$request->others;
             $tutionFee->admit_card=$request->admit_card;
             $tutionFee->syllebus=$request->syllebus;
             $tutionFee->total=$request->total;
             $tutionFee->save();
		    return redirect()->route('tution_fee');
    }
	  
	
	
	
    public function delete($id)
    {
       
        $tutionFee=Tution_fee::find($id);
	
        $tutionFee->delete();
		    return redirect()->route('tution_fee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tution_fee  $tution_fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tution_fee $tution_fee)
    {
        //
    }
}
