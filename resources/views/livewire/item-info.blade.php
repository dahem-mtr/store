<div wire:init="load">
    @if ( !$readyToLoad ) @include('dash.components.loading') @else
    <div class="col-md-12">
        <div class="row pb-3">
            <button
                class="btn btn-primary"
                wire:click="$emitTo('t-switch', 'updateShow','table')"
            >
                {{ __("dash/components/table.back") }}
            </button>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    {{ __("dash/components/table.information") }}
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($data['columns'] as $column)
                    <div class="col-sm-3 pb-3">
                        <div class="row pr-2 pl-2">
                            <p class="font-weight-bold">
                                {{ __("dash/components/table.{$column}") }} :
                            </p>
                        </div>
                        @if(!empty($data['columnTypes'][$column]) and $data['columnTypes'][$column] === 'img' ) 
                        <img
                            style="height: 100px; width: 100px"
                            src="{{ asset('dash/assets/img/avatars/6.jpg') }}"
                        />
                        @else
                        {{ $data["row"][$column] }}

                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endif
