@if($errors->any())
<div class="card-panel ptc">
    <span class="white-text">
        @foreach($errors->all() as $error)
        {{$error}} <br>
        @endforeach
    </span>
</div>
@endif