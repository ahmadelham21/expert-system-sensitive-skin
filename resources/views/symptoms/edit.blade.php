<!DOCTYPE html>
<html>

<head>
    <title>Edit Symptom</title>
</head>

<body>
    <h1>Edit Symptom</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('symptoms.update', $symptom->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nama:</label>
            <input type="text" name="nama" value="{{ $symptom->nama }}">
        </div>
        <div>
            <label>Question:</label>
            <textarea name="question">{{ $symptom->question }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('symptoms.index') }}">Back</a>
</body>

</html>