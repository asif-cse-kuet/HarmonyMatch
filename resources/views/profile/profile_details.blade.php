<x-app-layout>
    @isset($profiles)
    @if ($profiles)
    <h1 class="profile_container">Profiles that matches to your search: </h1>
    <div class="profile_container">
        @php
        $incompleteProfile = false;
        $nullableFields = ['father_name', 'mother_name','contact','siblings'];
        @endphp

        @foreach($nullableFields as $field)
        @if($profiles->$field === null)
        @php
        $incompleteProfile = true;
        @endphp
        @endif
        @endforeach

        @if($incompleteProfile)
        <p class="profile-item" style="color:red;">Profile is incomplete!</p>
        @endif
        <form class="profile_d" action="{{ route('login') }}" method="get">
            @csrf
            <div class="profile-background">
                <img src="https://wallpapers.com/images/hd/profile-picture-background-10tprnkqwqif4lyv.jpg" alt="Profile Background Image">
            </div>
            <div class="profile-details">
                @if ($profiles->gender === 'male')
                <div class="profile-pic">
                    <img src="{{ asset('Components/male_pic.svg') }}" alt="Image" width="50%" height="auto">
                </div>
                @else
                <div class="profile-pic">
                    <img src="{{ asset('Components/female_pic.svg') }}" alt="Image" width="50%" height="auto">
                </div>
                @endif



                <div class="details">
                    <h1>User's Name</h1>
                    <p class="detail-label">Name </p>
                    <p class="detail-value">{{ $profiles->name }}</p>
                    <p class="detail-label">Gender</p>
                    <p class="detail-value">{{ $profiles->gender }}</p>
                    <p class="detail-label">Marital Status</p>
                    <p class="detail-value">{{ $profiles->marital_status }}</p>
                    <p class="detail-label">Division</p>
                    <p class="detail-value"> {{ $profiles->division }}</p>
                    <p class="detail-label">Email</p>
                    <p class="detail-value">{{ $profiles->email }}</p>
                    <p class="detail-label">Father's Name</p>
                    <p class="detail-value">{{ $profiles->father_name }}</p>
                    <p class="detail-label">Mother's Name</p>
                    <p class="detail-value">{{ $profiles->mother_name }}</p>
                    <p class="detail-label">Contact</p>
                    <p class="detail-value">{{ $profiles->contact }}</p>
                    <p class="detail-label">Siblings</p>
                    <p class="detail-value">{{ $profiles->siblings }}</p>
                </div>
            </div>
            <div class="profile_details">
                <button class="btn_profile">Dashboard</button>
            </div>

        </form>

    </div>
    @else
    <p>No Profile found</p>
    @endif

    @else
    <p>Server Error, Id not found</p>
    @endisset

</x-app-layout>