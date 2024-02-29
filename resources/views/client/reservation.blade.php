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

@if ($reservation->status === 'completed')
        <!-- Your reservation completion form goes here -->
        <form action="{{ route('complete-reservation', ['id' => $reservation->id]) }}" method="post">
            @csrf
            <!-- Your form fields (e.g., rating, comment) go here -->
            <label for="rating">Rating:</label>
            <input type="number" name="rating" min="1" max="5" required>

            <label for="comment">Comment:</label>
            <textarea name="comment" required></textarea>

            <button type="submit">Submit Rating</button>
        </form>
    @else
        <p>Rating is only available for completed reservations.</p>
    @endif
    
</body>
</html>
