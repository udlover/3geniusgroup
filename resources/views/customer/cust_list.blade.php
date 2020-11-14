@extends('admin.layout.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
           <i class="fa fa-users"></i>
        </div>
        <div class="header-title">
           <h1>Customer List</h1>
           <small>Customer list</small>
        </div>
     </section>
    <!-- Main content -->
    <section class="content">
       <table class="table table-light">
          <thead class="thead-light">
             <tr>
                <th>Customer Name</th>
                <th>Username</th>
                <th>Mobile</th>
                <th>Plan</th>
                <th>Take Print</th>
             </tr>
          </thead>
          <tbody>
             @foreach ($obj as $item)
               <tr>
                  <td>{{$item->name}}</td>
                  <td>{{$item->username}}</td>
                  <td>{{$item->mobile}}</td>
                  <td>{{$item->plan}}</td>
                  <td><a href="print/{{$item->id}}" class="btn btn-primary btn-lg">Print</a></td>
               </tr>
             @endforeach
          </tbody>
       </table>
    </section>
    <!-- /.content -->
 </div>
@endsection