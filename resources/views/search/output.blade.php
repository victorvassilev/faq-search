@extends('layouts.app')
@section('page_title', 'LBR FAQ')


 @section('search')
 {{ Form::open(array('action' => 'Search\SearchController@output','class'=>'stdform', 'style'=>"padding-top: 11px;")) }}
 <input type="text" name="search" placeholder="Suchwort" />
 <button type="submit" class="btn btn-sm btn-success">FAQ durchsuchen</button>
 {{ Form::close() }}
@endsection

@section('content')
    <div class="container">
        <br />

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
                @if ($search)
                        Zum Suchbegriff {{$search}} wurde nichts gefunden.
                    @else
                        Bitte ein Suchwort eintragen.
                    @endif
        @endif
    </div>
</div>
@endsection