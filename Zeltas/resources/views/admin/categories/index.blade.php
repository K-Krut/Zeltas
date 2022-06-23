@extends('layouts.admin-layout')
@section('title')
    {{ $pageTitle }}
@endsection
@section('content')
    <div class="logo app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th style="width: 70px">ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Parent</th>
                        <th style="width: 350px">Description</th>
                        <th>Featured</th>
                        <th>Order</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        @if ($category->id != 1)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->parent->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td class="text-center">
                                    @if ($category->featured == 1)
                                        <span>Yes</span>
                                    @else
                                        <span>No</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    {{ $category->order }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.index', $category->id) }}">EDIT<i
                                            class="fa fa-edit"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.index', $category->id) }}">DELETE<i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
{{--    <script type="text/javascript">$('#sampleTable').DataTable();</script>--}}
@endpush
