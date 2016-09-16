@extends('layouts.app')
@section('page_title', 'Add Faq')

@section('content')
    <a href="{{ route('logout') }}">Logout</a><br /><br />
<div class="container">
    <br /><br />
    <div class="widgetcontent">
        {{ Form::open(array('action' => array('AdminController@update',$faq->id),'class'=>'stdform')) }}
        <input type="text" name="position" value="{{ $faq->position }}"/><br /><br />
        <input type="text" name="codes" value="{{ $faq->codes }}"/><br /><br />
        <input type="text" name="schlagwort" value="{{ $faq->schlagwort }}" /><br /><br />
        <input type="text" name="frage" value="{{ $faq->frage }}" /><br /><br />
        {{ Form::textarea('antwort', $faq->antwort , array('class' => 'span12 form-control', 'rows' => '10' ))}}<br /><br />
        <input type="text" name="referenz" value="{{ $faq->referenz }}" /><br /><br />
        <select name="kategorie_id" class="uniformselect" tabindex="2">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if ($category->id == $faq->kategorie_id) selected @endif >{{ $category->kategorie }}</option>
            @endforeach
        </select>
          <br /><br />
        <button class="btn btn-primary" type="submit">Update FAQ</button>
        {{ Form::close() }}
    </div>
</div>
@endsection