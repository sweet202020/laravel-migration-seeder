@extends('layouts.app')

@section('content')
<h2 class="text-uppercase text-center p-5">treni in partenza</h2>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-5">
        @forelse($trains as $train)
        <div class="col my-3">
            <div class="card text-uppercase p-3">
                <h2>{{$train->agency}}</h2>
                <p>
                    stazione di partenza: {{$train->start_station}} ore: <strong>{{$train->departure_time}}</strong>
                </p>
                <p>
                    stazione di arrivo: {{$train->end_station}} ore: <strong>{{$train->arrive_time}}</strong>
                </p>
                <h4>codice treno: <strong>{{$train->train_code}}</strong></h4>
                <div>carrozza: <strong>{{$train->carriage}}</strong></div>
                <div>
                    stato del treno : @if($train->is_delete)
                    <span>il treno è cancellato</span>
                    @else
                    <span>
                        @if($train->is_in_time)
                        <span>il treno è in orario</span>
                        @else <span>il treno è in ritardo</span>
                    </span>
                    @endif
                    @endif

                </div>
            </div>

            <!-- /.card -->
        </div>
        @empty
        <div class="col">
            non ci sono treni in partenza
        </div>
        @endforelse
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@endsection