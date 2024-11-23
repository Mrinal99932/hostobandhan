<!doctype html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/matrimo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 16:57:39 GMT -->
<head>
    <title>Hosto Bandhan</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#f6af04">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <!--== FAV ICON(BROWSER TAB ICON) ==-->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!--== CSS FILES ==-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Cropper.js CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <!-- Cropper.js JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->

      <style>
        /* General form styling */
        .form-group {
            margin-bottom: 1.5rem;
        }

        /* Styling for Gender Radio Buttons */
        .form-group label.lb {
            font-weight: bold;
            font-size: 1rem;
            color: #333;
        }

        .form-group input[type="radio"] {
            display: none;
        }

        .form-group input[type="radio"] + label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            font-size: 0.95rem;
            color: #555;
        }

        .form-group input[type="radio"] + label:before {
            content: "";
            position: absolute;
            left: 0;
            top: 4px;
            width: 20px;
            height: 20px;
            border: 2px solid #007bff;
            border-radius: 50%;
            background-color: #fff;
            transition: background-color 0.3s ease;
        }

        .form-group input[type="radio"]:checked + label:before {
            background-color: #007bff;
            border-color: #007bff;
        }

        .form-group input[type="radio"]:checked + label:after {
            content: "";
            position: absolute;
            left: 6px;
            top: 10px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #fff;
        }

        /* Styling for Date of Birth Field */
        input[type="date"] {
            display: block;
            width: 100%;
            padding: 0.6rem 1rem;
            font-size: 1rem;
            color: #333;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        input[type="date"]:focus {
            outline: none;
            border-color: #007bff;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }

        /* Mobile Responsiveness */
        @media (max-width: 576px) {
            .form-group input[type="radio"] + label {
                font-size: 0.85rem;
            }
            input[type="date"] {
                font-size: 0.9rem;
            }
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }


      </style>
      <style>
        .error-message {
            color: red;
            font-size: 1.2rem;
            margin-top: 0.25rem;
        }

        .selected-image-name {
            margin-left: 10px;
            font-size: 0.875rem; /* Increased font size for better readability */
            color: #555;          /* Darker gray for better contrast */
            font-weight: 500;    /* Slightly bolder for emphasis */
        }
        #uploadImageButton {
            margin-top: 10px;
            cursor: pointer;
        }

        #selectedImageName {
            display: inline-block;
            margin-left: 10px;
            font-size: 0.9rem;
            color: #555;
        }

        /* Tooltip styling for upload button */
        .form-text.text-muted {
            margin-top: 8px;
            font-size: 0.8rem;
            color: #6c757d;
        }

        
    #uploadImageIcon {
        margin-right: 10px;
        cursor: pointer;
        color: #007bff;
    }

    .selected-image-name {
        font-size: 0.9rem;
        color: #555;
        font-weight: 500;
    }

    .form-text.text-muted {
        margin-top: 8px;
        font-size: 0.8rem;
        color: #6c757d;
    }


    </style>
</head>

<body>
    

   
    <!-- END HEADER & MENU -->

    <!-- HEADER & MENU -->
    <div class="hom-top">
        <div class="container">
            <div class="row">
                <div class="hom-nav">
                    <!-- LOGO -->
                    <div class="logo">
                        
                        <a href="index-2.html" class="logo-brand"><img src="images/logo-b.png" alt="" loading="lazy"
                                class="ic-logo"></a>
                    </div>
                    <!--END MOBILE MENU-->
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER & MENU -->


    <!-- END USER PROFILE MENU POPUP -->

    <!-- REGISTER -->
    <section>
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="inn">
                        <div class="lhs">
                            <div class="tit">
                                <h2>Now <b>Find your life partner</b> Easy and fast.</h2>
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
                                    <h1>Sign up to Matrimony</h1>
                                    <p>Already a member? <a href="{{route('login')}}">Login</a></p>
                                </div>
                                
                                <div class="form-login">
                                @if(session('error'))
                                    <div class="error-message">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" id="signupForm">
                                    @csrf
                                    <div class="form-group">
                                        <label class="lb">First Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter your first name" name="first_name" required id="first_name">
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Last Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter your last name" name="last_name" required id="last_name">
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Phone:</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone_number" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Gender:</label><br>
                                        <input type="radio" id="gender_male" name="gender" value="male" required>
                                        <label for="gender_male"> Male</label>
                                        <input type="radio" id="gender_female" name="gender" value="female" required>
                                        <label for="gender_female"> Female</label>
                                        <input type="radio" id="gender_other" name="gender" value="other" required>
                                        <label for="gender_other"> Other</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Date of Birth:</label>
                                        <input type="date" class="form-control" name="date_of_birth" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Password:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Profile Picture:</label>
                                        <input type="file" id="profile-picture-input" name="profile_picture" accept="image/*" style="display: none;">
                                        <i id="uploadImageIcon" class="fa fa-upload fa-2x" style="cursor: pointer; color: #007bff;"></i>
                                        <span id="selectedImageName" class="selected-image-name"></span>
                                        <small class="form-text text-muted">Supported formats: JPEG, PNG. Max size: 5MB</small>
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="agree" required>
                                            Creating an account means you’re okay with our <a href="#!">Terms of Service</a>, Privacy Policy, and our default Notification Settings.
                                        </label>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" id="recaptcha"></div><br>

                                    <button type="submit" class="btn btn-primary">Create Account</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- FOOTER -->
    <!-- COPYRIGHTS -->
    <section>
        <div class="cr">
            <div class="container">
                <div class="row">
                    <p>Copyright © <span id="cry">2025</span> <a href="#!" target="_blank">HostoBandhan.com</a> All
                        rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/select-opt.js"></script>
    <script src="js/custom.js"></script>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const uploadImageIcon = document.getElementById("uploadImageIcon");
        const profilePictureInput = document.getElementById("profile-picture-input");
        const selectedImageName = document.getElementById("selectedImageName");

        // Trigger file input click when icon is clicked
        uploadImageIcon.addEventListener("click", () => {
            profilePictureInput.click();
        });

        // Display selected image name
        profilePictureInput.addEventListener("change", (event) => {
            const file = event.target.files[0];
            if (file) {
                selectedImageName.textContent = file.name;
            } else {
                selectedImageName.textContent = '';
            }
        });
    });
</script>
<script>
document.getElementById('signupForm').addEventListener('submit', function(event) {
    let isValid = true;

    // Highlight empty fields with red border
    const inputs = document.querySelectorAll('input[required]');
    inputs.forEach(function(input) {
        if (input.value.trim() === '') {
            isValid = false;
            input.style.borderColor = 'red'; // Highlight empty fields with red border
        } else {
            input.style.borderColor = ''; // Reset border color if field is filled
        }
    });

    // Check if CAPTCHA is filled
    var recaptchaResponse = grecaptcha.getResponse();
    var recaptchaContainer = document.getElementById('recaptcha');
    if (recaptchaResponse.length === 0) {
        isValid = false;
        // Shake the recaptcha box if not filled
        recaptchaContainer.style.animation = 'shake 0.5s'; // Apply shake animation
        setTimeout(function() {
            recaptchaContainer.style.animation = ''; // Remove the shake effect after 0.5s
        }, 500);
    }

    // If any field is missing, prevent form submission
    if (!isValid) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
});

// Add shake animation for CAPTCHA
const style = document.createElement('style');
style.innerHTML = `
    @keyframes shake {
        0% { transform: translateX(0); }
        25% { transform: translateX(-8px); }
        50% { transform: translateX(8px); }
        75% { transform: translateX(-8px); }
        100% { transform: translateX(0); }
    }
`;
document.head.appendChild(style);
</script>




<!-- Mirrored from rn53themes.net/themes/matrimo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 16:57:39 GMT -->
</html>