@extends('layouts.basic')
@section('page_title', 'Search Form Page')

@section('content')
<a href="{{ route('logout') }}">Logout</a><br /><br />
<div class="container">
     @if (Session::has('crud'))
        <div class="alert alert-success">
            {{ Session::get('crud') }}
        </div>
     @endif
    <br /><br />
     <div class="col-md-12">
       <a href="{{ route('admin/add') }}"<button type="button" class="btn btn-sm btn-success">Add New Faq Entry</button></a>
   <br /><br />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Schlagwort</th>
                    <th>Frage</th>
                    <th>Antwort</th>
                    <th>Kategorie</th>
                    <th>Referenz</th>
                    <th>Action</th>
                </tr>
            </thead>
 @if (count($faqs) > 0)
            <tbody>
                @foreach ($faqs as $faq)
                <tr>
                    <td>{{ $faq->id }}</td>
                    <td>{{ $faq->schlagwort }}</td>
                    <td>{{ $faq->frage }}</td>
                    <td>{{ $faq->antwort }}</td>
                    <td>{{ $faq->kategorie->kategorie }}</td>
                    <td>{{ $faq->referenz }}</td>
                    <td>
                    <a href="{{route('admin/edit',['id'=>$faq->id]) }}" class="editrow">Edit</a>&nbsp;&nbsp;|
                    <a href="{{route('admin/delete',['id'=>$faq->id]) }}" class="deleterow">Delete</a>
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