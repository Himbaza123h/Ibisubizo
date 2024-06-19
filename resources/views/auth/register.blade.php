
        @include('navbar.index')
        <div class="container bg-white">
            <div class="main-container">
                <div class="d-flex shadow main-login rounded">
                    <!-- Left Content: Main Login -->
                    <div class="w-100 p-5 bg-white">
        
                        <h3 class="font-bold text-3xl mb-4">IBISUBIZO</h3>
                        <div class="d-flex">
        
                            <form action="{{ route('register-user', ['id' => 1]) }}" method="GET">
                                {{-- Your form content --}}
                                {{-- <div class="alert alert-danger">
                                    User with that that phone or email already exists
                                </div> --}}
                              
                                <div class="grid grid-cols-1 gap-x-4">
                                    <div class="mb-4" style="display: flex;">
                                        <div style="width: 30%; margin-right: 10px;">
                                            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Document Type</label>
                                            <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option value="" disabled selected>Select Document Type</option>
                                                <option value="ID">ID</option>
                                                <option value="Passport">Passport</option>
                                                <option value="Driving Licence">Driving Licence</option>
                                            </select>
                                        </div>
                                    
                                        <div style="width: 50%; margin-right: 10px;">
                                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Id Number</label>
                                            <input type="text" id="number" name="number" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Id number here" />
                                        </div>
                                    
                                        <div style="width: 20%; margin-top: 30px;">
                                            <button type="button" style="width: 100%; height: 100%; background-color: #00892B; color: white; border: none; border-radius: 10px; outline: none;">Search</button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="grid grid-cols-3 gap-x-4">
                                    <div class="mb-4">
                                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                           First Name</label>
                                        <input type="text" id="first_name" name="first_name" value=""
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   "
                                            placeholder="First Name" disabled />
                                    </div>
                                    <div class="mb-4">
                                        <label for="middle_name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                            Middle Name</label>
                                        <input type="text" id="middle_name" name="middle_name" value=""
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                            placeholder="Middle Name" max="" disabled/>
        
                                    </div>
                                    <div class="mb-4">
                                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                            Last Name</label>
                                        <input type="text" id="last_name" name="last_name" value=""
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   "
                                            placeholder="Last Name" disabled/>
                                    </div>
        
                                    <div class="mb-4">
                                        <label for="date_of_birth"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Date of Birth</label>
                                        <input type="date" id="date_of_birth" name="date_of_birth"
                                            value=""
                                            placeholder="Date of birth"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                            disabled/>
                                    </div>
                                    <div class="mb-4">
                                        <label for="province"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Province</label>
                                        <input type="text" id="province" name="province"
                                            value=""
                                            placeholder="Province"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                            disabled/>
                                    </div>
                                    <div class="mb-4">
                                        <label for="district"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">District</label>
                                        <input type="text" id="district" name="district"
                                            value=""
                                            placeholder="District"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                            disabled/>
                                    </div>
                                    <div class="mb-4">
                                        <label for="sector"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Sector</label>
                                        <input type="text" id="sector" name="sector"
                                            value=""
                                            placeholder="Sector"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                            disabled/>
                                    </div>
                                    <div class="mb-4">
                                        <label for="cell"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Cell</label>
                                        <input type="text" id="cell" name="cell"
                                            value=""
                                            placeholder="Cell"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                            disabled/>
                                    </div>
                                    <div class="mb-4">
                                        <label for="village"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Village</label>
                                        <input type="text" id="village" name="village"
                                            value=""
                                            placeholder="Village"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                            disabled/>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" name="signup" class="login-btn">Save and Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <!-- Right Content: Side Signup (only visible on medium and larger screens) -->
                    <div class="side-signup text-white text-center d-flex justify-content-center align-items-center d-md-flex d-none">
                        <div style="margin-bottom: 50px;">
                            <h3 class="font-semibold text-2xl">Welcome to {{ env('APP_NAME') }}</h3>
                            <p class="my-2 text-md">Already have an account?</p>
                            <div class="mt-3">
                                <a href="{{ route('login') }}" class="log-btn">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <section class="footer shadow bg-login-register">
        @include('footer.index')
        </section>
