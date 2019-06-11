<form method="post" action="{{ route('departure.store') }}">
    @csrf
    <br>
    @foreach($teams as $team)
        @if($x == 0)
            <div class="row">
                @endif
                <div class="col-lg-5">

                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-3">
                            <img class="img-fluid rounded" style="height: 60px;"
                                 src="{{ \Illuminate\Support\Facades\Storage::url("team/{$team->photo}") }}"
                                 lazy="loaded">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-9">
                            <h2 class="mb-3"><span>{{ $team->name }}</span></h2>
                            <div class="form-group">
                                <input type="number" name="departure[{{ $team->id }}][gols]" class="form-control"
                                       placeholder="Quantidade de gols">
                            </div>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th width="40"></th>
                            <th>Jogador</th>
                            <th>Posição</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($team->players as $idx => $player)
                            <tr style="background: #f2f2f2;">
                                <td rowspan="2"><img class="img-fluid rounded" style="width:80px; height: 110px;"
                                                     src="{{ \Illuminate\Support\Facades\Storage::url("player/{$player->photo}") }}"
                                                     lazy="loaded"></td>
                                <td width="80%">{{ $player->name }}</td>
                                <td>{{ $player->position->name }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="departure[{{ $team->id }}][{{ $player->id }}][]"
                                            class="form-control container-player">
                                        <option value="">Selecione</option>
                                        @foreach($activities as $activity)
                                            <option value="{{ $activity->id }}">{{ $activity->name }}
                                                ({{ $activity->score }} Pontos)
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary btn-block add"
                                            data-select="departure[{{ $team->id }}][{{ $player->id }}][]">
                                        +
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @php
                    $x++;
                @endphp
                @if($x == 2)
            </div>
            <hr>
            @php
                $x = 0;
            @endphp
        @endif
        @if($x == 1)
            <div class="col-lg-2" style="text-align: center;">
                <h2 class="mb-5"><span>VS</span></h2>
            </div>
        @endif
    @endforeach
    <div class="submit">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>