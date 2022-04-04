<?php

namespace App\View\Components;

use App\Helpers\ChildHelper;
use App\Models\CertificateRequest;
use Illuminate\View\Component;

class Notification extends Component
{

    public $notifications;
    public $childNames;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->notifications = CertificateRequest::all();
        $this->childNames = ChildHelper::getChildNames($this->notifications);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification');
    }
}
