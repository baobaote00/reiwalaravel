<div class="slideshow-container">
    @foreach ($banner as $value)
        <div class="mySlides">
            <img src="{{ asset('images/ReiwaHouse_logo_final.svg') }}" style="width:100%; height:400px;">
            <div style="z-index: 10; position: absolute; width: 100%; text-align: center; top: 40%; color: red;">
                <span class="sider-text-color">{!! $value['title'] !!}</span>
            </div>
        </div>
    @endforeach
  
    <br>

    <div style="text-align:center">
        @for ($i = 1; $i < count($banner); $i++)
            <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span>
        @endfor
    </div>
</div>
