<?php declare(strict_types=1);

namespace Kata;

class Game
{
    private const HANDS = [
        'paper' => 'rock',
        'rock' => 'scissors',
        'scissors' => 'paper'
    ];

    public function play(string $player1, string $player2): string
    {

        if ($player1 === $player2) {
            return 'draw';
        }

        if(self::HANDS[$player1] === $player2){
            return 'player1';
        }

        return 'player2';
    }
}
