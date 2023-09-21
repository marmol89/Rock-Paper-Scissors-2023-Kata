<?php declare(strict_types=1);

namespace KataTests;

use Kata\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /** @test */
    public function player1_rock_win_when_player2_scissor(): void
    {
        $game = new Game();

        $result = $game->play('rock', 'scissors');

        self::assertSame('player1', $result);
    }

    /** @test */
    public function player2_rock_win_when_player1_scissor(): void
    {
        $game = new Game();

        $result = $game->play('scissors', 'rock');

        self::assertSame('player2', $result);
    }


    /** @test */
    public function player1_paper_wins_when_player2_rock(): void
    {
        $game = new Game();

        $result = $game->play('paper', 'rock');

        self::assertSame('player1', $result);
    }
    
}
