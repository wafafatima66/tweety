@extends('layouts.app')

@section('content')

   <h2>Explore Page</h2>
    

   <div>
        @foreach ($users as $user)

            <a href="{{ $user->path() }}" class="flex items-center mb-5">

                <img src="{{ $user->avatar }}" alt="" style="width: 50px; height:50px;" class="mb-4 rounded">

                <div class="ml-3">
                    <h4 class="font-bold">{{ '@'.$user->username }}</h4>
                </div>
            </a>
            
        @endforeach

    {{ $users->links() }}

</div>

   
@endsection
