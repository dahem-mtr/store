<div wire:init="load">

    @if ( !$readyToLoad )
    @include('dash.components.loading')
    @else

    <div class="card ">
        <div class="card-header">
            <h5 class="card-title"> {{ __("dash/min.{$table['title']}") }} </h5>
        </div>

        <div class="card-body">
            <div class="row">

                <div class="form-group mx-sm-3 mb-2">
                    <input wire:model.debounce.500ms="search" class="form-control" type="search" placeholder="بحث ...">
                </div>
                <div class="col-sm-1">
                    <div class="loader" wire:loading> </div>

                </div>
            </div>



            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>

                            @if ( count($table['rows']) > 0 )
                            @foreach ($table['columns'] as $column)
                            <th>{{  __("dash/components/table.{$column}")}}</th>
                            @endforeach
                            <th scope="col">{{ __('dash/components/table.actions') }}</th>

                            @else
                            <div class="row  justify-content-center align-items-center">
                                <p class=".align-self-center"> {{ __('dash/components/table.there-is-no-data') }}</p>
                            </div>
                            @endif

                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($table['rows'] as $row)
                        <tr>
                            @foreach ($table['columns'] as $column)
                            @if(!empty($table['columnTypes']) and in_array($column, $table['columnTypes'])) 
                            <td>
                            <img style="height: 100px; width:100px;" src="{{ asset('dash/assets/img/avatars/6.jpg') }}" alt="user@email.com">
                            </td>
                            @else
                            <td>{{$row[$column]}}</td>

                            @endif
                            @endforeach
                            <td>
                                <div class="dropdown ">
                                    <button class="btn btn-defult dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="c-icon cil-options"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <button class="dropdown-item" wire:click="$emitTo('t-switch', 'updateShow','info','{{$row['id']}}')">{{ __('dash/components/table.show') }}</button>
                                        <button class="dropdown-item" wire:click="$emitTo('t-switch', 'updateShow','info','{{$row['id']}}')">{{ __('dash/components/table.edit') }}</button>
                                        <button class="dropdown-item" wire:click="$emitTo('t-switch', 'updateShow','info','{{$row['id']}}')">{{ __('dash/components/table.delete') }}</button>
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </table>
                @if(!empty($table['links'])) {{$table['links']}} @endif
            </div>


        </div>
    </div>




    @endif

</div>