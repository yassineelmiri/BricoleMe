<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Reservations for Client</h1>

<ul>
    @foreach($reservations as $reservation)
        <li>
            Timing: {{ $reservation->timing }}<br>
            Description: {{ $reservation->description }}<br>
            Status: {{ $reservation->status }}<br>
            Confirmation of Artisans: {{ $reservation->confirmation_of_artisans }}<br>
            @if(now()->diffInMinutes($reservation->created_at) < 60)
            <!-- Delete Button -->
            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Reservation</button>
            </form>
            @endif
        </li>
    @endforeach
</ul>
</body>
</html>
