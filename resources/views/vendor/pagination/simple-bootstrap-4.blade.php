@if ($paginator->hasPages())
    <nav>
    <div class="d-flex justify-content-end">
    <ul class="pagination">
           

           {{-- Next Page Link --}}
           @if ($paginator->hasMorePages())
               <li class="page-item">
                   <a class=" btn btn-success" href="{{ $paginator->nextPageUrl() }}" rel="next">Next Question <i class="fas fa-angle-double-right"></i> </a>
               </li>
           @else
               <a href="{{route('front.thankyou',request()->route()->roll)}}" class="btn">
               <li class="page-item " aria-disabled="true">
                   <span class="btn btn-success">Finish <i class="fas fa-angle-double-right"></i></span>
               </li>
               </a>
           @endif
       </ul>
    </div>

       
    </nav>
@endif
