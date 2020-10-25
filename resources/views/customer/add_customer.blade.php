@extends('admin.layout.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
           <i class="fa fa-users"></i>
        </div>
        <div class="header-title">
           <h1>Add Customer</h1>
           <small>Customer list</small>
        </div>
     </section>
    <!-- Main content -->
    <section class="content">
        <form class="col-sm-6" action="add_cust" method="post">
            @csrf
            <div class="form-group">
               <label>Customer Name</label>
               <input type="text" class="form-control" placeholder="Enter Customer Name" name="name">
            </div>
            <div class="form-group">
               <label>Father Name</label>
               <input type="text" class="form-control" placeholder="Enter Father Name" name="fname">
            </div>
            <div class="form-group">
               <label>CNIC</label>
               <input type="text" class="form-control" placeholder="Enter CNIC Number" name="cnic">
            </div>
            <div class="form-group">
               <label>Mobile Number</label>
               <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile">
            </div>
            <div class="form-group">
               <label>Bank Account Number</label>
               <input type="text" class="form-control" placeholder="Enter Bank Account Number" name="bank">
            </div>
            <div class="form-group">
               <label>Refral Name</label>
               <input type="text" class="form-control" placeholder="Enter Refral Name" name="referal">
            </div>
            <div class="form-group">
               <label>Username</label>
               <input type="text" class="form-control" placeholder="Enter Username" name="username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">
             </div>
            <div class="form-group">
               <label>Address</label>
               <textarea class="form-control" rows="3" name="address"></textarea>
            </div>
            <div class="form-group">
               <label>Select Plan</label>
               <select class="form-control" name="plan">
                <option>-- Select Plan --</option>
                  <option>Pro Plan</option>
                  <option>Elite Plan</option>
                  <option>Platinum Plan</option>
                  <option>Silver Plan</option>
                  <option>Gold Plan</option>
                  <option>Pearl Plan</option>
               </select>
            </div>
            <div class="reset-button">
               <button type="submit" class="btn btn-success btn-lg">Save</button>
            </div>
         </form>
    </section>
    <!-- /.content -->
 </div>
@endsection