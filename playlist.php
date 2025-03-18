<?php
    include 'views/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Playlist</title>
    
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./res/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">My Playlist</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Song Title</th>
                        <th>Artist</th>
                        <th>Album</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Blinding Lights</td>
                        <td>The Weeknd</td>
                        <td>After Hours</td>
                        <td>3:20</td>
                        <td><button class="btn btn-success">Play</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Levitating</td>
                        <td>Dua Lipa</td>
                        <td>Future Nostalgia</td>
                        <td>3:23</td>
                        <td><button class="btn btn-success">Play</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Watermelon Sugar</td>
                        <td>Harry Styles</td>
                        <td>Fine Line</td>
                        <td>2:54</td>
                        <td><button class="btn btn-success">Play</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Good 4 U</td>
                        <td>Olivia Rodrigo</td>
                        <td>SOUR</td>
                        <td>2:58</td>
                        <td><button class="btn btn-success">Play</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Peaches</td>
                        <td>Justin Bieber</td>
                        <td>Justice</td>
                        <td>3:18</td>
                        <td><button class="btn btn-success">Play</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
    include 'views/footer.php';
?>
</body>
</html>