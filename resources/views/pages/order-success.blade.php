@extends('layouts.web')

@section('title', 'Order Success')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="container mx-auto">

        <div class="m-4 grid lg:grid-cols-6">
            <div class="lg:col-start-2 lg:col-span-4 bg-gradient-to-r from-cyan-400 to-blue-600 text-white py-3 px-7 rounded-t-lg">
                <p class="font-bold title-font text-center text-2xl ">Thank you for choosing Us</p>
            </div>
            <div class="lg:col-start-2 lg:col-span-4 bg-white shadow-md rounded-b-lg p-5 border border-gray-300 overflow-x-auto">
                <table class="min-w-full text-center">
                    <thead class="border-b">
                        <tr class="text-blue-600">
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Order ID
                            </th>
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Subject
                            </th>
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Deadline
                            </th>
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Place at
                            </th>
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Status
                            </th>
                            <th scope="col" class="text-sm font-medium px-6 py-4">
                                Charges
                            </th>
                        </tr>
                    </thead class="border-b">
                    <tbody>
                        <tr class="bg-white border-b">
                            <td>{{ '#' . $order->id ?? '-' }}</td>
                            <td>{{ $order->subject_area ?? "-" }}</td>
                            <td>{{ $order->deadline ?? "-" }}</td>
                            <td>{{ showDate($order->created_at) ?? '-' }}</td>
                            <td>
                                @if ($order->is_complete)
                                    {{ 'Completed' }}
                                @else
                                    {{ 'Incomplete' }}
                                @endif
                            </td>
                            <td>{{ addCurrency($order->total_price) ?? '-' }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center mt-5 text-blue-600">
                    <h3 class="">You'll receive an order verification Whatsapp text from our Team.</h3>
                </div>
            </div>
        </div>

    </section>

@endsection
