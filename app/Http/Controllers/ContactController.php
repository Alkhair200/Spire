<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();

        return view('dashboard.contact.index',compact('contacts'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }


    public function edit(Contact $contact,$id)
    {
        $contact = Contact::find($id);
        return response()->json($contact->subject);
    }

    public function update(Request $request, $id)
    {

        $contact = Contact::find($id);

        $request->validate([
            'name' =>'required', 'string', 'max:50',
            'phone' =>'required', 'string', 'min:10',
            'subject' =>'required', 'string', 'max:200',
            'email' => 'required|string|email|max:100|unique:contacts,id,'.$id,
        ]);

        try {

            $request_data = $request->except(['_token']);

        $contact->update([
            'name' => $request_data['name'],
            'email' => $request_data['email'],
            'subject' => $request_data['subject'],
            'phone' => $request_data['phone'],
            ]);
            
            toastr()->info(__('site.updated_successfully'));
           
            return back();

        } catch (\Exception $ex) {

            return response()->json(['errors' => $ex->getMessage()]);
        }
    }


    public function destroy(Contact $contact)
    {
        try {         

            // $contact = Contact::find($id);

            if (!$contact) {

                toastr()->error(__('site.error'));
           
                return back();
            }

            $contact->delete();

            toastr()->info(__('site.deleted_successfully'));
       
            return back();

        } catch (\Exception $ex) {

            return response()->json(['errors' => $ex->getMessage()]);
        }
    }
}
