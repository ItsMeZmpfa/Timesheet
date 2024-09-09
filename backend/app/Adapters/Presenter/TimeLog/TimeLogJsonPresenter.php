<?php

namespace App\Adapters\Presenter\TimeLog;

use App\Adapters\ViewModels\JsonResourceViewModel;
use App\Domain\TimeLog\Interface\TimeLogOutputPort;
use App\Domain\ViewModel;
use App\Http\Resources\TimeLog\TimeLogCreatedFailResource;
use App\Http\Resources\TimeLog\TimeLogCreatedSuccessResource;

class TimeLogJsonPresenter implements TimeLogOutputPort
{

    /**
     * @inheritDoc
     */
    public function timeLogCreated(): ViewModel
    {
        return new JsonResourceViewModel(
            new TimeLogCreatedSuccessResource()
        );
    }

    /**
     * @inheritDoc
     */
    public function timeLogNotCreated(): ViewModel
    {
        return new JsonResourceViewModel(
            new TimeLogCreatedFailResource()
        );
    }
}
