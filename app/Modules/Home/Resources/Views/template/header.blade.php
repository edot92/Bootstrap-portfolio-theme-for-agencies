
<!-- Header -->
<header>
  @if(Request::path()== 'home' )
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our Rental!</div>
            <div class="intro-heading">We are always serving you</div>
            {{-- <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a> --}}
        </div>
    </div>
  @else
  @endif
</header>
