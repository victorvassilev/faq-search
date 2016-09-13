@extends('layouts.basic')
@section('page_title', 'Search Form Page')

@section('content')
<div class="container">
    <br /><br />
    <div class="col-md-12">
        @if (count($faqs) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Schlagwort</th>
                    <th>Frage</th>
                    <th>Antwort</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($faqs as $faq)
                <tr>
                    <td>{{ $faq->id }}</td>
                    <td>{{ $faq->schlagwort }}</td>
                    <td>{{ $faq->frage }}</td>
                    <td>{{ $faq->antwort }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        No results found! Sorry
        @endif
    </div>
</div>