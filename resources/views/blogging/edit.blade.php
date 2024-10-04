
<x-layout>



        <main>
            <div class="mx-4">
                <div
                    class="bg-blue-teal-gradient border border-gray-200 p-10 rounded max-w-lg mx-auto mt-36"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Update Blog Post
                        </h2>
                        <p class="mb-4">Post a blog post</p>
                    </header>

                    <form action="/blogging/{{$blog->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="mb-6">
                            <label
                                for="author"
                                class="inline-block text-lg mb-2"
                                >Author Name</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="author"
                                placeholder="Author name..."
                                value="{{$blog->author}}"

                            />

                            @error('author')
                            <p class="text-red-500 text-s mt-2">{{$message}}</p>
                            
                            @enderror




                        </div>

                        <div class="mb-6">
                            <label for="title" class="inline-block text-lg mb-2"
                                >Blog Post Title</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                                value="{{$blog->title}}"
                                placeholder="Example: How t live a healthy life..."
                            />

                            
                            @error('title')
                            <p class="text-red-500 text-s mt-2">{{$message}}</p>
                            
                            @enderror

                        </div>

                        <div class="mb-6">
                            <label
                                for="qualification"
                                class="inline-block text-lg mb-2"
                                >Qualification</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="qualification"
                                value="{{$blog->qualification}}"
                                placeholder="Example: BSc."
                            />

                            
                            @error('qualification')
                            <p class="text-red-500 text-s mt-2">{{$message}}</p>
                            
                            @enderror

                        </div>


                        

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Categories (Comma Separated)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="categories"
                                value="{{$blog->categories}}"
                                placeholder="Example: fruit, drink, etc"
                            />

                            
                            @error('categories')
                            <p class="text-red-500 text-s mt-2">{{$message}}</p>
                            
                            @enderror

                        </div>

                        <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Blog post Image
                            </label>
                            <div class="w-48"></div>
                            
                         
                            <div class="w-24 h-24 rounded-lg">
                                <img src="{{$blog->logo ? asset('storage/' . $blog->logo) : asset('/images/spotify app.jpg')}}" alt="" class="w-24 h-24 rounded-lg">
                            </div>
                            
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="logo"
                            />
                        </div>

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Blog Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="description"
                                rows="10"

                                placeholder="Include tasks, requirements, salary, etc"
                            >{{$blog->description}}</textarea>

                            
                            @error('description')
                            <p class="text-red-500 text-s mt-2">{{$message}}</p>
                            
                            @enderror

                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Update Blog Post
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <!-- START FROM STORING POST -->




</x-layout>