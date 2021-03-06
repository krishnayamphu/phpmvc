<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
<div class="container">
    <h1>Welcome PHP MVC Web Application</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Username</th>
            <th scope="col">Created Date</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $users = $data['users'];
        foreach ($users as $key => $user): ?>
        <tr>
            <td><?= $user->getId() ?></td>
            <td><?= $user->getUsername() ?></td>
            <td><?= $user->getCreatedDate() ?></td>
            <td>
                <a href="#!" class="btn btn-primary">Edit</a>
                <a href="#!" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
