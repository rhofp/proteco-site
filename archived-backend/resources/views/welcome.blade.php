@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        @isset($classes)

        @foreach($classes as $class)

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src={{ asset('img/cursos/' . $class->course->image )}} alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$class->course->name}}</h4>
                    <p class="card-text">Fecha: {{ date("d/m/Y", strtotime($class->startDate)) . ' al ' . date("d/m/Y", strtotime($class->endDate))}} <br>  Horario: {{ $class->startTime . ' a ' . $class->endTime }}</p>
                </div>
                <div class="card-footer">
                    <a class="card-link" href={{ asset('temarios/' . $class->course->syllabus )}}>Temario</a>
                    <a class="card-link" href=#course-{{ $class->id }} data-toggle="modal" data-target=#course-{{ $class->id }} >Detalles</a>
                    @guest
                    <a class="card-link" href="{{ route('login') }}">Comprar</a>
                    @else
                    <form action="{{ route('cart.store') }}" method="post" class="card-link d-inline">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $class->id }}">
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <button type="submit" class="btn btn-link"><i class="fas fa-cart-plus"></i> </button>
                    </form>
                    @endguest
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id=course-{{ $class->id }}  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{$class->course->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <h5 class="d-inline">Antecedentes:</h5>
                        <span class="d-inline">{{$class->course->background }}</span>
                    </div>
                    <div>
                        <h5 class="d-inline">Material:</h5>
                        <span class="d-inline">{{$class->course->material }}</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div>
                        <h5 class="d-inline">Fecha:</h5>
                        <span class="d-inline">{{ date("d/m/Y", strtotime($class->startDate)) . ' al ' . date("d/m/Y", strtotime($class->endDate))}}</span>
                    </div>
                    <div>
                        <h5 class="d-inline">Horario:</h5>
                        <span class="d-inline">{{ $class->startTime . ' a ' . $class->endTime }}</span>
                    </div>
                    <div>
                        <h5 class="d-inline">Días:</h5>
                        <span class="d-inline">{{ $class->days }}</span>
                    </div>
                    <div>
                        <h5 class="d-inline">Lugar:</h5>
                        <span class="d-inline">{{ $class->place->description }}</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div>
                        <h5 class="d-inline">Cupo disponible:</h5>
                        <span class="d-inline">{{ $class->currentQuota }}</span>
                    </div>
                    <div>
                        <h5 class="d-inline">Costo UNAM:</h5>
                        <span class="d-inline">${{ $class->cost1 }}</span>
                    </div>
                    <div>
                        <h5 class="d-inline">Costo alumno externo:</h5>
                        <span class="d-inline">${{ $class->cost2 }}</span>
                    </div>
                    <div>
                        <h5 class="d-inline">Costo público general:</h5>
                        <span class="d-inline">${{ $class->cost3 }}</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Comprar</button>
                </div>
            </div>
        </div>
        </div>
        @endforeach
        @endif

    </div>
    <!-- /.row -->
</div>
@endsection
