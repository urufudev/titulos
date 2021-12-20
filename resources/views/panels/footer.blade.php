<footer class="footer footer-light @if(isset($configData['footerType'])){{$configData['footerClass']}}@endif">
  <p class="clearfix mb-0">
    <span class="float-left d-inline-block">DRE AYACUCHO  </span>
    <span class="float-right d-sm-inline-block d-none">Informática &copy;
      <i class="bx bxs-terminal primary mx-50 font-small-5"></i>
      <a class="text-uppercase" target="_blank"> {{date('Y')}} </a>
    </span>
    @if($configData['isScrollTop'] === true)
    <button class="btn btn-primary btn-icon scroll-top" type="button">
      <i class="bx bx-up-arrow-alt"></i>
    </button>
    @endif
  </p>
</footer>
