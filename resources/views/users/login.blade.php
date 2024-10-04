
<x-layout>



        <main class="">
            <div class="mx-4">
                <div
                    class="bg-blue-teal-gradient border border-gray-200 p-10 rounded max-w-lg mx-auto mt-36"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Login
                        </h2>
                        <p class="mb-4">Login to maake a post</p>
                    </header>

                    <form action="/users/authenticate" method="POST">
                        @csrf

                       

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                value="{{old('email')}}"
                                placeholder="Example: youremail@gmail.com..."
                            />

                            
                            @error('email')
                            <p class="text-red-500 text-s mt-2">{{$message}}</p>
                            
                            @enderror

                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2"
                                >Password</label
                            >
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password"
                                value="{{old('password')}}"
                                placeholder="Enter your password"
                            />

                            
                            @error('password')
                            <p class="text-red-500 text-s mt-2">{{$message}}</p>
                            
                            @enderror

                        </div>


                        


                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Login
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                        <div class="mt-6">
                            <p class="text-white lg">Don't have account? <a href="/register" class="text-teal-300">Register</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <!-- START FROM STORING POST -->




</x-layout>