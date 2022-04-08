<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{url('registration/css/style.css')}}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registration</h2>
                        @if ($errors->any())
            @foreach ($errors->all() as $error)
                 <div style="background-color:#e4a8a8;color:black">
                    <p class=""> {{$error}}</p>
                    </div>
            @endforeach
                 @endif
                        
    <form action="{{route('customer.do.registration')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="address" id="address" placeholder="Your Adress"/>
                            </div>
                            <div class="form-group">
                                <label for="phone_number"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="phone_number" id="name" placeholder="Your phone_number"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                             <a href="{{route('customer.Login')}}" class="btn btn-primary">log in</a> 
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{url('registration/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link"></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        

    </div>

    <!-- JS -->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>