<?php declare(strict_types=1);

namespace KataTests;

use Kata\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /** @test */
    public function player1_rock_win_player2_when_scissor(): void
    {
        $game = new Game();

        $result = $game->play();

        self::assertSame('player1', $result);
    }
}
