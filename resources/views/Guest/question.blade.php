<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Match</title>
    <link rel="stylesheet" href="{{ asset('CSS/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/Questions/body.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/footer.css') }}">
</head>

<body>
    <section>
        @include('../Common/header')
        @include('../Guest/Questions/body')
        @include('../Common/footer')
    </section>




    <script>
        do {
            // Get all question cards
            const questionCards = document.querySelectorAll('.question-card');

            // Loop through each card
            questionCards.forEach(card => {
                const question = card.querySelector('.question');
                const answer = card.querySelector('.answer');
                const expandBtn = card.querySelector('.expand-btn');

                // Toggle answer visibility when the card is clicked
                question.addEventListener('click', (e) => {
                    e.stopPropagation(); // Prevent card click event propagation

                    if (answer.classList.contains('show')) {
                        answer.classList.remove('show');
                        answer.classList.add('answer');
                        expandBtn.innerText = '+';
                    } else {
                        answer.classList.remove('answer');
                        answer.classList.add('show');
                        expandBtn.innerText = '-';
                    }
                });

                // Toggle the button text and answer visibility
                expandBtn.addEventListener('click', (e) => {
                    e.stopPropagation(); // Prevent card click event propagation

                    if (answer.classList.contains('show')) {
                        answer.classList.remove('show');
                        answer.classList.add('answer');
                        expandBtn.innerText = '+';
                    } else {
                        answer.classList.add('show');
                        answer.classList.remove('answer');
                        expandBtn.innerText = '-';
                    }
                });
            });
        } while (document.onload);
    </script>
</body>

</html>