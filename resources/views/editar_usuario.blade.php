<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-5">

    <form action="{{ route('accounts.update', [
        'account' => $account->id,
    ]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input name="username" type="text" class="form-control" id="username" value="{{ $account->username }}">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $account->name }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input name="email" type="email" class="form-control" id="email" value="{{ $account->email }}">

        </div>

        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input name="password" type="password" class="form-control" id="password" value="{{ $account->password }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input name="phone" type="text" class="form-control" id="phone" value="{{ $account->phone }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
