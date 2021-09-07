@extends('contract.layout')
  
@section('content')
 
<input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span><img src="http://os7.techaffinity.us/district10/public/images/logo-login-page.png"  style="height: 1em;"></span><span>R.R.O.Investment</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#" class="dec"><span class="las la-users"></span>
                        <span>Manage Users</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-hiking"></span>
                        <span>Manage Events</span></a>
                </li>
                <li>
                    <a href="#"class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Documents</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Document Type</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Contractor Directory</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage JATC Directory</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list  "></span>
                        <span>Manage Chapter Directory</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage IBEW Directory</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Contractor Resources</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Announcement</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-users"></span>
                        <span>Manage Companies</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle" style="color: white;">
                    <span class="las la-bars"> </span>

                </label>
                

            </h2>
            <div class="user-wrapper" >
            <span>Welcome Admin</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="fas fa-bell"> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{ route('logout') }}" style="color: white;">
            <span class="fas fa-power-off"> </span></a>
            
            
            </div>
        </header>
       <div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage Contract - Modify</h2>
            </div>
            <div class="col-sm-6" style="margin-bottom: 1.5em;">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage Contract</a></li>
                    <li class="breadcrumb-item">Modify</li>
                </ol>
            </div>
        </div>
    </div>
@if ($errors->any())
<div class="card">
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('contract.update',$contract->id) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Id*</strong>
                <input type="text" name="houseid" value="{{ $contract->houseid }}" class="form-control" placeholder="Enter House Id">
                
                @if ($errors->has('houseid'))
                                <span class="text-danger">{{ $errors->first('houseid') }}</span>
                                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group ">
                <strong>Emp Name*</strong>
                <input type="text" name="empname" value="{{ $contract->empname }}" class="form-control" placeholder="Enter Employee Name">
                
                @if ($errors->has('empname'))
                                <span class="text-danger">{{ $errors->first('empname') }}</span>
                                @endif
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Title*</strong>
                <input type="text" class="form-control" value="{{ $contract->emptitle }}" name="emptitle" placeholder="Enter Emp Title">
            @if ($errors->has('emptitle'))
                                <span class="text-danger">{{ $errors->first('emptitle') }}</span>
                                @endif
        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Buyer Name</strong>
                <input type="text" class="form-control" value="{{ $contract->buyername }}" name="buyername" placeholder="Enter Payment">
                
           @if ($errors->has('buyername'))
                                <span class="text-danger">{{ $errors->first('buyername') }}</span>
                                @endif
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Payment Type</strong>
                <input type="text" class="form-control" value="{{ $contract->paymenttype }}" name="paymenttype" placeholder="Enter Payment">
                
           @if ($errors->has('paymenttype'))
                                <span class="text-danger">{{ $errors->first('paymenttype') }}</span>
                                @endif
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Location</strong>
                <input type="text" name="location" value="{{ $contract->location }}" class="form-control" placeholder="Enter Location">
             </div>
             @if ($errors->has('location'))
                                <span class="text-danger">{{ $errors->first('location') }}</span>
                                @endif
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
@endsection