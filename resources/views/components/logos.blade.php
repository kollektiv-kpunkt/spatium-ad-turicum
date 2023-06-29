<?php
$logos = glob(public_path('images/orgas/*'));
?>
<div class="sat-signator-logos grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-8 mb-20">
    @foreach ($logos as $logo)
    <div class="flex justify-center items-center">
        <img src="{{asset('images/orgas/' . basename($logo))}}" alt="" class="h-16 md:h-20 object-contain">
    </div>
    @endforeach
</div>
