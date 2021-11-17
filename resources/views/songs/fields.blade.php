<!-- Song Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Song_Title', 'Song Title:') !!}
    {!! Form::text('Song_Title', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Singer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Singer', 'Singer:') !!}
    {!! Form::text('Singer', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Genre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Genre', 'Genre:') !!}
    {!! Form::text('Genre', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Date Release Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date_Release', 'Date Release:') !!}
    {!! Form::text('Date_Release', null, ['class' => 'form-control','id'=>'Date_Release']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Date_Release').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush