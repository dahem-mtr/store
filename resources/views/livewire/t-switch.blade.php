<div >



@if ($show == "table" )

    <livewire:table  :controller="$controller"/>
@endif

@if ($show == "info" )
<livewire:item-info :controller="$controller" :rowId="$rowId"/>

@endif


</div>
