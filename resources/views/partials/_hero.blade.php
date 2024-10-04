<div class="bg-gray-100">
      <section class="cover bg-blue-teal-gradient relative px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 overflow-hidden py-48 flex
      items-center min-h-screen">
      <!-- <div class="bg-no-repeat bg-center bg-gray-400 w-24 h-24" style="background-image: url(...);"></div> -->

        <div class="h-full absolute top-0 left-0 z-0">
        <img src="images/blog.png" alt="" class="w-full  h-full object-cover  opacity-20">
        </div>

        <div class="lg:w-3/4 xl:w-2/4 relative z-10 h-100 lg:mt-16 w-full">
          <div>
            <h1 class="text-white text-4xl md:text-5xl xl:text-6xl font-bold mb-5 leading-tight">Bring your passion to life.
              Publish your ideas at no cost.
            </h1>
            <p class="text-blue-100 text-xl md:text-2xl leading-snug pt-5">Welcome to the Oplueas Publish. For Upcoming Content Writers
              
            </p>
            @auth

            <p></p>
            
            @else
            <a href="/register" class="px-8 py-4 bg-button-gradient text-white rounded inline-block mt-8 font-semibold">Sign
              Up to maka a post</a>
          </div>
          @endauth
        </div>
      </section>
    </div>