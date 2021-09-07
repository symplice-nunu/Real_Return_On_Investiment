@extends('houses.layout')
  
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
                <h2 class="m-0 text-dark">Manage Houses - Add</h2>
            </div>
            <div class="col-sm-6" style="margin-bottom: 1.5em;">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage Houses</a></li>
                    <li class="breadcrumb-item">Add</li>
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
   
<form action="{{ route('houses.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Id*</strong>
                <input type="text" name="houseid" class="form-control" placeholder="Enter House Id">
                
                @if ($errors->has('houseid'))
                                <span class="text-danger">{{ $errors->first('houseid') }}</span>
                                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group ">
                <strong>City*</strong>
                <input type="text" name="city" class="form-control" placeholder="Enter City">
                
                @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
            </div>
        </div>
            
       
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Rooms*</strong>
                <input type="text" class="form-control" name="numberofroom" placeholder="Enter Number of rooms">
            @if ($errors->has('numberofroom'))
                                <span class="text-danger">{{ $errors->first('numberofroom') }}</span>
                                @endif
        </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Saloons</strong>
                <input type="text" class="form-control" name="numberofsaloons" placeholder="Enter Number of Saloons">
                
           @if ($errors->has('numberofsaloons'))
                                <span class="text-danger">{{ $errors->first('numberofsaloons') }}</span>
                                @endif
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Toilets</strong>
                <input type="text" name="numberoftb" class="form-control" placeholder="Enter Number of Toilets">
             </div>
             @if ($errors->has('numberoftb'))
                                <span class="text-danger">{{ $errors->first('numberoftb') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Number of Kitchen</strong>
                <input type="text" name="numberofkitchen" class="form-control" placeholder="Enter Number of Kitchen">
            </div>
            @if ($errors->has('numberofkitchen'))
                                <span class="text-danger">{{ $errors->first('numberofkitchen') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Extra-Houses</strong>
                <input type="text" name="extrahouses" class="form-control" placeholder="Enter Extra-Houses">
             </div>
             @if ($errors->has('extrahouses'))
                                <span class="text-danger">{{ $errors->first('extrahouses') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Location</strong>
                <input type="text" name="houselocation" class="form-control" placeholder="Enter House Location">
            </div>
            @if ($errors->has('houselocation'))
                                <span class="text-danger">{{ $errors->first('houselocation') }}</span>
                                @endif
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Price*</strong>
                <input type="number" name="price" class="form-control" placeholder="Enter Price">
             </div>
             @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Description</strong>
                <input type="text" name="housedescription" class="form-control" placeholder="Enter House Description">
                @if ($errors->has('housedescription'))
                                <span class="text-danger">{{ $errors->first('housedescription') }}</span>
                                @endif
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>House Picture</strong>
                <input type="file" name="houseimage" class="form-control" placeholder="Enter Website">
             </div>
             @if ($errors->has('houseimage'))
                                <span class="text-danger">{{ $errors->first('houseimage') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Saloon Picture</strong>
                <input type="file" name="saloonimage" class="form-control">
            </div>
            @if ($errors->has('saloonimage'))
                                <span class="text-danger">{{ $errors->first('saloonimage') }}</span>
                                @endif
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Room Image</strong>
                <input type="file" name="roomimage" class="form-control">
            </div>
            @if ($errors->has('roomimage'))
                                <span class="text-danger">{{ $errors->first('roomimage') }}</span>
                                @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
@endsection