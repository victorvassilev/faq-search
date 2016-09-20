@extends('layouts.app')
@section('page_title', 'Add Faq')

@section('content')
<div class="container">
    <br /><br />
    <div class="widgetcontent">
        {{ Form::open(array('action' => 'AdminController@update','class'=>'stdform')) }}
        <input type="text" size="4" name="position" placeholder="Position" /><br /><br />
        <input type="text" name="codes" placeholder="Codes" /><br /><br />
        <input type="text" size="40" name="schlagwort" placeholder="Schlagwort" /><br /><br />
        <input type="text" size="140" name="frage" placeholder="Frage" /><br /><br />
        {{ Form::textarea('antwort', null , array('class' => 'span12 form-control', 'placeholder' => 'Antwort', 'rows' => '10' ))}}<br /><br />
        <input type="text" name="referenz" placeholder="Referenz" /><br /><br />
        <select name="kategorie_id" class="uniformselect" tabindex="2">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->kategorie }}</option>
            @endforeach
        </select>
          <br /><br />
        <button class="btn btn-primary" type="submit">Add FAQ</button>
        <a class="btn btn-link" href="{{ url('/admin/faq') }}">
            Abbrechen
        </a>
        {{ Form::close() }}
    </div>
</div>
@endsection
