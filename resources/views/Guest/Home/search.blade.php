<section>

    @isset($profiles)
    @if (count($profiles) > 0)
    <h1 class="profile_container">Profiles that matches to your search: </h1>
    <div class="profile_container">
        @foreach ($profiles as $profile)
        <div class="profile">
            <div class="profile-upper">
                @if ($profile->gender === 'male')
                <div>
                    <img src="{{ asset('Components/male_pic.svg') }}" alt="Image" width="50%" height="auto">
                </div>
                @else
                <div>
                    <img src="{{ asset('Components/female_pic.svg') }}" alt="Image" width="50%" height="auto">
                </div>
                @endif
                <p class="profile-item">Name: {{ $profile->name }}</p>
                <p class="profile-item">Gender: {{ $profile->gender }}</p>
                <p class="profile-item">Marital Status: {{ $profile->marital_status }}</p>
                <p class="profile-item">Division: {{ $profile->division }}</p>
            </div>

            <div class="profile-lower">
                <p class="profile-item">Email: {{ $profile->email }}</p>
                <p class="profile-item">Price: {{ $profile->martital_status }}</p>
            </div>
            <div class="profile_detais">
                <button class="btn_profile">Details</button>
            </div>
        </div>
        @endforeach

    </div>
    @else
    <p>No products found</p>
    @endif
    @endisset

</section>