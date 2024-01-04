<section>
    <div class="nav">
        <div class="logo">
            <!-- <img src="https://pngimg.com/uploads/facebook_logos/facebook_logos_PNG19750.png" width="25px" height="auto" alt="facebook_logos" /> -->
            <x-page_logo class="block text-gray-800" />
        </div>

        <div class="options">
            <a href="{{ route('home') }}">হোম </a>
            <a href="{{ route('amader_somporke') }}"> আমাদের সম্পর্কে </a>
            <a href="{{ route('questions') }}">জিজ্ঞাসা</a>
            <a href="{{ route('nirdeshona') }}">নির্দেশনা</a>
            <a href="{{ route('contact') }}">যোগাযোগ</a>
        </div>

        <div class="log">
            <div>
                @if (Route::has('login'))
                <div>
                    @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                    <a href=" {{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register </a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </div>
</section>