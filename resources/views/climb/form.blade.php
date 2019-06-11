<form method="post" action="{{ route('climb.store') }}">
    @csrf

    <label>Partida:</label>
    <select name="departure_id" class="form-control" required>
        <option value="">Selecione</option>
        @foreach($departures as $departure)
            <option value="{{ $departure->id }}">
                {{ $departure->home_team->name . ' X ' . $departure->guest_team->name }}
                ({{ \Carbon\Carbon::create($departure->datetime_start)->format('d/m/Y H:i') }})
            </option>
        @endforeach
    </select>

    <br>
    <br>

    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-6">
            @foreach($teams as $team)
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <img class="img-fluid rounded" style="height: 30px;"
                             src="{{ \Illuminate\Support\Facades\Storage::url("team/{$team->photo}") }}"
                             lazy="loaded">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <h5 class="mb-3"><span>{{ $team->name }}</span></h5>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="40"></th>
                        <th>Jogador</th>
                        <th width="150">Posição</th>
                        <th width="50"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($team->players as $idx => $player)
                        <tr>
                            <td><img class="img-fluid rounded" style="width: 100%;"
                                     src="{{ \Illuminate\Support\Facades\Storage::url("player/{$player->photo}") }}"
                                     lazy="loaded"></td>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->position->name }}</td>
                            <td>
                                <button type="button"
                                        class="btn btn-sm btn-primary btn-block add-player player-{{ $player->id }}"
                                        data-select="{{ $player->id }}">
                                    +
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <br>
            @endforeach
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-6">

            <h5 class="mb-3"><span>Minha escalação</span></h5>

            <table class="table table-bordered" id="playes">
                <thead>
                <tr>
                    <th width="40"></th>
                    <th>Jogador</th>
                    <th width="150">Posição</th>
                    <th width="50"></th>
                </tr>
                </thead>
                <tbody>
                <tr id="message">
                    <td colspan="4">Nenhum jogador escalado até o momento.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="submit">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>