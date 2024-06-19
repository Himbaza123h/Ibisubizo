<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- for font awesome -->
    <link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/images/rel-icon.png') }}" type="image/x-icon">

    <title>@yield('title', config('app.name'))</title>
    <!-- for toastfy -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- tailwind links -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body class="{{ Request::routeIs('welcome') ? 'font-sans' : 'body-login-register' }}">


<div class="nav border-bottom">
    <div class="flex justify-between items-center w-full sm:w-[85%] mx-auto flex-wrap sm:flex-nowrap">
        <div class="web_logo w-full sm:w-auto text-center sm:text-left">
            <a href="{{ route('welcome') }}">
                <h2 class="h3">IBISUBIZO</h2>
            </a>
        </div>
        <div class="flex items-center w-full sm:w-auto justify-between sm:justify-end mt-2 sm:mt-0">
            <div class="language-selector mr-2">
                <form method="get" action="">
                    <input type="hidden" name="commId" value="">
                    <input type="hidden" name="articleId" value="">
                    <div class="flex items-center">
                        <label for="lang" class="mr-2"><i class="fa-solid fa-globe text-xl"></i></label>
                        <select name="lang" id="lang" onchange="this.form.submit()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="en">English</option>
                            <option value="fr">French</option>
                        </select>
                    </div>
                </form>
            </div>
            @if(! (Request::is('login') || Request::is('register') || Request::routeIs('register-user')))
            <div class="flex items-center mt-2 sm:mt-0">
                <a href="{{ route('login') }}" class="login_btn font-weight-bold">LOGIN</a>
                <a href="{{ route('register') }}" class="rounded-pill py-2 px-4 ml-3 text-white signup_btn rounded">REGISTER</a>
            </div>
            @endif
        </div>
    </div>
</div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="js/custom.js"></script>
    <script>
        let user_image_btn = document.getElementById("user-image-btn");
        let modal = document.getElementById("menu-detail");
        user_image_btn.addEventListener("click", () => {
            if (modal.style.display === "block") {
                modal.style.display = "none";
            } else {
                modal.style.display = "block";
            }
        });

        window.onclick = (event) => {
            if (!user_image_btn.contains(event.target)) {
                modal.style.display = "none";
            }
        };

    </script>
</body>

</html>