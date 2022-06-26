<?php

namespace Hexlet\Code;

use Exception;
use function cli\prompt;
use function cli\line;

/**
 * @throws Exception
 */
function is_odd_or_not(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $ct = 3;
    while ($ct !== 0){
        $randomNum = random_int(1, 99);
        line('Question ' . $randomNum);
        $answer = prompt('Your answer');
        if ((strtolower($answer) === 'yes' && $randomNum % 2 !== 0) || (strtolower($answer) === 'no' && $randomNum % 2 == 0)) {
            line('Correct!');
            $ct--;
        } else {
            $anti = $answer === 'yes' ? 'no' : 'yes';
            line("'$answer' is wrong answer ;(. Correct answer was '$anti'");
            break;
        }
    }
    $ct == 0 ? line("Congratulations, $name!") : line("Let's try again, $name!");
}