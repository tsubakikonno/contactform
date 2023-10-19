<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;


class ContactController extends Controller
{

  public function index(Request $request)
  { 
    $familyname = $request->input('familyname');
    $givenname = $request->input('givenname');
  

$contact['fullname'] = $familyname.$givenname;



    return view('index',compact('contact'));

  }

  public function confirm(ContactRequest $request)
  {
    $familyname = $request->input('familyname');
    $givenname = $request->input('givenname');
  
    $contact = $request->only('fullname','gender', 'email', 'postcode', 'address','building_name', 'opinion');

$contact['fullname'] = $familyname. $givenname;

    return view('confirm', compact('contact','familyname', 'givenname'));
  }

  public function store(Request $request)
  {
    $contacts = $request->all();
    Contact::create($contacts);
    return view ('thanks');
  }
  
  
  public function search(Request $request)
{ 
  $start = $request->input('start');
  $end = $request->input('end');

  if (!isset($fullname) or (!isset($email)) or (!isset($gender))
  or (!isset($start) or (!isset($end))))

  
  $contacts = Contact::FullnameSearch($request->fullname)
  ->EmailSearch($request->email)
  ->GenderSearch($request->gender)
  ->DateSearch($start,$end)->Paginate(5);
  return view('manage', compact('contacts',['start', 'end'] ));
}


public function find(Request $request)

        { 
          $start = $request->input('start');
          $end = $request->input('end');
          
          $contacts = Contact::where('fullname','email', 'created_at',)
          ->Paginate(5);

          return view('manage',compact('contacts', 'start', 'end') );

       }

       public function delete(Request $request)
       {
       Contact::find($request->id)->delete();
          return back();
       }




}

