<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in p-2" aria-labelledby="notificationMenu"  style="width: 250px;">
    @if ($notifications->count() > 0)
        @for ($index = 0 ; $index < $notifications->count(); $index++)
            <div class="p-2 dropdown-item">
                @if ($notifications[$index]->request_type == 'baptismal')
                <a href="{{route('baptismal.search', ['query' => $childNames[$index]->child_name])}}" class="dropdown-item">
                @else
                <a href="{{route('confirmation.search', ['query' => $childNames[$index]->child_name])}}" class="dropdown-item">
                @endif
                    <div class="card-title"><b>{{$notifications[$index]->consumer->fullName()}}</b></div>
                    <p class="card-text text-wrap">Requested a {{Str::title($notifications[$index]->request_type)}} certificate for {{$childNames[$index]->child_name}}</p>
                </a>
            </div>
        @endfor
    @else
        <div class="p-2 dropdown-item">
            No available notification
        </div>
    @endif
</div>
