@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="div mb-3">
                    <h1 class="text-center mt-2">Clients List</h1>
                </div>
             <div class="table-responsive">
                <table class="table table-bordered" border="1" method="POST" action="{{ route('ElectronicsMart.clienttable') }}">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Amount</th>
                            <th>Currency</th>
                            <th>Description</th>
                            <th>Source</th>
                            <th>Receipt Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($charges as $charge)
                            <tr>
                                <td>{{ $charge->id }}</td>
                                <td>{{ $charge->amount }}</td>
                                <td>{{ $charge->currency }}</td>
                                <td>{{ $charge->description }}</td>
                                <td>{{ $charge->source }}</td>
                                <td>{{ $charge->receipt_email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
            </div>
        </div>
    </main>
@endsection
