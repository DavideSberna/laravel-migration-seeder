@extends('layouts.app')

@section('content')



<div class="pe-5 ps-5 pt-5 pb-5">
    <div class="table-responsive">
        <div class="pb-3">
            <h3>Situazone ritardi/cancellazioni</h3>
        </div>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
              <th>Treni totali</th>
              <th>In ritardo</th>
              <th>Cancellati</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-uppercase text-danger fw-bold">{{ $totalTrain }}</td>
                <td class="text-uppercase text-danger fw-bold">{{ $delayCount }}</td>
                <td class="text-uppercase text-danger fw-bold">{{ $deleteCount }}</td>
            </tr>

        </tbody>
      </table>
    </div>
</div>
<div class="pe-5 ps-5 pt-5 pb-5">
    <div class="table-responsive">
        <div class="pb-3">
            <h3>Treni in ritardo</h3>
        </div>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            @foreach($delayTrain->first()->getAttributes() as $delay => $value)
              <th>{{ $delay }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach($delayTrain as $delay)
            <tr>
              @foreach($delay->getAttributes() as $value)
              @if ($value === 0)
              <td class="text-uppercase text-danger fw-bold">In ritardo</td>
                @else
                <td>{{ $value }}</td>
                @endif
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

@endsection



