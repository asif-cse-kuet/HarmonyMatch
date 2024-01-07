<section>

    @isset($profiles)
    @php
    $profile_count = 0;
    $nullableFields = ['father_name', 'mother_name','contact','siblings'];
    @endphp
    @if (count($profiles) > 0)
    <h1 class="profile_container">Profiles that matches to your search: </h1>
    <div class="profile_container">
        @foreach ($profiles as $profile)
        @php
        $completeProfile = true;
        @endphp
        @foreach($nullableFields as $field)
        @if(($profile->$field) === NULL)
        @php
        $completeProfile = false;
        @endphp
        @endif
        @endforeach

        @if($completeProfile)
        @php
        $profile_count = $profile_count + 1;
        @endphp
        <form class="profile" method="GET" action="{{ route('profile.details') }}">
            @csrf
            <div class="profile-upper">
                <input type="hidden" name="profileId" value="{{ $profile->id }}">
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
            </div>
            <div class="profile_details">
                <button class="btn_profile">Details</button>
            </div>
        </form>
        @endif
        @endforeach




    </div>
    @elseif(!$profile_count)
    <p>No Profile found</p>
    @else
    <p>No Profile found</p>
    @endif


    @endisset


</section>