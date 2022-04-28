@extends('layouts.web')

@section('title', 'Revision Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

    <main class="">
        <h4 class="page-bar">
            Revision Policy
        </h4>
        <section class="container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
            <p class="my-2">
                These are the points necessary to go through when you are asking for revision:
            </p>
            <ul>
                <li>Please make sure that whatever comments are shared by your professor should be shared with us within the 30 days of assignment submission.</li>
                <li>We will provide the revision within 24 hours if there is any mistake from our writer, or if there is any plagiarism.</li>
                <li>Refund is not applicable if the student fails to provide any information; necessary to complete the assignment, any additional Word Count will be done with extra charges.</li>
                <li>The total chances of revision will be “three-time” please review properly each and everything once asking for the revision.</li>
            </ul>
        </section>
    </main>

@endsection
