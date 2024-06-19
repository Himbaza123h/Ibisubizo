@section('title', 'Register | ' . config('app.name'))

        @include('navbar.index')

        <div class="container bg-white">
            <div class="main-container">
                <div class="d-flex shadow main-login rounded">
                    <!-- Left Content: Main Login -->
                    <div class="w-100 p-5 bg-white">
        
                        <h3 class="font-bold text-3xl mb-4">IBISUBIZO</h3>
                        <div class="d-flex">
        
                            <form class="w-100" method="POST" action="">
                                {{-- <div class="alert alert-danger">
                                    Invalid phone number or password
                                </div> --}}
                                <div class="error_container">
                                    <div class="error_message"></div>
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">
                                        Phone Number
                                    </label>
                                    <input type="text" id="phone" name="phone" value="" placeholder="Phone Number"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="" />
                                    {{-- <span class="text-danger"> AD
                                    </span> --}}
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                    <input type="password" id="password" name="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Password" />
                                    <span class="text-danger"></span>
                                </div>
                                <div class="mb-4">
                                    <label for="confirm_password"
                                        class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Confirm Password" />
                                    <span class="text-danger"></span>
                                </div>
                                <div>
                                    <button type="submit" class="login-btn text-white">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <!-- Right Content: Side Login (only visible on medium and larger screens) -->
                    <div class="side-login border w-100 text-white text-center d-md-flex d-none justify-content-center align-items-center">
                        <div style="margin-bottom: 50px;">
                            <h3 class="font-semibold text-2xl">Almost ready to join {{ env('APP_NAME') }}</h3>
                            <p class="my-2 text-md">You're almost there!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <section class="footer shadow bg-login-register">
        @include('footer.index')
        </section>
