<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="width: 100%;" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" style="width: 100%;" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Divisions -->
        <div class="mt-4 block font-medium text-sm text-gray-700">
            <label for="division">Division</label><br>
            <select name="division" id="division" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" style="width: 100%;">
                <option value="dhaka">Dhaka</option>
                <option value="chittagong">Chittagong</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="khulna">Khulna</option>
                <option value="sylhet">Sylhet</option>
                <option value="barisal">Barisal</option>
                <option value="rangpur">Rangpur</option>
            </select>
        </div>

        <!-- Marital Status -->
        <div class="mt-4 block font-medium text-sm text-gray-700">
            <label for="marital_status">Marital Status</label><br>
            <select name="marital_status" id="marital_status" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" style="width: 100%;">
                <option value="unmarried"> Unmarried </option>
                <option value="married"> Married </option>
                <option value="divorced"> Divorced </option>
                <option value="widow"> Widow </option>
                <option value="widower"> Widower </option>
            </select>
        </div>

        <!-- Gender -->
        <div class="mt-4 block font-medium text-sm text-gray-700">
            <label for="gender">Gender</label><br>
            <select name="gender" id="gender" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" style="width: 100%;">
                <option value="male"> Male </option>
                <option value="female"> Female </option>
                <option value="others"> Others </option>
            </select>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" type="password" name="password" required autocomplete="new-password" style="width: 100%;" />
            <x-input-error :messages="$errors->get('password')" />
        </div>


        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" style="width: 100%;" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>