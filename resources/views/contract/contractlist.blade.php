
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
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Houses</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Register House</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage House Applications</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Make Contract</span></a>
                </li>
                <li>
                    <a href="#"class="dec"><span class="las la-clipboard-list"></span>
                        <span>Manage Purchase Agreement</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Payments</span></a>
                </li>
                <li>
                    <a href="#" class="dec"><span class="las la-clipboard-list"></span>
                        <span>Print Purchase Agreement</span></a>
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
                <h2 class="m-0 text-dark">Manage Contract</h2>
            </div>
            <div class="col-sm-6 pull-right" >
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Manage Contract</li>
                </ol>
            </div>
        </div>
    </div>
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary btn-create" href="{{ route('contract.create') }}"> New Contract</a>
            </div>
        </div>
        
        <div class="col-lg-2 mn-tps">
                <strong>Search: </strong>
        </div>
        <br>
        <div class="col-lg-3 mn-tps">
                 <input type="search" id="myInput" onkeyup="myFunction()" name="search" placeholder="Search" class="form-control">
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div class="container">
    <table class="table table-bordered"  id="myTable">
        <tr class="tb-cl">
            <th>House Id</th>
            <th>Emp Name</th>
            <th>Emp Title</th>
            <th>Payment Type</th>
            <th>Location</th>
            <th width="140px">Action</th>
        </tr>
        @foreach ($contract as $contra)
        <tr>
            <td>{{ $contra->houseid }}</td>
            <td>{{ $contra->empname }}</td>
            <td>{{ $contra->emptitle }}</td>
            <td>{{ $contra-> paymenttype}}</td>
            <td>{{ $contra->location }}</td>
            <td>
    
                <form action="{{ route('contract.destroy',$contra->id) }}" method="POST">
                <button style="height: 2em; width: 2em; border-radius: 2em; background-color: teal; border-color: teal;">
                        <a class="fas fa-eye" style="color: white;" href="{{ route('contract.show',$contra->id) }}" ></a>
                    </button>
                    <button style="height: 2em; width: 2em; border-radius: 2em; background-color: blue; border-color: blue;">
                        <a class="fas fa-pen" style="color: white;" href="{{ route('contract.edit',$contra->id) }}" ></a>
                    </button>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="fas fa-trash" style="height: 2em; width: 2em; border-radius: 0.5em; background-color: red; border-color: red; color: white;"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    </div>
       </div>    </div>
       
       <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function myFunction(searchTerm) {
  var input, filter, table, tr, td, i;
  filter = searchTerm.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

var options = $("#fruitOptions");
$("#myTable tr:not(.header)").each(function() {
  options.append($("<option />").val($(this).find("td:first-child").text()).text($(this).find("td:first-child").text()));
});

$("#myInput").on('input', function() {
  myFunction($(this).val());
});

$("#fruitOptions").on('change', function() {
  myFunction($(this).val());
});
</script>
@yield('content')
@endsection

