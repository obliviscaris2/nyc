


@extends('portal.layouts.master')


@section('content')

<div class="p-5">

    <h1 class="sec_title">{{ __($page_title) }}</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">{{ __("S.N.") }}</th>
            <th scope="col">{{ __("District") }}</th>
            <th scope="col">{{ __("Executive Name")}}</th>
            <th scope="col">{{ __("Address") }}</th>
            <th scope="col">{{ __("Phone No.") }}</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($committee as $cd)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $cd->district ?? '' }}</td>
                        <td>{{ $cd->name ?? '' }}</td>
                        <td>{{ $cd->address }}</td>
                        <td>{{ $cd->phone ?? '' }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection