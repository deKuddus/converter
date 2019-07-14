<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- SWAL -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>@yield('title')</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    @yield('ajax')
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 pl-0">
                <div class="nav-side-menu">
                    <div class="brand"><a href="#"><img src="https://i.pinimg.com/originals/20/ff/94/20ff9479c4f98daf31e018eb65ee235e.jpg" alt="" class="img-fluid" style="height:100px; width:100%"></a></div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                  
                        <div class="menu-list">
                  
                            <ul id="menu-content" class="menu-content collapse out">
                                <li class="selected">
                                  <a href="#" class="selected">
                                  <i class="fa fa-arrow-right fa-lg"></i> Dashboard
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ url('/') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Md5 Generator
                                  </a>
                                </li>
                                  <li>
                                  <a href="{{ url('/bcrypt-generatro-form') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Bcrypt generator
                                  </a>
                                <li>
                                  <a href="{{ url('/wordpress-password') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> wordpress password generator
                                  </a>
                                </li>
                                </li>
                                <li>
                                  <a href="{{ url('/remove-character-from-string') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Character Remover
                                  </a>
                                </li>

                                <li>
                                  <a href="{{ url('/text-case-conversion') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Text Case Converstion
                                  </a>
                                </li>

                                <li>
                                  <a href="{{ url('/text-replace') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Text Replace
                                  </a>
                                </li>

                                <li>
                                  <a href="{{ url('/remove-space') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Remove Space From Text
                                  </a>
                                </li>

                                <li>
                                  <a href="{{ url('/base64-encode') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Base64 Encode 
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ url('/base64-decode') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Base64 Deocde 
                                  </a>
                                </li>

                                <li>
                                  <a href="{{ url('/find-ip') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Find My IP 
                                  </a>
                                </li>

                                <li>
                                  <a href="{{ url('/http-header') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Get HTTP Header 
                                  </a>
                                </li>

                                <li>
                                  <a href="{{ url('/domain-whois') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Domain WhoIS 
                                  </a>
                                </li>


                                <li>
                                  <a href="{{ url('/hosting-whois') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Hosting WhoIS 
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ url('/age-calculator') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Age Calculator 
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ url('/qrcode') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> QR Code Generator 
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ url('/image-base64') }}">
                                    <i class="fa fa-arrow-right fa-lg"></i> Image to Base64 
                                  </a>
                                </li>
                
                                 <!-- <li data-toggle="collapse" data-target="#new" class="collapsed">
                                  <a href="#"><i class="fa fa-car fa-lg"></i> Service <span class="arrow"></span></a>
                                </li>
                                <ul class="sub-menu collapse" id="new">
                                  <li>Sensorkonfiguration</li>
                                  <li>Betriebsarten</li>
                                </ul> -->
                
                            </ul>
                     </div>
                </div>
            </div>
            
              @yield('content')

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
            $( "#copy-button").click(function() {
                var text = document.getElementById("outputdata");
                text.select();
                document.execCommand("copy");
                swal({
                    title: "Text Copied!",
                    icon: "success",
                    button: "Close",
                    });
            });
    </script>
  </body>
</html>