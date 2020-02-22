<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Permit;
use App\Mail\ApplicantPermit;
use App\Mail\AdminRejected;
use App\Mail\ApplicationRejected;
use App\Mail\ApplicantApproval;
use Mail;
use Illuminate\Http\Request;
// use Symfony\Component\Console\Input\Input;

class PermitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function application()
    {
        $user = auth()->user();

        $permits = Permit::where('Initiator', auth()->user()->id)->get();
        return view('permit.application', compact('permits'));
    }

    public function create_application(Request $request)
    {
        $this->middleware('auth');

        $user = auth()->user();

        $permit = new Permit;
        $permit->FirstName = $request->FirstName;
        $permit->LastName = $request->LastName;
        $permit->DOB = $request->DOB;
        $permit->Sex = $request->Sex;
        $permit->Date = $request->Date;
        $permit->State = $request->State;
        $permit->Occupation = $request->Occupation;
        $permit->Address = $request->Address;
        $permit->Email = $request->Email;
        $permit->PermitType = $request->PermitType;
        $permit->TestScore = $request->TestScore;
        $permit->ApplicationType = $request->ApplicationType;
        $permit->Location = $request->Location;
        $permit->Stage1 = 1;
        $permit->Initiator = $user->id;
        if ($request->hasFile('Picture')) {
            $filenamewithextension = $request->file('Picture')->getClientOriginalName();
            $filename              = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension             = $request->file('Picture')->getClientOriginalExtension();
            $filenametostore       = $filename . '_' . time() . '.' . $extension;
            $request->file('Picture')->storeAs('public/permit_application/', $filenametostore);


            $permit->Pictures = $filenametostore;
        }

        $permit->save();

        // Mail::to('dayo@admin.com')->send(new ApplicantPermit($permit));

        return redirect()->back()->with('success', 'Application was added successfully');
    }

    public function approval1()
    {
        $permit = Permit::all();
        return view('permit.approval1', compact('permit'));
    }

    public function approval_admin($id)
    {
        $approve = Permit::find($id);
        $approve->Stage2 = 1;
        $approve->update();
        Mail::to($approve->Email)->send(new ApplicantPermit($approve));
        return redirect()->route('AprrovalAdmin')->with('success', 'Applicant was approved for the next stage');
    }

    public function approval2()
    {
        $permit = Permit::all();
        return view('permit.approval2', compact('permit'));
    }

    public function approval_supervisor($id)
    {
        $approve = Permit::find($id);
        $approve->Stage3 = 1;
        $approve->update();
        Mail::to($approve->Email)->send(new ApplicantApproval($approve));
        return redirect()->route('AprrovalSupervisor')->with('success', 'Applicant Permit Granted');
    }

    public function reject_admin(Request $request, $id)
    {
        $reject = Permit::find($id);
        
        $reject->update(['AdminComment'=> $request->AdminComment, 'AdminReject' => 1]);

        Mail::to($reject->Email)->send(new ApplicationRejected($reject));
        return redirect()->route('approval1')->with('message', 'Application Rejected');
    }

    public function reject_Supervisor(Request $request, $id)
    {
        $reject = Permit::find($id);
        
        $reject->update(['SupervisorComment'=> $request->SupervisorComment, 'SupervisorReject' => 1]);

        Mail::to($approve->user->email)->send(new AdminRejected($approve));
        return redirect()->route('approval2')->with('message', 'Application Rejected');
    }
}
