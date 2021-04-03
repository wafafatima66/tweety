<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">Explore</a>
    </li>
    <li>
        <a href="" class="font-bold text-lg mb-4 block">Notifications</a>
    </li>
    <li>
        <a href="" class="font-bold text-lg mb-4 block">Messages</a>
    </li>
    <li>
        <a href="" class="font-bold text-lg mb-4 block">Bookmark</a>
    </li>
    <li>
        <a href="" class="font-bold text-lg mb-4 block">Lists</a>
    </li>
    <li>
        <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    <li>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="font-bold text-lg mb-4 block" >Logout</button>
        </form>
        
    </li>
</ul>
{{--  --}}