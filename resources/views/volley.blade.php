<section>
    @foreach ($data as $match)
         <div class="content {{ $match['already'] ? 'already' : '' }}">
            <div class="title">
                <span>{{ $match['date'] }}</span>
                <h2>{{ $match['local'] }} - {{ $match['visitor'] }}</h2>
                <p>Rendez-vous {{ $match['meet']!="" ? $match['start'] : "à définir" }}</p>
                <p>Début du match {{ $match['start']!="" ? $match['start'] : "à définir" }}</p>
            </div>
            <div class="team">
                <div>
                    <h3>COACH(S)</h3>
                    <p>
                    @foreach ($match['coachs'] as $joueur)
                        @if ($joueur[1])
                            {{$joueur[0]}},
                        @endif
                    @endforeach
                    </p>
                </div>
                <div>
                    <h3>TITULAIRES</h3>
                    <p>
                    @foreach ($match['team'] as $joueur)
                        @if ($joueur[1] && $joueur[2] == 1)
                            {{$joueur[0]}},
                        @endif
                    @endforeach
                    </p>
                </div>
                <div>
                    <h3>REMPLACANTS</h3>
                    <p>
                    @foreach ($match['team'] as $joueur)
                        @if ($joueur[1] && $joueur[2] == 0)
                            {{$joueur[0]}},
                        @endif
                    @endforeach
                    </p>
                </div>
            </div>
            <a href="{{ $match['confirmed'] ? $match['place_link'] :"javascript:void(0);" }}" target="_blank">
                <div class="status {{ $match['confirmed'] ? "confirmed" :"" }}" id="status">
                    @if (!$match['confirmed'])
                        <p>non confirmé</p>
                    @else
                        <p>{{ $match['place_name'] }}</p>
                        <span>{{ $match['place_adress'] }}</span>
                    @endif
                </div>
            </a>
         </div>
    @endforeach
</section>

<style>
    body {
        margin: 0;
    }
    section {
        width: 100vw;
        margin: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-top: 50px;
    }
    div.content {
        width: 75%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        background-color: #F8F8F8;
        position: relative;
        margin-bottom: 25px;
        flex-wrap: wrap;
    }
    div.already {
        opacity: .5;
    }
    div.title {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        font-family: Arial, Helvetica, sans-serif;
        padding: 25px 25px;
    }
    div.title span {
        margin: 0;
        color: #D78C35;
        font-weight: bold;
        font-size: 1.2rem;
    }
    div.title h2 {
        margin: 0;
        color: #393939;
        margin-bottom: 15px;
    }
    div.title p {
        margin: 0;
        color: #393939;
        font-weight: bold;
    }
    div.team {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: flex-start;
        font-family: Arial, Helvetica, sans-serif;
        padding: 25px 25px;
    }
    div.team h3 {
        margin: 0;
        color: #393939;
        font-weight: bold;
    }
    div.team p {
        margin: 0;
        color: #393939;
    }
    div.team div:nth-child(1) {
        margin-bottom: 15px;
    }
    div.status {
        height: 200px;
        width: 200px;
        background-color: #D78C35;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 15px;
        transition: .3s all;
    }
    div.status:hover {
        box-shadow: rgba(248, 248, 248, 0.4) inset 0 0 200px;
    }
    div.status p {
        color: #fff;
        font-size: 1.2rem;
        font-weight: bold;
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        text-decoration: none !important;
    }
    div.status span {
        color: #fff;
        font-size: 1rem;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        margin: 0;
        text-decoration: none !important;
    }
    a, a:visited, a:hover {
        text-decoration: none !important;
    }
    .confirmed {
        background-color: #59AA7C !important;
    }
    @media screen and (max-width: 991px) {
        div.content {
            width: 90vw;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            background-color: #F8F8F8;
            position: relative;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }
        div.status {
            height: 100px;
            width: 90vw;
            padding: 0;
        }
        div.status p {
            font-size: 1.8rem;
        }
        div.status span {
            font-size: 1.2rem;
        }
        div.title span {
            font-size: 2rem;
        }
        div.title h2 {
            font-size: 2.2rem
        }
        div.title p {
            font-size: 1.6rem;
        }
    }
</style>
