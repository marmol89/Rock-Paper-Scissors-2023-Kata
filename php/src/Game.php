<?php declare(strict_types=1);

namespace Kata;

class Game
{
    public function play(string $player1, string $player2): string
    {
        if ($player1 === 'paper' ) {
            return 'player1';
        }
        if ($player2 === 'rock') {
            return 'player2';
        }
        
        return 'player1';
    }
}
