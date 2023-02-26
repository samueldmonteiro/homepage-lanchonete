@extends('master.master')

@section('content')
    <section class="u-align-center u-clearfix u-section-7" id="carousel_b442">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Menu</h2>
        <p class="u-text u-text-2">You're gonna need two hands to hold 
our toasted buns. Our fresh, juicy burgers are served up medium-well 
with a side of fries and a whole lot of flavor.</p>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            
            @foreach($dishes as $dish)
              <div class="u-align-right u-container-style u-image u-list-item u-repeater-item u-shading u-video-cover u-image-6" data-image-width="996" data-image-height="389" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('{{Storage::url("$dish->cover")}}');">

              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-11">
                <div class="u-align-center u-black u-container-style u-group u-opacity u-opacity-35 u-video-cover u-group-6">
                  <div class="u-container-layout u-valign-middle u-container-layout-12">
                    <h4 class="u-text u-text-default u-text-13">{{$dish->name}}</h4>
                    <h6 class="u-text u-text-default u-text-palette-2-light-1 u-text-14">R$ {{$dish->priceBrl()}}</h6>
                    <a href="{{route('home')}}" class="u-active-palette-2-light-1 u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-1 u-palette-2-base u-radius-50 u-btn-6">add to cart</a>
                  </div>
                </div>
              </div>
              </div>
            @endforeach
           
          </div>
        </div>
        <p class="u-text u-text-default u-text-15">Images from <a href="https://www.freepik.com/photos/food" class="u-active-none u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-7">Freepik</a>
        </p>
      </div>
    </section>
  
@endsection