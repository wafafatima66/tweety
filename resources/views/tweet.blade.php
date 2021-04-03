<div class="flex p-4 border-b border-b-gray-200">

<a href="{{ route('profile', $tweet->user) }}">
    <div class="mr-4 flex-shrink-0">
        <img src="{{ $tweet->user->avatar }}" alt="" class="rounded-full mr-4" width="50" height="50">
    </div>
</a>
    <div>
        <a href="{{ route('profile', $tweet->user) }}"> <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5> </a>

        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

      {{--   <div class="flex">
            <div class="flex items-center mr-3">
                <i class="fas fa-thumbs-up text-gray-500 mr-2"></i>
                <span class="text-xs text-gray-400"></span>
            </div>

            <div class="flex items-center">
                <i class="fas fa-thumbs-down text-gray-500 mr-2"></i>
                <span class="text-xs text-gray-400"></span>
            </div>
        </div> --}}

    </div>
</div>