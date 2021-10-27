@if ($sortField !== $field)
<div class="float-right text-bold-600 ">
    <i class="bx bx-sort"></i>
    
</div>
@elseif ($sortAsc)
<div class="float-right">
    <i class="bx bx-sort-up"></i>
    
</div>

@else
<div class="float-right">
    <i class="bx bx-sort-down"></i>
    
</div>
@endif