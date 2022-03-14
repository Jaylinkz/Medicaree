<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home Page</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="{{asset('landpage.css')}}" />
    </head>
    <body>
        <!-- header section -->
        <header>
            <!-- <div class="nav">
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a onClick="openForm()">Login</a></li>
                    </ul>
                </nav>
            </div> -->

            @if (Route::has('login'))
            <div class="nav">
                <nav>

                    <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                        
                        @auth
                        <li>
                            
                            <a
                            href="{{ url('/dashboard') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline"
                            >Dashboard</a
                            >
                        </li> 
                        @else
                        <li>
                            
                            <a
                            href="{{ route('login') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline"
                            >Log in</a>
                        </li>
                        
                        @if (Route::has('register'))
                        <li>
                            
                            <a
                            href="{{ route('register') }}"
                            class="
                            ml-4
                            text-sm text-gray-700
                            dark:text-gray-500
                            underline
                            "
                            >Register</a>
                        </li>
                        @endif @endauth
                    </ul>
                </nav>
                </div>
                @endif
                
                <div class="logo">
                    <h1>
                        <img
                        src="{{asset('/img/logo2.png')}}"
                        alt="logo"
                        style="width: 6rem; height: 6rem"
                        />MEDICARE.
                    </h1>
                </div>
            </header>
            
            <!-- content section -->
        <div class="container">
            <div class="content">
                <h1>MEDICARE</h1>
                <p>
                    Medicare is an online pharmacy that provides you easy, convenient and private way to buy medications.
                </p>

                <div class="btn">
                    <a href=""><button>Read More</button></a>
                </div>

                <div class="icons">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="" class="fa fa-instagram"></a>
                </div>
            </div>

            <div class="image">
                <img src="{{asset('/img/drug4.jpg')}}" alt="" />
            </div>
        </div>

        <!-- js file -->
        <script src="app.js"></script>
    </body>
</html>
