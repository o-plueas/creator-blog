@props(['blog'])


<x-card>

            <div class="bg-white rounded-xl border border-gray-300 ">

                <div class="w-full h-48  overflow-hidden bg-gray-300 rounded-t-xl">
                    <img src="{{$blog->logo ? asset('storage/' . $blog->logo) : asset('/images/spotify app.jpg') }}" class="rounded-xl w-full sm:h-48" alt="">
                </div>
                <div class="p-4">
                <div class="flex items-center text-sm">
                    <!-- <span class="text-white font-semibold rounded bg-button-gradient p-1">{{$blog['categories']}}</span> -->
                    <span class="ml-4 text-white rounded anchor-btn-bg p-1">{{$blog['qualification']}}</span>
                </div>
                <!-- <p class="text-lg font-semibold leading-tight mt-4">{{$blog['title']}}</p> -->
                <h2 class="text-xl leading-tight font-bold m-2"><a href="/blogging/{{$blog['id']}}">{{$blog['title']}}</a></h2>

                <ul class="flex">
           
           <x-blog-categories :categoriesCsv="$blog->categories"/>

           </ul>
                <div class="flex items-center mt-4">
                    <!-- <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300">
                  
                    </div> -->
                    
                    <div class="ml-4">
                    <p class="text-gray-600">By <span class="text-black">{{$blog['author']}}</span></p>
                    </div>
                </div>
                </div>
            </div>
</x-card>