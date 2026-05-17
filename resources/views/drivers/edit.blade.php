<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Driver</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto Condensed', sans-serif;
            text-align: center;
            background-color: rgb(36, 45, 49);
            color: white;
            padding: 40px;
        }
        h2 {
            font-family: "Spectral", serif;
            color: #ffffff;
            margin-bottom: 25px;
            font-size: 28px;
        }

        input[type="text"],
        input[type="number"],
        select {
            padding: 10px;
            margin: 5px 0 15px 0;
            border: none;
            border-radius: 6px;
            background-color: #ffffff;
            color: #000000;
            font-size: 14px;
            width: 300px;
            display: inline-block;
        }

        form button {
            padding: 12px;
            background-color: #000000;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .btn-cancel {
            background-color: #e10600;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.9rem;
            border-radius: 4px;
            display: inline-block;
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <h2>Edit Driver: {{ $driver->name }}</h2>
    <div style="background-color: #e10600; color: white; padding: 10px; margin-bottom: 15px; border-radius: 6px; font-weight: bold; font-size: 14px;">
    <ul style="list-style: none; padding: 0; margin: 0;">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    </div>

    <form action="/drivers/{{ $driver->id }}" method="POST" novalidate>
        @csrf
        @method('PUT')

        <p>Name:</p>
        <input type="text" name="name" value="{{ $driver->name }}" required>

        <p>Points:</p>
        <input type="number" name="points" value="{{ $driver->points }}" required>

        <p>Nationality:</p>
        <input type="text" name="nationality" value="{{ $driver->nationality }}" required>

        <p>Team:</p>
        <select name="team_id" required>
            @foreach($teams as $team)
                <option value="{{ $team->id }}" {{ $driver->team_id == $team->id ? 'selected' : '' }}>
                    {{ $team->name }}
                </option>
            @endforeach
        </select>

        <br><br>
        <button type="submit">Save Changes</button>
        <a href="/" class="btn-cancel">Cancel</a>
    </form>
    

</body>
</html>