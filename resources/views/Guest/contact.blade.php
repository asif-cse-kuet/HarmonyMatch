<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Match</title>
    <link rel="stylesheet" href="{{ asset('CSS/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/Contact/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/footer.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <section>
        @include('../Common/header')
        @include('../Guest/Contact/body')
        @include('../Common/footer')
    </section>


    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                // Get form data
                var formData = $(this).serializeArray();
                formData.push({
                    name: "_token",
                    value: "{{ csrf_token() }}"
                });

                // Send form data asynchronously using AJAX
                $.ajax({
                    type: 'POST',
                    url: "{{route('contact.store')}}", // Form action URL
                    data: formData,
                    success: function(response) {
                        $('#contactForm')[0].remove(); // Reset the form
                        $('#submitMessage').show(); // Show success message
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>