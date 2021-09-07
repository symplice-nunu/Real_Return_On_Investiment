@extends('app')
<link rel="stylesheet" href="/css/auth.css">
@section('content')
<body class="bg-ls">
<main class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <div class="text-center">
                    <img src="http://os7.techaffinity.us/district10/public/images/logo-login-page.png">
                </div>
                <div class="card">
                    
                    <div class="card-body">
                        <form action="{{ route('user.registration') }}" method="POST">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Name" id="name" class="form-control">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Jobtitle</label>
                                <input type="text" name="jobtitle" placeholder="Jobtitle" id="name" class="form-control">
                                @if ($errors->has('jobtitle'))
                                <span class="text-danger">{{ $errors->first('jobtitle') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Country</label>
                                <input type="text" name="country" placeholder="Country" id="name" class="form-control">
                                @if ($errors->has('country'))
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <select name="gender" id="" class="form-control">
                                    <option value="">---Select Gender---</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                 @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <input type="email" name="email" placeholder="Email" id="email_address" class="form-control">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" name="confirm-password" placeholder="Re-Enter Password" id="password" class="form-control">
                              
                                <span class="text-danger"></span>
                            </div>
                           
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>
</div>





@endsection