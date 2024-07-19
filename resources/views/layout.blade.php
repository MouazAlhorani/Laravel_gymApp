
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <title>@yield('title')</title>
</head>
<body> 
    <div class="body">
<div class="sidebar">    
    <div class="testgrid2">
    @yield('sidebar_content')
    <div></div>
</div>
    </div>
    <div class="testgrid">
        @yield('content')
        <div></div>
    </div>
       
    
    </div>
    <footer>
       
           
               

            
 <a href="{{route('home.about')}}">
                         <div class="desc">
                             <div class="padding_5">
                                 About Us
                             </div>
                        
                     </div>
                 </a>
                 <a href="{{route('home.contact')}}">
                         <div class="desc">
                             <div class="padding_5">
                                 Contact Us
                            </div>
                         </div>
                     
                 </a>

        
    </footer>

    <header>
        <a href="{{route('home.signin')}}">
        <div class="logo">
            <img src="{{url('assets/imgs/logo/logo.png')}}" alt="">
        </div>
        </a>
        <div class="homepage">
            @yield('homepage')
        </div>
        <div class="prof">
            @yield('profile')
        </div>
        <div class="bottom_header">
            <div class="center">
                <div class="title">
                    <div class="padding_10">
                        @yield('header_title')
                    </div>
                </div>
            </div>
        </div>
    </header>

  
    
        
</body>
</html>