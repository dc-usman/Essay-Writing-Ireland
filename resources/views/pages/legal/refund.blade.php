@extends('layouts.web')

@section('title', 'Refund Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

    <main class="">
        <h4 class="page-bar">
            Refund Policy
        </h4>
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <p class="my-2">
                Please go through the refund policy clearly before placing an order.
            </p>
            <ul>
                <li>With the 12 hours if the request of cancellation is done, then only the assignment can be canceled.</li>
                <li>In case of any missing data from the client which may affect the assignment quality will not be refunded.</li>
                <li>Yes, if we miss the deadline so we are liable to pay you back.</li>
                <li>If there are slight mistakes in the assignment, we have a revision policy, and a refund is not applicable in this case.</li>
            </ul>
        </section>
    </main>

@endsection
