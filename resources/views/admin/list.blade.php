@extends('layouts.app')
@section('page_title', 'Administration FAQ')

@section('content')
<div class="container">
     @if (Session::has('crud'))
        <div class="alert alert-success">
            {{ Session::get('crud') }}
        </div>
     @endif
    <br /><br />
     <div class="col-md-12">
       <a href="{{ route('admin/add') }}"<button type="button" class="btn btn-sm btn-success">Neuer Eintrag</button></a>
   <br /><br />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kategorie</th>
                    <th>Codes</th>
                    <th>Schlagwort</th>
                    <th>#</th>
                    <th>Frage</th>
                    <th>Antwort</th>
                    <th>Referenz</th>
                    <th>Aktion</th>
                </tr>
            </thead>
 @if (count($faqs) > 0)
            <tbody>
                @foreach ($faqs as $faq)
                <tr>
                    <td>{{ $faq->kategorie->kz }}</td>
                    <td>{{ $faq->codes }}</td>
                    <td>{{ $faq->schlagwort }}</td>
                    <td>{{ $faq->id }}</td>
                    <td>{{ $faq->frage }}</td>
                    <td>{{ $faq->antwort }}</td>
                    <td>{{ $faq->referenz }}</td>
                    <td>
                    <a href="{{route('admin/edit',['id'=>$faq->id]) }}" class="editrow">Bearbeiten</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
             @else
        No results found! Sorry
        @endif
        </table>
       
    </div>
</div>
@endsection