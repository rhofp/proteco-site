@extends('layouts.app')

@section('content')

@if(isset($message))
<div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{$message}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
@endif

<div class="container">
    <div class="row">
      <div class="col-lg-9 p-4 bg-white rounded shadow-sm mb-5">

        @if( Cart::count() > 0)
        <!-- Shopping cart table -->
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="border-0 bg-light">
                  <div class="p-2 px-3 text-uppercase">Mis cursos</div>
                </th>

              </tr>
            </thead>
            <tbody>
              @foreach ( Cart::content() as $item )
              <tr>
                <th scope="row" class="border-0">
                  <div class="p-2">
                    <img src={{ asset('img/cursos/' . $item->model->course->image )}} width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{ $item->name }}</a></h5>
                      <span class="text-muted font-weight-normal font-italic d-block">Fecha: 10/11/2018 al 01/01/1970 </span>
                      <span class="text-muted font-weight-normal font-italic d-block">Horario: {{ $item->model->startTime . ' a ' . $item->model->endTime }} </span>
                      <span class="text-muted font-weight-normal font-italic d-block">Días: {{ $item->model->days }} </span>
                    </div>
                  </div>
                </th>
                <td class="border-0 align-middle"><strong>$ {{ $item->price }}.00</strong></td>
                <td class="border-0 align-middle">
                  <form class="d-inline" action="{{ route('cart.destroy',$item->rowId )}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-link"><i class="fa fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- End -->
        @else
          <p>Aún no tienes ningún curso agregado.</p>
        @endif
      </div>
    </div>

    <div class="row py-5 p-4 bg-white rounded shadow-sm">
      <div class="col-lg-6">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Pasos para inscribirte en los cursos de PROTECO</div>
        <div class="p-4">
          <ol>
            <li>AGREGA todos los cursos que desees inscribir.</li>
            <li>VERIFICA los datos de los cursos que inscribiste</li>
            <li>click en el botón de GENERAR COMPROBANTE.</li>
            <li>Realiza tu pago en cajas.</li>
            <li>Entrega tus papales en PROTECO al menos 72 horas antes del inicio del curso.</li>
          </ol>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">COMPROBANTE </div>
        <div class="p-4">
          <ul class="list-unstyled mb-4">
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted"> Subtotal </strong><strong>${{ Cart::subtotal() }}</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Descuento</strong><strong>${{session()->get('cart_extras')['discount']}}</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
              <h5 class="font-weight-bold">${{ session()->get('cart_extras')['total'] }}</h5>
            </li>
          </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Generar comprobante</a>
        </div>
      </div>
    </div>

</div>
@endsection
