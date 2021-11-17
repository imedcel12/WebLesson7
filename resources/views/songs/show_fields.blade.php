<!-- Song Title Field -->
<div class="col-sm-12">
    {!! Form::label('Song_Title', 'Song Title:') !!}
    <p>{{ $songs->Song_Title }}</p>
</div>

<!-- Singer Field -->
<div class="col-sm-12">
    {!! Form::label('Singer', 'Singer:') !!}
    <p>{{ $songs->Singer }}</p>
</div>

<!-- Genre Field -->
<div class="col-sm-12">
    {!! Form::label('Genre', 'Genre:') !!}
    <p>{{ $songs->Genre }}</p>
</div>

<!-- Date Release Field -->
<div class="col-sm-12">
    {!! Form::label('Date_Release', 'Date Release:') !!}
    <p>{{ $songs->Date_Release }}</p>
</div>

