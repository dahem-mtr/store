<div >



@if ($show == "table" )

<livewire:table  :controller="$controller"/>

@elseif ($show == "info" )
<livewire:item-info :controller="$controller" :rowId="$rowId"/>

@elseif ($show == "create" )
<livewire:create :controller="$controller"  />
@endif


</div>
