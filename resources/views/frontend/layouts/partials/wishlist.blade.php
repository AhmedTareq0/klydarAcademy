@if(auth()->check() && (auth()->user()->hasRole('student')))
    <form class="d-inline-block" name="wishlist-form" action="{{ route('add-to-wishlist') }}" method="POST">
    @csrf
        <input type="hidden" name="course_id" value="{{ $course }}">
        <input type="hidden" name="price" value="{{ $price }}">
        <button type="submit" class="p-2">
            <i class="far fa-heart"></i>
            {{-- @lang('strings.frontend.general.add_to_wishlist') --}}
        </button>
    </form>
@endif
@if(!auth()->check())
    <a id="openLoginModal" data-target="#myModal" href="#" class="p-2 d-inline-block">
        <i class="far fa-heart"></i>
        {{-- @lang('strings.frontend.general.add_to_wishlist') --}}
    </a>
@endif

