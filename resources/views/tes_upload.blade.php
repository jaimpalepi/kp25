<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="ktp">KTP Upload:</label>
        <input type="file" name="ktp" id="ktp" required>

        <label for="transcript">Transcript Upload:</label>
        <input type="file" name="transcript" id="transcript" required>

        <button type="submit">Apply</button>
    </form>

</body>

</html>
