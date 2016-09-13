@extends('layouts.basic')
@section('page_title', 'Search Form Page')

@section('content')
<div class="container">
    <br /><br />
 {{ Form::open(array('action' => 'Search\SearchController@output','class'=>'stdform')) }}
 <input type="text" name="search" placeholder="Enter your search here!" /><br /><br />
 <button type="submit" class="btn btn-sm btn-success">Search</button>
 {{ Form::close() }}
</div>