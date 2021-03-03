<div class="flex mb-2">
    <div>
        <img src="{{ $message->user->present()->avatar() ?? '/images/default.png' }}" class="w-10 h-10 rounded-full" />
    </div>
    <div>
        <div>
            {{ $message->user->present()->name() }}
        </div>
        <div class="bg-blue-200 p-2 rounded-lg">
            {{ $message->body }}
        </div>
    </div>
    {{--            {{ $message->body }} {{ $message->user->present()->name }}--}}
</div>
