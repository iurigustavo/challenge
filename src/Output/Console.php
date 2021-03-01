<?php


namespace App\Output;


use App\Interfaces\OutputInterface;

class Console implements OutputInterface
{

    /**
     * @param array $list
     */
    public function print(array $list): void
    {
        foreach ($list as $item) {
            echo $item, PHP_EOL;
        }
    }
}