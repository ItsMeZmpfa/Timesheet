<?php

namespace App\Domain\TimeLog\Interface;

use App\Domain\ViewModel;

interface TimeLogOutputPort
{
    /**
     *
     * @return ViewModel
     */
    public function timeLogCreated(): ViewModel;

    /**
     *
     * @return ViewModel
     */
    public function timeLogNotCreated(): ViewModel;
}
