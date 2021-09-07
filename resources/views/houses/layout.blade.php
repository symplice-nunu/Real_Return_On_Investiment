<!DOCTYPE html>
<html>
<head>
    <title>Real Return On Investiment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/19faefb6e6.js" crossorigin="anonymous"></script>
   <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
<style>
@import url('https://fonts.googleapis.com/css/css2?family=Poppins:wght@300;400;500;600&display=swap');
:root {
    --main-color: whitesmoke;
    --color-dark: #1D2231;
    --text-grey: #8390A2;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}
a{
    text-decoration: none;
}
.sidebar{
    width: 345px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: var(--main-color);
    z-index: 100;
    transition: width 300ms;

}
.sidebar-brand{
    height: 79px;
    padding: 1rem 0rem 1rem 2rem;
    color: white;
    background-color: #000033;
}
.sidebar-brand span {
    display: inline-block;
    padding-right: 1rem;
}
.sidebar-menu{
    margin-top: 1rem;
}
.sidebar-menu li{
width: 100%;
margin-bottom: 1rem;
}
.sidebar-menu a{
    display: block;
    color:grey;
    font-size: 0.9rem;

}
.sidebar-menu a.active{
    background: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;
}
.sidebar-menu a span:first-child{
    font-size: 1.5rem;
    padding-right: 1rem;
}
#nav-toggle:checked + .sidebar{
    width: 70px;
}
#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li {
    
    text-align: center;
}
#nav-toggle:checked + .sidebar li a{
    padding-left: 0rem;
}
#nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child{
    display: none;
}
#nav-toggle:checked ~ .main-content{
    margin-left: 70px;
}
#nav-toggle:checked ~ .main-content header{
    width: calc(100% - 70px);
    left: 70px;
}
.main-content{
    transition: margin-left 200ms;
    margin-left: 345px;
}
header{
    background: #000033;
    display: flex;
    color: #fff;
    justify-content: space-between;
    padding: 1rem 1.5rem;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    position: fixed;
    left: 345px;
    width: calc(100% - 345px);
    top: 0;
    z-index: 100;
    transition: left 300ms;
}
#nav-toggle {
    display: none;
    
}
header h2{
    color: #222;

}
header label span{
    font-size: 1.7rem;
    padding-right: 1rem;
}
.search-wrapper{
    border: 1px solid #ccc;
    border-radius: 30px;
    height: 50px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
}
.search-wrapper span{
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
}

.user-wrapper{
    display: flex;
    align-items: center;

}

.user-wrapper small{
    display: inline-block;
    color: var(--text-grey);
}
.sw-sh{
    height: 2em;
}




@media only screen and (max-width: 1200px){
    .sidebar{
        width: 70px;
    }
    .sidebar-brand,
    .sidebar li {
        padding-left: 1rem;
        text-align: center;
    }
    .sidebar li a{
        padding-left: 0rem;
    }
    .sidebar .sidebar-brand h2 span:last-child,
    .sidebar li a span:last-child{
        display: none;
    }
    .main-content{
        margin-left: 70px;
    }
    .main-content header{
        width: calc(100% - 70px);
        left: 70px;
    }
    
}

@media only screen and (max-width: 768px) {
   
    .search-wrapper{
        display: none;
    }
    .sidebar{
        left: -100% !important;
    }
    header h2{
        display: flex;
        align-items: center;
    }
    header h2 label {
        display: inline-block;
        background: var(--main-color);
        padding-right: 0rem;
        margin-left: 1rem;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center !important;
    }
    header h2 span{
        text-align: center;
        padding-right: 0rem;
    }
    header h2{
        font-size: 1.1rem;
    }
    header{
        width: 100% !important;
        left: 0 !important;
    }
    .main-content{
        width: 100%;
        margin-left: 0rem;
    }
    #nav-toggle:checked + .sidebar {
        left: 0 !important;
        z-index: 100;
        width: 345px;
    }
    
    #nav-toggle:checked + .sidebar .sidebar-brand,
    #nav-toggle:checked + .sidebar li {
        padding-left: 2rem;
        text-align: left;
    }
    #nav-toggle:checked + .sidebar li a{
        padding-left: 1rem;
    }
    #nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
    #nav-toggle:checked + .sidebar li a span:last-child{
        display: inline;
    }
    #nav-toggle:checked ~ .main-content{
        margin-left: 0rem !important;
    }

}

.text-center{
margin-top: 2em;
margin-bottom: 4em;
}
.tb-cl{
    background-color: #003399;
    color: #fff;
}
.mg-10{
    margin-top: 6em;
}
.pull-right{
    text-align: right;
}
.mn-tps{
    margin-bottom: 1em;
}
.btn-create{
    margin-bottom: 1em;
    border-radius: 2em;
}
.mt-5{
    margin-left: -21em;
}
.form-control{
    margin-bottom: 1em;
    margin-top: 0.5em;
    
}
</style>
</head>

<body>
    @yield('content')
</body>

</html>