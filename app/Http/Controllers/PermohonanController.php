<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permohonan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $uploadedFile = $request->file('file');
        
        $fileName = $request->name.'.'.$request->file->getClientOriginalExtension();
     
        $request->file->move(public_path('uploaded_files'), $fileName);

        $permohonan = Permohonan::create([
            'name' => $request->name,
            'icNo' => $request->icNo,
            'phoneNo' => $request->phoneNo,
            'schoolName' => $request->schoolName,
            'examType' => $request->examType,
            'subject1' => $request->subject1,
            'grade1' => $request->grade1,
            'subject2' => $request->subject2,
            'grade2' => $request->grade2,
            'subject3' => $request->subject3,
            'grade3' => $request->grade3,
            'subject4' => $request->subject4,
            'grade4' => $request->grade4,
            'subject5' => $request->subject5,
            'grade5' => $request->grade5,
            'subject6' => $request->subject6,
            'grade6' => $request->grade6,
            'subject7' => $request->subject7,
            'grade7' => $request->grade7,
            'subject8' => $request->subject8,
            'grade8' => $request->grade8,
            'subject9' => $request->subject9,
            'grade9' => $request->grade9,
            'subject10' => $request->subject10,
            'grade10' => $request->grade10,
            'subject11' => $request->subject11,
            'grade11' => $request->grade11,
            'subject12' => $request->subject12,
            'grade12' => $request->grade12,
            'subject13' => $request->subject13,
            'grade13' => $request->grade13,
            'status' => $request->status,
            'dikemaskiniOleh' => $request->dikemaskiniOleh,
            'file' => $fileName,
            'dateSubmit' => $request->dateSubmit,
        ]);

        return back()->with('success', 'text');
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
        $permohonan = Permohonan::findOrFail($id);

        return view('edit', [
            'permohonan' => $permohonan
        ]);
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
        $permohonan = Permohonan::findOrFail($id);

        $permohonan->name = $request->name;
        $permohonan->icNo = $request->icNo;
        $permohonan->phoneNo = $request->phoneNo;
        $permohonan->schoolName = $request->schoolName;
        $permohonan->examType = $request->examType;
        $permohonan->subject1 = $request->subject1;
        $permohonan->grade1 = $request->grade1;
        $permohonan->subject2 = $request->subject2;
        $permohonan->grade2 = $request->grade2;
        $permohonan->subject3 = $request->subject3;
        $permohonan->grade3 = $request->grade3;
        $permohonan->subject4 = $request->subject4;
        $permohonan->grade4 = $request->grade4;
        $permohonan->subject5 = $request->subject5;
        $permohonan->grade5 = $request->grade5;
        $permohonan->subject6 = $request->subject6;
        $permohonan->grade6 = $request->grade6;
        $permohonan->subject7 = $request->subject7;
        $permohonan->grade7 = $request->grade7;
        $permohonan->subject8 = $request->subject8;
        $permohonan->grade8 = $request->grade8;
        $permohonan->subject9 = $request->subject9;
        $permohonan->grade9 = $request->grade9;
        $permohonan->subject10 = $request->subject10;
        $permohonan->grade10 = $request->grade10;
        $permohonan->subject11 = $request->subject11;
        $permohonan->grade11 = $request->grade11;
        $permohonan->subject12 = $request->subject12;
        $permohonan->grade12 = $request->grade12;
        $permohonan->subject13 = $request->subject13;
        $permohonan->grade13 = $request->grade13;
        $permohonan->status = $request->status;
        $permohonan->dikemaskiniOleh = $request->dikemaskiniOleh;
        $permohonan->dateSubmit = $request->dateSubmit;

        $permohonan->save();

        return back()->with('success', 'text');
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
