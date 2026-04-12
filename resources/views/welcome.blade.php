<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EksamensTT</title> 
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header class="header">
    <nav class="navbar">
      

      <ul class="nav-links">
        <li><a href="#Highlights">Highlights</a>
          <ul class="dropdown">
            <li><a href="#hulkenberg-podium">Hulkenberg Podium</a></li>
            <li><a href="#isaack-podium">Hadjar amazing rookie year</a></li>
            <li><a href="#lando-champion">Lando Norris wins F1 drivers championship for 1 time in his career</a></li>
          </ul>
        <li><a href="#Standings">Driver's Standings</a>
        <li><a href="#ConstructorStandings">Teams's Standings</a>
        <li><a href="#more-info-section">More Info about 2026 season!</a>
      </ul>
      <div class="auth-buttons">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-auth">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn-auth">Login</a>
                <a href="{{ route('register') }}" class="btn-auth">Register</a>
            @endauth
        @endif
    </div>
    </nav>
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
        <p>31 August, 2025,  Zandvoort, NL</p>
        <p>Incredible podium in his rookie Formula 1 season.</p>
        <a href="https://www.formula1.com/en/latest/article/how-formula-1-united-to-celebrate-isack-hadjars-rookie-podium.67sywDasDOMRlHnPojsfwt" class="btn">More Info</a>
      </div>
    </div>

    <div class="highlight-card" id="lando-champion">
      <img src="https://media.assettype.com/gulfnews%2F2025-12-08%2Ff0urkmlw%2FMcLaren%E2%80%99s-Lando-Norris" alt="Lando champion">
      <div class="highlight-content">
        <h3>Lando Norris - World Champion</h3>
        <p>07 December, 2025,  Abu Dhabi</p>
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

    <div id="error-messages" style="color:rgb(255, 255, 255); margin-top:10px;"></div>
  </form>
</section>

<section id="Driverstandings" class="standings">

<h1 id="Standings">Driver Standings after final race (Abu-Dhabi)</h1>


<table>
  <tr style="background: #f2f2f2;">
    <th>Place</th>
    <th>Driver</th>
    <th>Points</th>
    <th>Nationality</th>
    <th>Team</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Lando Norris</td>
    <td>423</td>
    <td>Great Britain</td>
    <td>McLaren</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Max Verstappen</td>
    <td>421</td>
    <td>Netherlands</td>
    <td>RedBull Racing</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Oscar Piastri</td>
    <td>410</td>
    <td>Australia</td>
    <td>McLaren</td>
  </tr>
  <tr>
    <td>4</td>
    <td>George Russell</td>
    <td>319</td>
    <td>Great Britain</td>
    <td>Mercedes</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Charles Leclerc</td>
    <td>242</td>
    <td>Monaco</td>
    <td>Ferrari</td>
  </tr>
    <tr>
    <td>6</td>
    <td>Lewis Hamilton</td>
    <td>156</td>
    <td>Great Britain</td>
    <td>Ferrari</td>
  </tr>
    <tr>
    <td>7</td>
    <td>Kimi Antonelli</td>
    <td>150</td>
    <td>Italia</td>
    <td>Mercedes</td>
  </tr>
    <tr>
    <td>8</td>
    <td>Alexander Albon</td>
    <td>73</td>
    <td>Thailand</td>
    <td>Williams</td>
  </tr>
    <tr>
    <td>9</td>
    <td>Carlos Sainz</td>
    <td>64</td>
    <td>Spain</td>
    <td>Williams</td>
  </tr>
    <tr>
    <td>10</td>
    <td>Fernando Alonso</td>
    <td>56</td>
    <td>Spain</td>
    <td>Aston Martin</td>
  </tr>
    <tr>
    <td>11</td>
    <td>Nico Hulkenberg</td>
    <td>51</td>
    <td>Germany</td>
    <td>Kick Sauber</td>
  </tr>
    <tr>
    <td>12</td>
    <td>Isack Hadjar</td>
    <td>51</td>
    <td>France</td>
    <td>Racing Bulls</td>
  </tr>
    <tr>
    <td>13</td>
    <td>Oliver Bearman</td>
    <td>41</td>
    <td>Great Britain</td>
    <td>HAAS</td>
  </tr>
    <tr>
    <td>14</td>
    <td>Liam Lawson</td>
    <td>38</td>
    <td>New Zealand</td>
    <td>RedBull Racing/Racing Bulls</td>
  </tr>
    <tr>
    <td>15</td>
    <td>Esteban Ocon</td>
    <td>38</td>
    <td>France</td>
    <td>HAAS</td>
  </tr>
    <tr>
    <td>16</td>
    <td>Lance Stroll</td>
    <td>33</td>
    <td>Canada</td>
    <td>Aston Martin</td>
  </tr>
    <tr>
    <td>17</td>
    <td>Yuki Tsunoda</td>
    <td>33</td>
    <td>Japan</td>
    <td>Racing Bulls/RedBull Racing</td>
  </tr>
    <tr>
    <td>18</td>
    <td>Pierre Gasly</td>
    <td>22</td>
    <td>France</td>
    <td>Alpine</td>
  </tr>
    <tr>
    <td>19</td>
    <td>Gabriel Bortoleto</td>
    <td>19</td>
    <td>Brazil</td>
    <td>Kick Sauber</td>
  </tr>
    <tr>
    <td>20</td>
    <td>Franco Colapinto</td>
    <td>0</td>
    <td>Argentina</td>
    <td>Alpine</td>
  </tr>
</table>
</section>

<section id="teamsstandings" class="teamstandings">
<h2 id="ConstructorStandings">Team's standings after final race (Abu-Dhabi)</h2>
<table>
  <tr style="background: #f2f2f2;">
    <th>Place</th>
    <th>Team</th>
    <th>Points</th>
  </tr>
  <tr>
    <td>1</td>
    <td>McLaren</td>
    <td>833</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Mercedes</td>
    <td>469</td>
  </tr>
  <tr>
    <td>3</td>
    <td>RedBull Racing</td>
    <td>451</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Ferrari</td>
    <td>398</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Williams</td>
    <td>137</td>
  </tr>
    <tr>
    <td>6</td>
    <td>Racing Bulls</td>
    <td>92</td>
  </tr>
    <tr>
    <td>7</td>
    <td>Aston Martin</td>
    <td>89</td>
  </tr>
    <tr>
    <td>8</td>
    <td>HAAS</td>
    <td>79</td>
  </tr>
    <tr>
    <td>9</td>
    <td>Kick Sauber</td>
    <td>70</td>
  </tr>
    <tr>
    <td>10</td>
    <td>Alpine</td>
    <td>22</td>
  </tr>

  </table>
</section>
<div id="more-info-section">
  <button id="show-more-btn">More Info</button>
  <div id="extra-info" style="display: none;">
  <p>This is some extra info about the 2025 F1 season!</p>
  <p>From 2026 onwards Formula 1 will have:</p>
    <ul>
      <li>More agile cars, 30kg lighter</li>
      <li>Redesigned power units with more battery power</li>
      <li>Active aerodynamics with moveable wings</li>
      <li>Extra overtaking system: short battery boost</li>
      <li>Improved safety with stronger structures</li>
      <li>Six power unit manufacturers involved</li>
    </ul>
<a href="https://www.formula1.com/en/latest/article/fia-unveils-formula-1-regulations-for-2026-and-beyond-featuring-more-agile.75qJiYOHXgeJqsVQtDr2UB" class="button">More detailed info!</a>
  </div>
</div>
</body>
</html>