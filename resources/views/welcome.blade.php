<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EksamensTT2</title> 
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header class="header">
    <div class="header-left-spacer"></div>

    <nav class="navbar">
      <ul class="nav-links">
        <li><a href="#Highlights">Highlights</a>
          <ul class="dropdown">
            <li><a href="#hulkenberg-podium">Hulkenberg Podium</a></li>
            <li><a href="#isaack-podium">Hadjar amazing rookie year</a></li>
            <li><a href="#lando-champion">Lando Norris wins F1 drivers championship for 1 time in his career</a></li>
          </ul>
        </li>
        <li><a href="#Standings">Driver's Standings</a></li>
        <li><a href="#ConstructorStandings">Teams's Standings</a></li>
        <li><a href="#more-info-section">More Info about 2026 season!</a></li>
      </ul>
    </nav>

    <div class="auth-buttons">
        @auth
          <div class="auth-container">
            <span class="auth-username">Hello, {{ auth()->user()->name }}</span>
            
            @can('create', App\Models\Driver::class)
              <a href="/drivers/create" class="btn-auth">Add Driver</a>
            @endcan

            <a href="#" class="btn-auth" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        @endauth
        
        @guest
            <a href="{{ route('login') }}" class="btn-auth">Login</a>
            <a href="{{ route('register') }}" class="btn-auth">Register</a>
        @endguest
    </div>
  </header>

<section id="Description" class="description">
  <h1 class="description1">F1 season 2025</h1>
  <p class="description1">The <strong>2025 season</strong> was <em>75th</em> <br>F1<br> season. </p>
  <div class="season-stats">
    <h2>Season Statistics</h2>
    <ol>
      <li>Total races: 24 Grands Prix</li>
      <li>Different podium winners: 8 drivers</li>
      <li>Teams scoring points: All 10 teams</li>
      <li>Championship margin: 2 points (closest since 2021)</li>
    </ol>
  </div>
</section>

<section id="Highlights" class="highlights">
  <h2>Some pictures of highlights of the season.</h2>

  <div class="highlights-grid">
    <div class="highlight-card" id="hulkenberg-podium">
      <img src="https://www.racefans.net/wp-content/uploads/2025/07/racefansdotnet-21-07-06-16-58-48-1.jpg" alt="Hulk podium">
      <div class="highlight-content">
        <h3>Nico Hulkenberg - First Podium</h3>
        <p>06 July, 2025, Silverstone, UK</p>
        <p>First podium for Nico Hulkenberg after 239 races in Formula 1.</p>
        <a href="https://www.formula1.com/en/latest/article/its-been-a-long-time-coming-hulkenberg-revels-in-incredible-maiden-f1-podium.1Ar63yNajRYh0ssLin7sgA" class="btn">More Info</a>
      </div>
    </div>

    <div class="highlight-card" id="isaack-podium">
      <img src="https://media.formula1.com/image/upload/t_16by9North/c_lfill,w_3392/q_auto/v1740000000/trackside-images/2025/F1_Grand_Prix_of_Netherlands/2233022781.webp" alt="Hadjar podium">
      <div class="highlight-content">
        <h3>Isack Hadjar - Rookie Podium</h3>
        <p>31 August, 2025, Zandvoort, NL</p>
        <p>Incredible podium in his rookie Formula 1 season.</p>
        <a href="https://www.formula1.com/en/latest/article/how-formula-1-united-to-celebrate-isack-hadjars-rookie-podium.67sywDasDOMRlHnPojsfwt" class="btn">More Info</a>
      </div>
    </div>

    <div class="highlight-card" id="lando-champion">
      <img src="https://media.assettype.com/gulfnews%2F2025-12-08%2Ff0urkmlw%2FMcLaren%E2%80%99s-Lando-Norris" alt="Lando champion">
      <div class="highlight-content">
        <h3>Lando Norris - World Champion</h3>
        <p>07 December, 2025, Abu Dhabi</p>
        <p>Lando Norris wins his first Formula 1 World Championship.</p>
        <a href="https://www.formula1.com/en/latest/article/norris-secures-maiden-f1-title-in-abu-dhabi-with-podium-finish-behind.EMJtmvRA0uzmzUC4MZgmw" class="btn">More Info</a>
      </div>
    </div>
  </div>
</section>

<section id="form-section" class="form-section">
  <h2>Race Feedback Form</h2>

  <form id="raceForm" action="https://www.w3schools.com/action_page.php" method="get">
    <label>
      Full Name:
      <input type="text" id="name" name="name">
    </label>

    <label>
      Email:
      <input type="email" id="email" name="email">
    </label>

    <label>
      Favourite Race (Round 1–24):
      <input type="text" id="round" name="round">
    </label>

    <label>
      Favorite Driver:
      <input type="text" id="driver" name="driver">
    </label>

    <button type="submit">Submit</button>

    <div id="error-messages" class="form-errors"></div>
  </form>

  <hr class="f1-divider">
</section>

<section id="Driverstandings" class="standings">
  <h1 id="Standings">Driver Standings after final race (Abu-Dhabi)</h1>

  <table>
  <thead>
    <tr class="table-header">
      <th>Place</th>
      <th>Driver</th>
      <th>Points</th>
      <th>Nationality</th>
      <th>Team</th>
      @can('create', App\Models\Driver::class) 
        <th>Actions</th> 
      @endcan
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
      
      @if(Auth::user() && (Auth::user()->can('update', $driver) || Auth::user()->can('delete', $driver)))
      <td>
        @can('update', $driver)
          <a href="/drivers/{{ $driver->id }}/edit" class="btn-table btn-edit">Edit</a>
        @endcan

        @can('delete', $driver)
          <form action="/drivers/{{ $driver->id }}" method="POST" class="inline-form" onsubmit="return confirm('Are you sure you want to delete this driver?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-table">Delete</button>
          </form>
        @endcan
      </td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
</section>

<section id="teamsstandings" class="teamstandings">
  <h2 id="ConstructorStandings">Team's standings after final race (Abu-Dhabi)</h2>
  <h2>F1 Constructors' Standings 2025</h2>
  <table>
    <thead>
      <tr class="table-header">
        <th>Place</th>
        <th>Team Name</th>
        <th>Base Location</th>
        <th>Points</th>
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