<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function cust_list()
    {
        $obj = Customer::all();

        return view('customer.cust_list', compact('obj'));
    }

    public function add_cust(Request $req)
    {
        $cust = new Customer();
        $cust->name = $req->name;
        $cust->fname = $req->fname;
        $cust->cnic = $req->cnic;
        $cust->mobile = $req->mobile;
        $cust->bank = $req->bank;
        $cust->referalname = $req->referal;
        $cust->username = $req->username;
        $cust->password = $req->password;
        $cust->address = $req->address;
        $cust->plan = $req->plan;
        $cust->save();

        return redirect('/');
    }

    public function cust_print($id)
    {
        $data = Customer::find($id);
        return $data;
    }
}
