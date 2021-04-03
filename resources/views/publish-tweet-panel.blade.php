<div class="border border-blue-400 rounded-lg px-8 py-6">
    <form action="/tweets" method="POST">
        @csrf
        <textarea name="body" class="w-full " placeholder="What's up doc?" required></textarea>

        <hr class="my-4">

        <footer class="flex justify-between px-4 py-3">
            <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full mr-4" width="50" height="50">
            <button type="submit" class="bg-blue-500 py-2 px-2 text-white rounded-lg shadow">Tweet-a-roo</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
    @enderror
</div>