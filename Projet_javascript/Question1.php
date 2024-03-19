<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_question0.css">
    <title>Question 1</title>
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
                <h2 class="question-text"> Quelle est la capitale du Sénégal ?</h2>

                <div class="option-list">
                    <div class="option" onclick="checkAnswer(this, 'C. Dakar') ">
                        <span>A. Kedougou</span>
                    </div>
                    <div class="option" onclick="checkAnswer(this, 'C. Dakar')">
                        <span>B. Mbour</span>
                    </div>
                    <div class="option" onclick="checkAnswer(this, 'C. Dakar') " data-correct-answer="C. Dakar">
                        <span>C. Dakar</span>
                    </div>
                </div>
                <div class="quiz-footer">
                    <span class="question-total">1 of 4 questions</span>
                    <a href="question2.php"> <button class="next-btn"> Next</button></a>
                </div>
            </div>
        </section>
    </div>

    <script src="question.js"></script>
</body>
</html>
