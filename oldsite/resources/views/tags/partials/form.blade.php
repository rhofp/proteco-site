<div class="row">
    <div class="col l6 m6 s12">
        <div class="input-field">
            {!! Form::select('course_id', $courses) !!}
            {!! Form::label('course_id', 'Curso') !!}
        </div>
    </div>
    <div class="col l6 m6 s12">
        <div class="input-field">
            {!! Form::select('type_id', $classestypes) !!}
            {!! Form::label('type_id', 'Tipo de clase') !!}
        </div>
    </div>
    <div class="col l6 m6 s12">
        <div class="input-field">
            {!! Form::select('place_id', $places) !!}
            {!! Form::label('place_id', 'Lugar') !!}
        </div>
    </div>
    <div class="col l6 m6 s12">
        <div class="input-field">
            {!! Form::select('semester_id', $semesters) !!}
            {!! Form::label('semester_id', 'Semestre') !!}
        </div>
    </div>
    <div class="col l3 m6 s12">
        <div class="input-field">
            {!! Form::date('startDate', null, ['class' => 'datepicker']) !!}
            {!! Form::label('startDate', 'Fecha de inicio') !!}
        </div>
    </div>
    <div class="col l3 m6 s12">
        <div class="input-field">
            {!! Form::date('endDate', null, ['class' => 'datepicker']) !!}
            {!! Form::label('endDate', 'Fecha de termino') !!}
        </div>        
    </div>
    <div class="col l3 m6 s12">
        <div class="input-field">
            {!! Form::time('startTime', null, ['class' => 'timepicker', 'id' => 'startTime']) !!}
            {!! Form::label('startTime', 'Hora de inicio') !!}
        </div>
    </div>
    <div class="col l3 m6 s12">
        <div class="input-field">
            {!! Form::time('endTime', null, ['class' => 'timepicker' , 'id' => 'endTime']) !!}
            {!! Form::label('endTime', 'Hora de termino') !!}
        </div>        
    </div>
    <div class="col l6 m6 s12">
        <div class="input-field">
            {!! Form::select('days[]', $days, null, ['multiple' => 'multiple']) !!}
            {!! Form::label('days', 'Días') !!}
        </div>
    </div>
    <div class="col l6 m6 s12">
        <div class="input-field">
            {!! Form::number('maxQuota', null) !!}
            {!! Form::label('maxQuota', 'Cupo máximo') !!}
        </div>
    </div>
    <div class="col l4 m6 s12">
        <div class="input-field">
            {!! Form::number('cost1', null) !!}
            {!! Form::label('cost1', 'Costo UNAM') !!}
        </div>
    </div>
    <div class="col l4 m6 s12">
        <div class="input-field">
            {!! Form::number('cost2', null) !!}
            {!! Form::label('cost2', 'Costo alumno externo') !!}
        </div>
    </div>
    <div class="col l4 m6 s12">
        <div class="input-field">
            {!! Form::number('cost3', null) !!}
            {!! Form::label('cost3', 'Costo público general') !!}
        </div>
    </div>
</div>
{!! Form::button($submitButton, ['class' => 'btn ptc waves-effect waves-light', 'type' => 'submit']) !!}
