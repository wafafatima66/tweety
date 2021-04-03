<div class="border border-gray-300 rounded-lg mt-4">
    @forelse ($tweets as $tweet)
        @include('tweet')

        @empty
        <p class="p-4">No tweets yet</p>
    @endforelse

    {{ $tweets->links() }}
</div>