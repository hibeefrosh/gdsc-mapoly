<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create-workers-records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    @if (session('success'))
    <div style="background-color: #4CAF50; color: #fff; padding: 10px; text-align: center;">
        {{ session('success') }}
    </div>
    @endif

    <h1>Create Location</h1>
    <form action="{{ route('storeLocation') }}" method="post">
        @csrf
        <label for="location_name">Location Name:</label>
        <input type="text" id="location_name" name="location_name" required>
        <button type="submit">Create Location</button>
    </form>
    <h1>Create Worker Records</h1>
    <form action="{{ route('storeWorker') }}" method="post">
        @csrf
        <label for="worker_name">Worker Name:</label>
        <input type="text" id="worker_name" name="worker_name" required>
        <label for="location_id">Location:</label>
        <select id="location_id" name="location_id" required>
            @foreach ($locations as $location)
            <option value="{{ $location->id }}">{{ $location->location_name }}</option>
            @endforeach
        </select>
        <label for="work_date">Work Date:</label>
        <input type="date" id="work_date" name="work_date" required>
        <button type="submit">Create Record</button>
    </form>
    <h1>Search Employee Records</h1>
    <form action="{{ route('fetchRecords') }}" method="post">
        @csrf
        <label for="selected_month">Select Month and Year:</label>
        <input type="month" id="selected_month" name="selected_month">
        <button type="submit">Fetch Records</button>
    </form>
</body>

</html>