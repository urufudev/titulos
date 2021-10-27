@if ($paginator->hasPages())
<div class="table-responsive">
                
    <div class="dataTables_wrapper dt-bootstrap4 no-footer ">
        <div class="row ">
            <div class="col-sm-12 col-md-5  ">
               <div class="dataTables_info font-medium-1 " id="example1_info" role="status" aria-live="polite">
                <p> 
                    Mostrando
                    <span class="font-weight-bold">{{ $paginator->firstItem() }}</span>
                    al
                    <span class="font-weight-bold">{{ $paginator->lastItem() }}</span>
                    de
                    <span class="font-weight-bold">{{ $paginator->total() }}</span>
                    resultados.
                </p>
               </div>
            </div>
            <div class="col-sm-12 col-md-7">
               <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                <ul class="pagination  font-medium-1">
                    @if ( ! $paginator->onFirstPage())
                        {{-- First Page Link --}}
                        <li class="paginate_button page-item">
                            <button type="button"  class="page-link" wire:click="gotoPage(1)">
                                <i class="bx bx-chevrons-left"></i>
                            </button>
                        </li>
                        @if($paginator->currentPage() > 2)
                        {{-- Previous Page Link --}}
                        
                        <li class="paginate_button page-item">
                            <button type="button"  class="page-link" wire:click="previousPage">
                                <i class="bx bx-chevron-left"></i>
                            </button>
                        </li>
                        
                        @endif
                    @endif
            
                    <!-- Pagination Elements -->
                    @foreach ($elements as $element)
                        <!-- Array Of Links -->
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                <!--  Use three dots when current page is greater than 3.  -->
                                @if ($paginator->currentPage() > 3 && $page === 2)
                                <li class="paginate_button page-item">
                                    <button type="button"  class="page-link" >...</button>
                                </li>
                                @endif
            
                                <!--  Show active page two pages before and after it.  -->
                                @if ($page == $paginator->currentPage())
                                    
                                    <li class="paginate_button page-item active">
                                        <button type="button" class="page-link" >{{ $page }}</button>
                                    </li>
                                @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2)
                                <li class="paginate_button  page-item">
                                    <button type="button"   class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                                </li>    
                               
                                @endif
            
                                <!--  Use three dots when current page is away from end.  -->
                                @if ($paginator->currentPage() < $paginator->lastPage() - 2  && $page === $paginator->lastPage() - 1)
                                <li class="paginate_button  page-item">
                                    <button type="button"  class="page-link" >...</button>
                                </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    
                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        @if($paginator->lastPage() - $paginator->currentPage() >= 2)
                            
                        <li class="paginate_button  page-item">
                            <button type="button"  class="page-link" wire:click="nextPage" rel="next">
                                <i class="bx bx-chevron-right"></i>
                            </button>
                        </li>
                        
                        @endif
                        
                        <li class="paginate_button  page-item">
                            <button type="button"  class="page-link" wire:click="gotoPage({{ $paginator->lastPage() }})">
                                <i class="bx bx-chevrons-right"></i>
                            </button>
                        </li>
                        
                    @endif
                    </ul>
               </div>
            </div>
         </div>
    </div>
</div>


   
@endif