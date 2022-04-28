@extends('layouts.web')

@section('title', 'Terms & Conditions')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <main class="">
        <h4 class="page-bar">
            Terms & Conditions
        </h4>
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <p class="my-2">
                This is to inform all our respectable customers that we offer all kinds of Essays, term papers, dissertation, and thesis help. So, before you opt to take any service from us, please ensure to fulfill the following requirements:
            </p>
            <ul>
                <li>Make sure that all the payment is done in advance, you have complete freedom to review our website, check our sample, and trust us fully before placing the order.</li>
                <li>It is requested that while sharing assignment information, students should keep in mind that they are sharing all the details to complete the assignment.</li>
                <li>In case of cancellation, the order must be canceled within 24 hours of booking in the urgent assignment, there is no cancellation and refund.</li>
                <li>We follow a selected payment procedure, so please corporate with us and we guarantee that it is highly secure and there is not any fraud.</li>
            </ul>
        </section>
    </main>

@endsection
