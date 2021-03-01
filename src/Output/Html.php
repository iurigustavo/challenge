<?php


namespace App\Output;


use App\Interfaces\OutputInterface;

class Html implements OutputInterface
{

    /**
     * @param array $list
     */
    public function print(array $list): void
    {
        foreach ($list as $item) {
            echo $item, "<br />";
        }
    }
}