<!doctype html>
<html lang="en">
<head>
    <title>Hosto Bandhan - Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#f6af04">
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
        /* Error Message Styling */
        .error-message {
            color: #dc3545;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }
        .google-login {
            display: block;
            margin: 20px 0;
            text-align: center;
        }
        .google-login img {
            width: 600px; /* Adjust width as needed */
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .google-login img:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="hom-top">
        <div class="container">
            <div class="row">
                <div class="hom-nav">
                    <div class="logo">
                        <a href="index-2.html" class="logo-brand"><img src="images/logo-b.png" alt="" loading="lazy" class="ic-logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGIN -->
    <section>
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="inn">
                        <div class="lhs">
                            <div class="tit">
                                <h2>Now <b>Find <br> your life partner</b> Easy and fast.</h2>
                            </div>
                            <div class="im">
                                <img src="images/login-couple.png" alt="">
                            </div>
                            <div class="log-bg">&nbsp;</div>
                        </div>
                        <div class="rhs">
                            <div>
                                <div class="form-tit">
                                    <h4>Start for free</h4>
                                    <h1>Sign in to Matrimony</h1>
                                    <p>Not a member? <a href="{{ route('signup') }}">Sign up now</a></p>
                                </div>
                                <div class="form-login">
                                    <form method="POST" action="{{ route('auth') }}">
                                        @csrf
                                        
                                        <!-- Email Field -->
                                        <div class="form-group">
                                            <label class="lb">Email:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                        </div>

                                        <!-- Password Field -->
                                        <div class="form-group">
                                            <label class="lb">Password:</label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                                        </div>

                                        <!-- Remember Me Checkbox -->
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                            </label>
                                        </div>

                                        <!-- Error Message Display -->
                                        @if(session('error'))
                                            <div class="error-message">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <!-- Google Login Button -->
                                    <div class="google-login">
                                        <a href="{{ route('auth.google') }}">
                                            <img src="{{ asset('images/icon/google.png') }}" alt="Sign in with Google">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COPYRIGHTS -->
    <section>
        <div class="cr">
            <div class="container">
                <div class="row">
                    <p>Copyright © <span id="cry">2025</span> <a href="#!" target="_blank">HostoBandhan.com</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/select-opt.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
