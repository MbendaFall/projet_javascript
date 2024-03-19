<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_question0.css">
    <title>Question 3</title>
</head>
<body>
    <div class="container">
        <section class="quiz-section">
            <div class="quiz-box">
                <h1> Welcome to Quizz Time !</h1>
                <div class="quiz-header">
                    <span>Tester votre culture générale !</span>
                    <span class="header-score">  Score: <span id="score">0</span> / 20</span>
                </div>
                <h2 class="question-text"> Quelle est la capitale de la Russie ?</h2>

                <div class="option-list">
                    <div class="option" onclick="checkAnswer(this, 'C. Moscou')">
                        <span>A. Kalmoukie </span>
                    </div> 
                    <div class="option" onclick="checkAnswer(this, 'C. Moscou')">
                        <span>B. Kiev</span>
                    </div>
                    <div class="option" onclick="checkAnswer(this, 'C. Moscou')" data-correct-answer="C. Moscou">
                        <span>C. Moscou</span>
                    </div>
                </div>
                <div class="quiz-footer">
                    <span class="question-total">3 of 4 questions</span>
                    <button class="next-btn"><a href="question4.php">Next</a></button>
                </div>
            </div>
        </section>
    </div>
    <script src="question.js"></script>
</body>
</html>