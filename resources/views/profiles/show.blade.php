@extends('layouts.app')

@section('content')

     <header class="mb-3 ">

        <div class="relative">
            <img src="/images/1.jpg" alt="banner" class="mb-6" style="width: 100%;height:100%">
        
            <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute "  style="left:50%; transform:translateX(-50%); bottom:-60px ; height:200px; width:200px">
        </div>

     <div class="flex justify-between items-center mb-3">
         <div>
             <h2 class="font-bold text-2xl mb-1">{{ $user->name }}</h2>
             <p class="text-sm">Joined  {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</p>
         </div>

         <div class="flex">
            @can('edit', $user)
                
            

                 <a href="{{ $user->path('edit') }}" class="py-2 px-4 text-black rounded-full border border-gray-500 text-sm ml-2">Edit Profile</a>

                 @endcan
             
             @if (auth()->user()->isNot($user))
                <form action="{{ route('follow', $user->username) }}" method="post">
                    @csrf
                    <button type="submit"  class="bg-blue-500 py-2 px-4 text-white rounded-full shadow text-sm">
                    {{ auth()->user()->following($user)?'Unfollow Me':'Follow Me' }}</button>
                </form>
            @endif
            
         </div>
     </div>

     <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere, iste quia iusto eligendi minima perspiciatis debitis laborum maxime fuga voluptas explicabo asperiores tenetur vitae omnis quae sequi molestias architecto officiis expedita iure corporis fugiat odio. Perferendis error aspernatur delectus, est distinctio, ut neque non repellendus facere voluptatum, minima dicta dolorum.</p>

     

    
    </header>


      @include('timeline' ,[
          'tweets'=> $tweets
      ])
@endsection
