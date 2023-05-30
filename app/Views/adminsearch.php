<html>
  <head>
    <meta charset="UTF-8">
    <title>Search Details Page</title>
    <link rel="stylesheet" href="/assets/css/adminsearch.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <Header>
            <div class="navbar">
            <img src="/assets/images/icon2.png" class="logo">
                <ul>
                    <li><a href="/adminhome">Home</a></li>
                    <li><a href="/adminabout">About</a></li>
                    <li><a href="#">Virtual Map</a></li>
                    <li><a href="/adminsearch">Search Land</a></li>
                    <li><a href="/documents">Land Documents</a></li>
                    <li><a href="/reports">Reports</a></li>
                    <li><a href="/profile">
                        <img src="/assets/images/user.png" alt="Profile" class="user">
                    </a>
                    <ul class="dropdown">
                        <li><a href="/" onclick="logout()">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </Header>

    <div class="document-page">
        <div class="container">
        <h1>Search Land Details</h1>
        </div>

        <div class="search-container">
            <form id="search-form" action="/searchinfo" method="get">
                <h2>Search by Lot number :</h2>
                <input type="search" name="lot_no" placeholder="Lot No." class="search-bar">
                <input type="submit" class="search-button" value="Submit">
            </form>
        </div>

        <?php if (session()->has('errors')) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>


        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Lot Number</th>
                        <th>Cad Number</th>
                        <th>Size of Area</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($lots as $lot) { ?>
                        <tr>
                        <td><?= isset($lot['lot_no']) ? esc($lot['lot_no']) : '' ?></td>
                        <td><?= isset($lot['cad_no']) ? esc($lot['cad_no']) : '' ?></td>
                        <td><?= isset($lot['size_of_area']) ? esc($lot['size_of_area']) : '' ?></td>
                        <td><?= isset($lot['location']) ? esc($lot['location']) : '' ?></td>
                    <?php } ?>


                </tbody>
            </table>
        </div>
    </div>
  </body>
</html>