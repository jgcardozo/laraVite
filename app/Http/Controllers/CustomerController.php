<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    public function index()
    {
        $data = Customer::all(); //where('name','juan'); //
        if ($data->count() < 1) {
            $message = "There is any Customer to be listed";
            $status = 200;
        } else {
            $message = "Customers ok";
            $status = 201;
        }
        return response()->json(compact('message', 'data'), $status);
    }


    public function store(Request $request)
    {
        $status = 201;
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers',
            'address' => 'required|string'
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        $message = "Customer has been created";
        $data = $customer;
        return response()->json(compact('message', 'data'), $status);
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string'
        ]);
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();
        return response()->json(["message"=>"customer entire entity updated"],201);
    }


    public function updatePartial(Request $request, string $id)
    {
        $request->validate([
            'name' => 'string',
            'email' => 'string|email|unique:customers',
            'address' => 'string'
        ]);
        $customer = Customer::find($id);
        $status = 201;

        foreach ($request->all() as $field) {
            
            if($request->has($field)){
                return response()->json(["message"=>"netro"]);
                $customer->$field = $request->$field;
            }
        }
        $customer->save();
        return response()->json(["message"=>"customer partially updated"],200);
    }


    public function show(string $id)
    {
        $customer = Customer::find($id);
        return response()->json(compact('customer'));
    }


    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        if(!$customer){
            return response()->json(["message"=>"the customer $id, was not found."],205);
        }
        $customer->delete();
        return response()->json(["message" => "Customer was deleted"], 200);
    }
}
