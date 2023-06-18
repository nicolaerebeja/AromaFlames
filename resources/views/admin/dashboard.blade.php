@extends('admin.layout')
@section('content')

    <div class="container-fluid py-4">
        @if($orderWithouotId)
            <div class="alert alert-danger text-white mb-3" role="alert">
                <strong>Attention!</strong> a new order request was detected!
            </div>
        @endif

        <div class="row mt-5">
            <div class="col-xl-8 col-lg-7">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">fmd_bad</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Ord. Assigned</p>
                                    <h4 class="mb-0">{{$statusCounts['assigned']}}</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                {{--                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than--}}
                                {{--                                    last week</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">hourglass_top</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Ord. WIP</p>
                                    <h4 class="mb-0">{{$statusCounts['work in progress']}}</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                {{--                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than--}}
                                {{--                                    last week</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">arrow_outward</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Ord. Pending</p>
                                    <h4 class="mb-0">{{$statusCounts['pending']}}</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                {{--                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than--}}
                                {{--                                    last week</p>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 p-3">
                        <div class="card">
                            <div class="card-header p-3 pb-0">
                                <h6 class="mb-0">Calendar</h6>
                            </div>
                            <div class="card-body border-radius-lg p-3">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-lg-5 mt-lg-0 mt-4">
                <div class="row">
                    <div class="card">
                        <div class="card-header p-3 pb-0">
                            <h6 class="mb-0">Next events</h6>
                        </div>
                        <div class="card-body border-radius-lg p-3">
                            @foreach ($orders as $order)
                                @if ($order->delivery_date >= now())
                                    <div class="d-flex mt-4">
                                        <div class="icon icon-shape bg-gradient-dark shadow text-center">
                                            <i class="material-icons opacity-10 pt-1">attach_money</i>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <a href="{{ route('order.show', $order->id) }}"><h6 class="mb-1 text-dark text-sm">{{ $order->customer->name }}</h6></a>

                                                <span class="text-sm">{{ $order->delivery_date }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            down
        </div>
    </div>
@endsection

@section('script')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });

            // Datele evenimentelor din baza de date
            var eventsData = [
                    @foreach ($orders as $order)
                {
                    title: '{{ $order->customer->name }}',
                    start: '{{ $order->delivery_date }}',
                    url: '{{ route('order.show', $order->id) }}',
                    color: @if ($order->status == 'assigned')'red'
                    @elseif ($order->status == 'answered')'green'
                    @elseif ($order->status == 'work in progress')'blue'
                    @elseif ($order->status == 'pending')'orange'
                    @endif
                },
                @endforeach
            ];

            // Adaugă fiecare eveniment în calendar
            eventsData.forEach(function (eventData) {
                calendar.addEvent(eventData);
            });

            calendar.render();
        });

    </script>
@endsection
