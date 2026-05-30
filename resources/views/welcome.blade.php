<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>EksamensTT2</title> 
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v">
</head>
<body>
  
  <header class="header">
    <div class="header-left-spacer"></div>

    <nav class="navbar">
      <ul class="nav-links">
        <li><a href="#Highlights">{{ __('messages.Highlights') }}</a>
          <ul class="dropdown">
            <li><a href="#hulkenberg-podium">{{ __('messages.Hulkenberg Podium') }}</a></li>
            <li><a href="#isaack-podium">{{ __('messages.Hadjar amazing rookie year') }}</a></li>
            <li><a href="#lando-champion">{{ __('messages.Lando Norris wins F1 drivers championship') }}</a></li>
          </ul>
        </li>
        <li><a href="#Standings">{{ __("messages.Driver's Standings") }}</a></li>
        <li><a href="#ConstructorStandings">{{ __("messages.Team's Standings") }}</a></li>
        <li><a href="#form-section">{{ __('messages.Race Feedback Form') }}</a></li>
      </ul>
    </nav>

    <div class="auth-buttons">
        @auth
          <div class="auth-container">
            <span class="auth-username">{{ __('messages.Hello, :name', ['name' => auth()->user()->name]) }}</span>
            
            @if(auth()->check() && auth()->user()->isAdmin())
              <a href="/drivers/create" class="btn-table btn-edit">{{ __('messages.Add New Driver') }}</a>
            @endif

            <a href="#" class="btn-auth" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('messages.Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        @endauth
        
        @guest
            <a href="{{ route('login') }}" class="btn-auth">{{ __('messages.Login') }}</a>
            <a href="{{ route('register') }}" class="btn-auth">{{ __('messages.Register') }}</a>
        @endguest
    </div>
    <div class="lang-container">
    <button class="btn-auth">
        {{ strtoupper(session('locale', 'en')) }} 🌐
    </button>
    <ul class="lang-menu-simple">
        <div class="menu-inner">
            <li><a href="{{ route('lang.switch', 'en') }}">{{ __('messages.English') }}</a></li>
            <li><a href="{{ route('lang.switch', 'lv') }}">{{ __('messages.Latvian') }}</a></li>
        </div>
    </ul>
    </div>
  </header>

<section id="Description" class="description">
  <h1 class="description1">{{ __('messages.F1 season 2025') }}</h1>
  <p class="description1">{!! __('messages.season_description') !!}</p>
  <div class="season-stats">
    <h2>{{ __('messages.Season Statistics') }}</h2>
    <ol>
      <li>{{ __('messages.Total races: 24 Grands Prix') }}</li>
      <li>{{ __('messages.Different podium winners: 8 drivers') }}</li>
      <li>{{ __('messages.Teams scoring points: All 10 teams') }}</li>
      <li>{{ __('messages.Championship margin: 2 points (closest since 2021)') }}</li>
    </ol>
  </div>
</section>

<section id="Highlights" class="highlights">
  <h2>{{ __('messages.Some pictures of highlights of the season.') }}</h2>

  <div class="highlights-grid">
    <div class="highlight-card" id="hulkenberg-podium">
      <img src="https://media.formula1.com/image/upload/t_16by9Centre/c_lfill,w_3392/q_auto/v1740000001/trackside-images/2025/F1_Grand_Prix_of_Great_Britain/2223818229.webp" alt="{{ __('messages.Hulk podium') }}">
      <div class="highlight-content">
        <h3>{{ __('messages.Nico Hulkenberg - First Podium') }}</h3>
        <p>{{ __('messages.06 July, 2025, Silverstone, UK') }}</p>
        <p>{{ __('messages.First podium for Nico Hulkenberg after 239 races in Formula 1.') }}</p>
        <a href="https://www.formula1.com/en/latest/article/its-been-a-long-time-coming-hulkenberg-revels-in-incredible-maiden-f1-podium.1Ar63yNajRYh0ssLin7sgA" class="btn">{{ __('messages.More Info') }}</a>
      </div>
    </div>

    <div class="highlight-card" id="isaack-podium">
      <img src="https://media.formula1.com/image/upload/t_16by9North/c_lfill,w_3392/q_auto/v1740000000/trackside-images/2025/F1_Grand_Prix_of_Netherlands/2233022781.webp" alt="{{ __('messages.Hadjar podium') }}">
      <div class="highlight-content">
        <h3>{{ __('messages.Isack Hadjar - Rookie Podium') }}</h3>
        <p>{{ __('messages.31 August, 2025, Zandvoort, NL') }}</p>
        <p>{{ __('messages.Incredible podium in his rookie Formula 1 season.') }}</p>
        <a href="https://www.formula1.com/en/latest/article/how-formula-1-united-to-celebrate-isack-hadjars-rookie-podium.67sywDasDOMRlHnPojsfwt" class="btn">{{ __('messages.More Info') }}</a>
      </div>
    </div>

    <div class="highlight-card" id="lando-champion">
      <img src="https://media.assettype.com/gulfnews%2F2025-12-08%2Ff0urkmlw%2FMcLaren%E2%80%99s-Lando-Norris" alt="{{ __('messages.Lando champion') }}">
      <div class="highlight-content">
        <h3>{{ __('messages.Lando Norris - World Champion') }}</h3>
        <p>{{ __('messages.07 December, 2025, Abu Dhabi') }}</p>
        <p>{{ __('messages.Lando Norris wins his first Formula 1 World Championship.') }}</p>
        <a href="https://www.formula1.com/en/latest/article/norris-secures-maiden-f1-title-in-abu-dhabi-with-podium-finish-behind.EMJtmvRA0uzmzUC4MZgmw" class="btn">{{ __('messages.More Info') }}</a>
      </div>
    </div>
  </div>
</section>

<section id="form-section" class="form-section">
  <h2>{{ __('messages.Race Feedback Form') }}</h2>

  <form id="raceForm" action="https://www.w3schools.com/action_page.php" method="get">
    <label>{{ __('messages.Full Name') }}: <input type="text" id="name" name="name"></label>
    <label>{{ __('messages.Email') }}: <input type="email" id="email" name="email"></label>
    <label>{{ __('messages.Favourite Race (Round 1–24)') }}: <input type="text" id="round" name="round"></label>
    <label>{{ __('messages.Favorite Driver') }}: <input type="text" id="driver" name="driver"></label>
    <button type="submit">{{ __('messages.Submit') }}</button>
  </form>
</section>

<section id="Standings" class="standings">
  <h1>{{ __('messages.Driver Standings after final race (Abu-Dhabi)') }}</h1>
  <table>
    <thead>
      <tr class="table-header">
        <th>{{ __('messages.Place') }}</th>
        <th>{{ __('messages.Driver') }}</th>
        <th>{{ __('messages.Points') }}</th>
        <th>{{ __('messages.Nationality') }}</th>
        <th>{{ __('messages.Team') }}</th>
        @if(auth()->check() && auth()->user()->isAdmin())
          <th>{{ __('messages.Actions') }}</th> 
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach ($drivers as $index => $driver)
      <tr>
        <td>{{ $index + 1 }}</td> 
        <td>{{ $driver->name }}</td>
        <td>{{ $driver->points }}</td>
        <td>{{ $driver->nationality }}</td>
        <td>{{ $driver->team->name }}</td>
        @if(auth()->check() && auth()->user()->isAdmin())
        <td>
          <a href="/drivers/{{ $driver->id }}/edit" class="btn-table btn-edit">{{ __('messages.Edit') }}</a>
          <form action="/drivers/{{ $driver->id }}" method="POST" class="inline-form" onsubmit="return confirm('{{ __('messages.Are you sure you want to delete this driver?') }}');">
            @csrf @method('DELETE')
            <button type="submit" class="btn-table">{{ __('messages.Delete') }}</button>
          </form>
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
</section>

<section id="ConstructorStandings" class="teamstandings">
  <h2>{{ __("messages.Team's standings after final race (Abu-Dhabi)") }}</h2>
  <h2>{{ __("messages.F1 Constructors' Standings 2025") }}</h2>
  <table>
    <thead>
      <tr class="table-header">
        <th>{{ __('messages.Place') }}</th>
        <th>{{ __('messages.Team Name') }}</th>
        <th>{{ __('messages.Base Location') }}</th>
        <th>{{ __('messages.Points') }}</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teams as $index => $team)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $team->name }}</td>
        <td>{{ $team->base_location }}</td>
        <td>{{ $team->drivers_sum_points ?? 0 }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
</body>
</html>