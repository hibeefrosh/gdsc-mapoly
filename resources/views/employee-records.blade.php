<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee-records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin: 20px 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
</head>

<body>

    <h1>Employee Records for {{ $selectedMonth }}</h1>
    @if ($records->isEmpty())
    <div style="background-color: #FF5733; color: #fff; padding: 10px; text-align: center; border-radius: 5px;">
        <p>No records found for the selected month.</p>
    </div>
    @else
    <table>
        <thead>
            <tr>
                <th>Worker Name</th>
                <th>Location</th>
                <th>Work Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
            <tr>
                <td>{{ $record->worker_name }}</td>
                <td>{{ $record->location->location_name }}</td>
                <td>{{ $record->work_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</body>

</html>