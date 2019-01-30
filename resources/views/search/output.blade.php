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
                    <th>Kat</th>
                    <th>Nr</th>
                    <th>Codes</th>
                    <th>Schlagwort</th>
                    <th>Frage</th>
                    <th>Antwort</th>
                    <th>Referenz</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($faqs as $faq)
                <tr>
                    <td title="{{ $faq->kategorie->kategorie }}"> {{ $faq->kategorie->kz }}</td>
                    <td>{{ $faq->position }}</td>
                    <td>{{ $faq->codes }}</td>
                    <td>{{ $faq->schlagwort }}</td>
                    <td>{{ $faq->frage }}</td>
                    <td>{{ $faq->antwort }}</td>
                    <td>{{ $faq->referenz }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
	Legende:
	
	@foreach ($kategorien as $k)
            {{ $k->kz }} - {{ $k->kategorie }} 
        @endforeach
        
        @else
                @if ($search)
                        Zum Suchbegriff {{$search}} wurde nichts gefunden.
                    @else
			<h4>Suchfunktion</h4> Sie können sowohl nach Codes als auch nach Suchbegriffen suchen. Geben Sie dafür einfach den Code oder den Begriff in das Suchfeld ein und bestätigen Sie mit ‚Enter‘ oder ‚FAQ Durchsuchen‘.
      			<h4>Anzeigen aller FAQ</h4> Bitte geben Sie im Suchfeld das Prozentzeichen % ein.
     			<h4>Logout</h4> Ein Logout ist nicht notwendig, da der Zugang auf einer einfachen Autorisierungsroutine basiert.
 
                    @endif
        @endif
    </div>
</div>
@endsection
