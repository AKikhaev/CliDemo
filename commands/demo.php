<?php // Long demo test

use AKikhaev\Cli\cliUnit;
use AKikhaev\Terminal\Terminal;
use AKikhaev\CliRemainCalc\CliRemainCalc;

/**
 * demo -  Demonstrate
 */
class demo extends cliUnit {
    protected $concurrentLimit = 2; // only one concurrent process can started in the same time

    /** Check left space, notify when necessary
     * @param int $n
     */
    public function longProcessAction(int $n = 100): void{
        Terminal::background(Terminal::GREEN);
        Terminal::color(Terminal::VIOLET);

        $calc = new CliRemainCalc($n); // you can put here big array or any countable interfaced object

        for ($i = 0;$i<$n;$i++) {
            usleep(100000);
            $calc->plot(); // actually it will shows one time per 5 sec or seldom
        }

        Terminal::logInfo('Completed');
    }

}