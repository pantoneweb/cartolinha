@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                <h2 class="mb-5"><span>Escalações</span></h2>
            </div>
            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 text-right">
                {!! Button::primary('+ Nova Escalação')->asLinkTo(route('climb.create'))->extraSmall() !!}
            </div>
        </div>
        <div class="table-responsive">

            @foreach($departures as $d)
                @php
                    $total = 0;
                @endphp
                <table class="table">
                    <thead>
                    <tr>
                        <th width="48%" class="text-right">{{$d->home_team->name}}</th>
                        <th class="text-center">VS</th>
                        <th width="48%">{{$d->guest_team->name}}</th>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <small>{{\Carbon\Carbon::create($d->datetime_end)->format('d/m/Y H:i')}}</small>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($d->has_players as $player)
                        <tr>
                            <th class="text-right">
                                {{ $player->name }}

                                <img src="{{\Illuminate\Support\Facades\Storage::url("player/{$player->photo}")}}"
                                     width="50">
                            </th>
                            <td> =</td>
                            <td>
                                @foreach($player->activies($d->id)->get() as $activity)
                                    <span style="color: {{ ($activity->score < 0) ? 'red' : 'green' }};">
                                        {{ $activity->name }} = {{ $activity->score }} Pontos <br>
                                    </span>
                                    @php
                                        $total += $activity->score;
                                    @endphp
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="text-right">Pontuação final</th>
                        <td></td>
                        <td style="color: {{ ($total < 0) ? 'red' : 'green' }};">{{ $total }} Pontos</td>
                    </tr>
                    </tfoot>
                </table>
            @endforeach
        </div>
    </div>
@endsection