<div id="snippet-watched">
    <a class="watched ajax {{$isWatched ? 'active' : ''}}" 
       href="?watched=true" 
       data-history="false"
       data-position="bottom"
       data-delay="50" 
       data-tooltip="{{$isWatched ? __('strings.remove_from_watched') : __('strings.watched')}}">
        <i class="material-icons">remove_red_eye</i>
    </a>
    <script>
        $(document).ready(function () {
            $('.watched').tooltip({delay: 50});
        });
    </script>
</div>