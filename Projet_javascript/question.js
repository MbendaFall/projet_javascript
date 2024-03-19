function checkAnswer(option, correctAnswer) {
    var options = document.querySelectorAll('.option');
    
    options.forEach(function(opt) {
        opt.classList.remove('correct', 'wrong');
    });

    if (option.textContent.trim() === correctAnswer) {
        option.classList.add('correct');
    } else {
        option.classList.add('wrong');
    }
}
document.addEventListener('DOMContentLoaded', function () {
    var options = document.querySelectorAll('.option');
    var scoreDisplay = document.getElementById('score');
    var score = getScoreFromLocalStorage() || 0;

    function checkAnswer(option, correctAnswer) {
        options.forEach(function(opt) {
            opt.classList.remove('correct', 'wrong');
        });

        if (option.textContent.trim() === correctAnswer && score < 20) {
            option.classList.add('correct');
            score += 5;
            scoreDisplay.textContent = score;
            setScoreToLocalStorage(score);
        } else {
            option.classList.add('wrong');
        }
    }

    options.forEach(function(option) {
        option.addEventListener('click', function() {
            var correctAnswer = this.getAttribute('data-correct-answer');
            checkAnswer(this, correctAnswer);
        });
    });

    function setScoreToLocalStorage(score) {
        localStorage.setItem('quizScore', score);
    }

    function getScoreFromLocalStorage() {
        return parseInt(localStorage.getItem('quizScore'));
    }

    // Vérifier si le score dépasse 20 et le ramener à 20
    if (score >=20) {
        score = 0;
        setScoreToLocalStorage(score);
    }

    // Afficher le score initial
    scoreDisplay.textContent = score;
});
