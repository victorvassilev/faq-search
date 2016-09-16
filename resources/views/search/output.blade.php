@extends('layouts.basic')
@section('page_title', 'Search Form Page')

@section('content')
<div class="container">
    <br /><br />
    
     
 {{ Form::open(array('action' => 'Search\SearchController@output','class'=>'stdform')) }}
 <input type="text" name="search" placeholder="Enter your search here!" /><br /><br />
 <button type="submit" class="btn btn-sm btn-success">Search</button>
 {{ Form::close() }}
    <br /><br />
    
    <div class="col-md-12">
        @if (count($faqs) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Codes</th>
                    <th>Schlagwort</th>
                    <th>Frage</th>
                    <th>Antwort</th>
                    <th>Kategorie</th>
                    <th>Referenz</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($faqs as $faq)
                <tr>
                    <td>{{ $faq->id }}</td>
                    <td>{{ $faq->codes }}</td>
                    <td>{{ $faq->schlagwort }}</td>
                    <td>{{ $faq->frage }}</td>
                    <td>{{ $faq->antwort }}</td>
                    <td>{{ $faq->kategorie->kategorie }}</td>
                    <td>{{ $faq->referenz }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        Bitte ein Suchwort eintragen.
        @endif
    </div>
</div>