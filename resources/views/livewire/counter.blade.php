<div style="text-align: center">
    @if ($count >0) 
    <h1>{{ $count }}</h1>

    @endif
    <button wire:click="$emitTo('counter', 'set')">+</button>

</div>