<div class="col s12 m6 l4">
    <div class="card">
        <div class="card-image">
            <div class="focus">
                <img src="{{ $show->fanart()->getSrc(374) }}" class="focus" alt="{{$show->translation($layout['lang'])->title}} ">
            </div>
            <a href="{{ $show->url($layout['lang'])}}"
               class="btn-floating halfway-fab waves-effect waves-light red">
                <i class="material-icons">add</i>
            </a>
        </div>
        <div class="card-content">
            <span class="card-title truncate">{{ $show->translation($layout['lang'])->title }}&nbsp;</span>
            <div class="row truncate">
                <p class="truncate"></p>
            </div>
            <div class="row truncate">
                <div class="col s12 m6 l6">
                    <div class="chip">
                        {{ $show->rating }}
                        <i class="chip-icon material-icons">star_border</i>
                    </div>
                    @if($show->network() !== null)
                    <div class="chip">
                        {{ $show->network()->translation()->value }}
                        <i class="chip-icon material-icons">tv</i>
                    </div>
                    @endif
                    <div class="chip">
                        {{ $show->runtime }} min
                        <i class="chip-icon material-icons">timer</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>