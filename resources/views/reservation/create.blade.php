<!-- resources/views/reservations/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('store.reservation') }}" method="post">
        @csrf
        <label for="client_id">Select Client:</label>
        <select name="client_id" id="client_id">
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>
        
        <label for="services[]">Select Services:</label>
        <select name="services[]" id="services" multiple>
            @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>

        <button type="submit">Create Reservation</button>
    </form>
</body>
</html>

