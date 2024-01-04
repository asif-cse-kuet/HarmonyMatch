<section class="body">
    <div class="contact-form">
        <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
            <h2 class="form_header"> যোগাযোগ করুন </h2>
            <div>
                <label for="name">আপনার নাম</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">আপনার ইমেইল</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">মেসেজ / যা জানাতে চান</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <div>
                <button type="submit" id="submitBtn">Submit</button>
            </div>

        </form>
        <p class="success-message" id="submitMessage">Form submitted successfully!</p>
    </div>
</section>