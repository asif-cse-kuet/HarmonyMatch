    <!-- Body part -->
    <section class="body-background">
        <div class="body-part">
            <div class="center-text">
                <p style="color:#218dff">বাংলাদেশী ইসলামি</p>
                <p style="color:#ff559e">ম্যাট্রিমনি</p>

                <div class="floating">
                    <p>নিজ উপজেলায় দ্বীনদার পাত্রপাত্রী খোঁজ এখন সহজ </p>
                </div>
            </div>


            <div class="boxhadid">
                <div class="custom-box">
                    <p class="hadid">যে ব্যক্তি বিয়ে করলো সে তার অর্ধেক দ্বীন পূর্ণ করে ফেললো। বাকি অর্ধেকের জন্য সে আল্লাহকে ভয়
                        করুক। -</p>
                    <p class="hadidref">(বায়হাকী, শু’আবুল ঈমান –৫৪৮৬)</p>
                </div>
            </div>

            <!--Search Box-->
            <form method="GET" action="{{ route('profiles.search') }}" class="search-container">
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

        </div>
    </section>