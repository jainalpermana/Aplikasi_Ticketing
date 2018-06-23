<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/iconmaterial.css')}}">
        
        <!-- stylr js -->
        <script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
        <script src="{{asset('js/materialize.js')}}"></script>

        <!-- Styles -->
        <style>
            body {
                background-color: #263238;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: auto;
                margin: 0;
            }

            .menu-header .dropdown-content{
                margin-top: 65px !important;
                border-bottom: 3px solid #AAA;
            }

                .menu-header .dropdown-content{
                    width: 200px !important;
                    background-color: #000 !important; 
                }
                
                .menu-header .dropdown-content li a{
                    color: #fff !important;
                    font-size: 12px !important;
                }

            /*.bac{
                margin-top: -25px;
                background: url({{ ('img/bg3.jpg') }});
                width: 1300px;
                height: 500px;
            }*/

            h5{
                color: #fff; 
            }

            .mobile{
                text-align: center;
            }
            
        </style>
    </head>
    <body>

        @if (Route::has('login'))
            <ul id="dropdown1" class="dropdown-content">
                @if (Auth::check())
                <li><a href="{{ url('/home') }}">Home</a></li>
                @else
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @endif
            </ul>
        @endif

        <nav class="menu-header blue-grey darken-3">
            <div class="nav-wrapper container">
                <a href="#!" class="brand-logo">Selamat Datang</a>

                <a href="#" data-activates="mobile-demo" class="button-collapse">
                <i class="material-icons">menu</i></a>

                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">Daftar
                        <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>

                <!-- nav 2 materializ -->
                <ul class="side-nav " id="mobile-demo">
                    @if (Auth::check())
                    <li><a href="/ct/{{ Auth::user()->id }}">Home</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </nav>

        <div class="row bac">
            <div class="mobile center">
                <h3 class="light grey-text text-lighten-3">PENYEDIA TICKET ONLINE PESAWAT & KERETA</h3>
            </div>
            <br>
            <div class="">
                <div class="col l4 m6 s12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('img/locasi/l4.jpg')}}" height="220">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Ticket Pesawat<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Ticket Pesawat<i class="material-icons right">close</i></span>
                            <p>ada abanyak pilihan ticket pesawat dari kelas ekonomi,reguler dan business yang bisa anda pesan disini.</p>
                        </div>
                    </div>
                </div>


                <div class="col l4 m6 s12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('img/locasi/l5.jpg')}}" height="220">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Ticket Kereta Api<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Ticket Kereta Api<i class="material-icons right">close</i></span>
                            <p>ada abanyak pilihan ticket kereta api dari kelas ekonomi,reguler dan business yang bisa anda pesan disini.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="page-footer blue-grey darken-3" style="margin-top: -18px;">
            <div class="container">
                <div class="footer-copyright">
                    © 2018 Copyright Jainal
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                  </div>
            </div>
        </footer>
    </body>
    <script>
        $(".button-collapse").sideNav();

        $('.dropdown-button').dropdown({
            inDuration : 300,
            outDuration : 225,
            constrain_width : false,
            hover : true,
            gutter : 0,
            belowOrigin : false,
            alignment : 'left'
        });
        $('.materialboxed').materialbox();
    </script>
</html>
