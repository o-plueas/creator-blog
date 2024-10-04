

<x-layout>
@include('partials._hero')




    <section class="relative px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-32 py-1">    

        <div class="md:flex flex-wrap  mt-3 md:-mx-3">

            @foreach($blogging as $blog)

                <x-blog-card :blog="$blog" />


            <!-- <div class="md:px-4 md:w-1/2 xl:w-1/4 mt-4 md:mt-0">
                <div class="bg-white rounded border border-gray-300 ">
                    <div class="w-full h-48 overflow-hidden bg-gray-300"></div>
                    <div class="p-4">
                    <div class="flex items-center text-sm">
                        <span class="text-teal-500 font-semibold">Business</span>
                        <span class="ml-4 text-gray-600">29 Nov, 2019</span>
                    </div>
                    <p class="text-lg font-semibold leading-tight mt-4">Card Title</p>
                    <p class="text-gray-600 mt-1">This card has supporting text below as a natural lead-in to additional
                        content.
                    </p>
                    <div class="flex items-center mt-4">
                        <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300"></div>
                        <div class="ml-4">
                        <p class="text-gray-600">By <span class="text-gray-900 font-semibold">Abby Sims</span></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div> -->

            @endforeach

        </div>


        <div class="">
            

            <a href="#" title="" class="anchor-btn-bg inline-block text-white font-semibold mt-3 mt:md-0 py-2 px-2 rounded">
                View All Posts
            </a>
        </div>

        </section>


        <div class="mt-6 p-4">
            {{$blogging->links()}}

        </div>



</x-layout>
