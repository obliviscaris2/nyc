@extends('admin.master')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <form id="quickForm" method="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $contact->id }}">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <br>

                    <label for="name">{{ $contact->name }}</label>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <br>
                    <label for="email">{{ $contact->email }}</label>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <br>
                    <label for="phone">{{ $contact->phone }}</label>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <br>
                    <label for="message">{{ $contact->message }}</label>
                </div>
            </form>
        </div>
    </section>
@endsection
