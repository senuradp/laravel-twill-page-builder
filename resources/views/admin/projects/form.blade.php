{{--resources/views/admin/projects/form--}}
@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'description',
    'label' => 'Description',
    'maxlength' => 100
    ])

    <a17-fieldset title="Tasks" id="tasks" :open="true">
        @formField('repeater', ['type' => 'tasks'])
    </a17-fieldset>
@stop
