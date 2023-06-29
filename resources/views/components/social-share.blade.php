<div class="sat-social-share mt-12">
    <div class="mt-4 sat-social-share__grid grid md:grid-cols-2 gap-2 md:gap-3">
        @foreach (__("sat.share.buttons") as $medium => $button)
        <a href="/share/{{$medium}}" target="_blank" class="sat-social-share__button sat-button @if($loop->last) md:col-span-2 @endif" data-share-type="{{$medium}}">
            {{$button}}
        </a>
        @endforeach
    </div>
</div>
