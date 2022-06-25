@extends('layouts.layout-collection')

@section('title-block')
    Search
@endsection

@section('title')
    Search
@endsection

@section('collection-block')
    <div class="container-fluid">
        <form method="get" action="{{route('search_result')}}" class="search-form login-form">
            @csrf
            <div class="sign-in-htm">
                <div class="group">
                    <input id="query" name="query" type="text" class="input" value="{{request()->input('query')}}">
                </div>
            </div>
        </form>
    </div>
@endsection
