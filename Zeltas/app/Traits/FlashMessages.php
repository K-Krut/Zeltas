<?php

namespace App\Traits;

use JetBrains\PhpStorm\ArrayShape;

trait FlashMessages
{
    /**
     * @var array
     */
    protected array $errorMessages = [];

    /**
     * @var array
     */
    protected array $infoMessages = [];

    /**
     * @var array
     */
    protected array $successMessages = [];

    /**
     * @var array
     */
    protected array $warningMessages = [];

    /**
     * @param $message
     * @param $type
     */
    protected function setFlashMessage($message, $type): void
    {
        $model = 'infoMessages';

        switch ($type) {
            case 'info': {
                $model = 'infoMessages';
            }
                break;
            case 'error': {
                $model = 'errorMessages';
            }
                break;
            case 'success': {
                $model = 'successMessages';
            }
                break;
            case 'warning': {
                $model = 'warningMessages';
            }
                break;
        }

        if (is_array($message)) {
            foreach ($message as $key => $value)
            {
                array_push($this->$model, $value);
            }
        } else {
            array_push($this->$model, $message);
        }
    }

    /**
     * @return array
     */
    protected function getFlashMessages(): array
    {
        return [
            'error'     =>  $this->errorMessages,
            'info'      =>  $this->infoMessages,
            'success'   =>  $this->successMessages,
            'warning'   =>  $this->warningMessages,
        ];
    }

    /**
     * Flushing flash messages to Laravel's session
     */
    protected function showFlashMessages(): void
    {
        session()->flash('error', $this->errorMessages);
        session()->flash('info', $this->infoMessages);
        session()->flash('success', $this->successMessages);
        session()->flash('warning', $this->warningMessages);
    }
}
