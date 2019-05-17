<br>
@foreach($teams as $team)
    @if($x == 0)
    <div class="row">
        @endif
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">{{ $team ->name }}</label><br>
                @foreach($team->players as $idx => $player)
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-1">
                                        {{ $idx + 1 }}
                                    </div>
                                    <div class="col-lg-3">
                                        <input value="{{ $player->position->name }}" class="form-control" readonly>
                                    </div>
                                    <div class="col-lg-4">
                                        <input value="{{ $player->name }}" class="form-control" readonly>
                                    </div>
                                    <div class="col-lg-4">
                                        <select name="departure[{{ $team->id }}][{{ $player->id }}][]" class="form-control container-player">
                                            @foreach($activities as $activity)
                                                <option value="{{ $activity->id }}">{{ $activity->name }} ({{ $activity->score }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-block add" data-select="departure[{{ $team->id }}][{{ $player->id }}][]">+</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @php
            $x++;
        @endphp
        @if($x == 2)
    </div>
    <br>
    <br>
        @php
            $x = 0;
        @endphp
    @endif
@endforeach