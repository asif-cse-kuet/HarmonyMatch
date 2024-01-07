<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <section style="margin: 0; display:flex; flex-wrap:wrap; box-sizing:border-box; justify-content:center; align-item:center; text-align:center">
                        <form method="GET" action="{{ route('profiles_active.search') }}" class="search-container">
                            <div class="search-item">
                                <label for="gender" class="label-search">আমি খুঁজছি</label>
                                <select name="gender" id="gender">
                                    <option value="" class="opt"> সকল </option>
                                    <option value="male" class="opt"> পাত্রের বায়ডাটা </option>
                                    <option value="female" class="opt"> পাত্রীর বায়ডাটা </option>
                                </select>
                            </div>

                            <div class="search-item">
                                <label for="marital_status" class="label-search">বৈবাহিক অবস্থা</label>
                                <select name="marital_status" id="marital_status">
                                    <option value="" class="opt"> সকল </option>
                                    <option value="unmarried" class="opt"> অবিবাহিত </option>
                                    <option value="married" class="opt"> বিবাহিত </option>
                                    <option value="divorced" class="opt"> ডিভোর্সড </option>
                                    <option value="widow" class="opt"> বিধবা </option>
                                    <option value="Widower" class="opt"> বিপত্নীক </option>
                                </select>
                            </div>

                            <div class="search-item">
                                <label for="divisions" class="label-search">বিভাগ </label>
                                <select name="divisions" id="divisions">
                                    <option value="" class="opt"> সকল </option>
                                    <option value="dhaka" class="opt"> Dhaka (ঢাকা) </option>
                                    <option value="mymensingh" class="opt"> Mymensingh (ময়মনসিংহ) </option>
                                    <option value="chittagong" class="opt"> Chittagong (চট্টগ্রাম) </option>
                                    <option value="khulna" class="opt"> Khulna (খুলনা) </option>
                                    <option value="rajshahi" class="opt"> Rajshahi (রাজশাহী) </option>
                                    <option value="barisal" class="opt"> Barisal (বরিশাল) </option>
                                    <option value="rangpur" class="opt"> Rangpur (রংপুর) </option>
                                    <option value="sylhet" class="opt"> Sylhet (সিলেট) </option>
                                </select>
                            </div>


                            <div class="search-item">
                                <button class="opt">search</button>
                            </div>
                        </form>
                    </section>
                    @include('Guest.Home.search')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>