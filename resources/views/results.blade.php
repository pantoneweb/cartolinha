@extends('layouts.site')

@section('content')
    <div class="container">

        <br>
        <br>
        <br>

        <h2><span>Resultados</span></h2>
        <hr>
        <br>
        <br>
        <br>

        <div class="table-responsive">
            @foreach($users as $user)
                @php
                    $departuresIds = \App\Models\UserHasDeparture::where('user_id', $user->user_id)->get()->pluck('departure_id');
                    $departures = \App\Models\Departure::whereIn('id', $departuresIds)->orderByDesc('datetime_end')->limit(1)->get();
                @endphp
                @foreach($departures as $d)
                    @php
                        $total = 0;
                    @endphp

                    <h2 style="margin: 0; padding: 0;">{{ \App\User::find($user->user_id)->name }} <br><small>{{ \App\User::find($user->user_id)->score }} Pontos</small></h2>

                    <table class="table">
                        <thead>
                        <tr>
                            <th width="48%" class="text-right"><h3>{{$d->home_team->name}}</h3></th>
                            <th class="text-center"><h3>VS</h3></th>
                            <th width="48%"><h3>{{$d->guest_team->name}}</h3></th>
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
                                <td></td>
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
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection