<?php

namespace App\View\Components;

use App\Models\CertificateRequest;
use Illuminate\View\Component;

class NotificationDropDown extends Component
{
    public $counts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->counts =  CertificateRequest::all()->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification-drop-down');
    }
}
