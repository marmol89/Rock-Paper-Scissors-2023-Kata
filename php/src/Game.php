<?php declare(strict_types=1);

namespace Kata;

class Game
{
    // private const HANDS = [
    //     'paper' => 'rock',
    //     'rock' => 'scissors',
    //     'scissors' => 'paper'
    // ];

    public function play(string $player1, string $player2): string
    {
        if ($player1 === 'paper' && $player2 === 'rock') {
            return 'player1';
        }

        if ($player1 === 'rock' && $player2 === 'scissors') {
            return 'player1';
        }

        if ($player1 === 'scissors' && $player2 === 'paper') {
            return 'player1';
        }


        return 'player2';
    }
}
