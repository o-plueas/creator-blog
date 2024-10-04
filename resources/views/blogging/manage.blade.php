

<x-layout>

  <section class="relative bg-gray-100 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-16 lg:py-32 mt-16 ">
      <div class="grid grid-cols-2 border-2  bg-button-gradient lg:-mx-8 my-2 lg:px-16 xl:px-40 2xl:px-64 py-16">

        @unless($blogging->isEmpty())
        @foreach($blogging as $blog)
        <!-- <div class="w-full lg:w-1/2 lg:px-8 mt-5"> -->
        <div class="flex justify-between  space-x-6 mt-4 p-2 border-2 m-4 mt-6 rounded-lg">

        
        
          <h3>{{$blog->title}}</h3>
          <i>{{$blog->qualification}}</i>
          <i>{{auth()->user()->name}}</i>


          

        </div>
        <div class="flex justify-between  space-x-6 mt-4 p-2 mt-6 border-2 m-4 rounded-lg">
        <a href="/blogging/{{$blog->id}}/edit" class="bg-white py-3 px-5 rounded">
          <i class="fa-solid fa-pencil mx-1 text-blue-600"></i>Edit
        </a>

        <form action="/blogging/{{$blog->id}}" method="POST">
          @csrf 
          @method('DELETE')
          <button class="bg-red-600 text-white py-3 px-5 rounded"><i class="fa-solid fa-trash mx-1 text-blue-600"></i> Delete</button>
        </form>

      </div>

          @endforeach
          @else 

          <p>No Post found</p>

          @endunless

          



      </div>

      
    </section>



</x-layout>