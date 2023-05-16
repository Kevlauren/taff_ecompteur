@extends('layouts.sbeeagt')

@section('content')
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
        Launch demo modal
    </button> --}}

    <!-- Modal -->
    <div class="modal hide fade in" id="visiteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle Visite</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <select name="nom" id="nom" class="form-control">
                        @foreach ($demandeurs as $demandeur)
                            <option value="{{ $demandeur->nom }}">{{ $demandeur->nom }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="modal-body">
                    <select name="prenom" id="prenom" class="form-control">
                        @foreach ($demandeurs as $demandeur)
                            <option value="{{ $demandeur->prenom }}">{{ $demandeur->prenom }}</option>
                        @endforeach

                    </select>
                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">



        <!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Calendrier') }}</h1>
                </div>
            </div>
            <div class="card-body">
                <div id='calendar'></div>
            </div>
        </div>


        <!-- Content Row -->

    </div>
@endsection


@push('style-alt')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endpush

@push('script-alt')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers : {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });



            // page is now ready, initialize the calendar...
            // var events = {!! json_encode($events) !!};
            var visite = @json($events);
            console.log(visite);

            $('#calendar').fullCalendar({
                // put your options and callbacks here
                //   events: events,
                //   defaultView: 'agendaWeek'
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay',
                },
                events: visite,
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDays) {
                    $('#visiteModal').modal('toggle');
                    $('#saveBtn').click(function () {
                        var nom = $('#nom').val();
                        var prenom = $('#prenom').val();
                        var start_time = moment(start).format('YYYY-MM-DD');
                        var finish_time = moment(end).format('YYYY-MM-DD');



                        $.ajax({
                            url : "{{ route('agentsbee.visites.store') }}",
                            type : "POST",
                            datatype : 'json',
                            data : { nom, prenom, start_time, finish_time},
                            success:function(response){
                                console.log(response);

                            },
                            error:function(error){
                                
                            }
                        });                   

                    
                        
                    });
                }

            })
        })
    </script>
@endpush
