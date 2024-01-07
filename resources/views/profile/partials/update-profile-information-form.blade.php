<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        @isset($user)

        @if ($user)
        @php
        $incompleteProfile = false;
        $nullableFields = ['father_name', 'mother_name','contact','siblings'];
        @endphp

        @foreach($nullableFields as $field)
        @if($user->$field === null)
        @php
        $incompleteProfile = true;
        break;
        @endphp
        @endif
        @endforeach

        @if($incompleteProfile)
        <p class="profile-item" style="color:red;">Profile is incomplete!</p>
        @endif
        @endif
        @endisset

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>


        <!-- Gender -->
        <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <x-text-input id="gender" name="gender" type="text" class="mt-1 block w-full" :value="old('gender', $user->gender)" required autofocus autocomplete="gender" />
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
        </div>


        <!-- division -->
        <div>
            <x-input-label for="division" :value="__('division')" />
            <x-text-input id="division" name="division" type="text" class="mt-1 block w-full" :value="old('division', $user->division)" required autofocus autocomplete="division" />
            <x-input-error class="mt-2" :messages="$errors->get('division')" />
        </div>


        <!-- marital_status -->
        <div>
            <x-input-label for="marital_status" :value="__('marital_status')" />
            <x-text-input id="marital_status" name="marital_status" type="text" class="mt-1 block w-full" :value="old('marital_status', $user->marital_status)" required autofocus autocomplete="marital_status" />
            <x-input-error class="mt-2" :messages="$errors->get('marital_status')" />
        </div>



        <!-- father_name -->
        <div>
            <x-input-label for="father_name" :value="__('father_name')" />
            <x-text-input id="father_name" name="father_name" type="text" class="mt-1 block w-full" :value="old('father_name', $user->father_name)" required autofocus autocomplete="father_name" />
            <x-input-error class="mt-2" :messages="$errors->get('father_name')" />
        </div>


        <!-- mother_name -->
        <div>
            <x-input-label for="mother_name" :value="__('mother_name')" />
            <x-text-input id="mother_name" name="mother_name" type="text" class="mt-1 block w-full" :value="old('mother_name', $user->mother_name)" required autofocus autocomplete="mother_name" />
            <x-input-error class="mt-2" :messages="$errors->get('mother_name')" />
        </div>


        <!-- contact -->
        <div>
            <x-input-label for="contact" :value="__('contact')" />
            <x-text-input id="contact" name="contact" type="text" class="mt-1 block w-full" :value="old('contact', $user->contact)" required autofocus autocomplete="contact" />
            <x-input-error class="mt-2" :messages="$errors->get('contact')" />
        </div>


        <!-- siblings -->
        <div>
            <x-input-label for="siblings" :value="__('siblings')" />
            <x-text-input id="siblings" name="siblings" type="text" class="mt-1 block w-full" :value="old('siblings', $user->siblings)" required autofocus autocomplete="siblings" />
            <x-input-error class="mt-2" :messages="$errors->get('siblings')" />
        </div>




        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>