<html>
  <head>
    <meta charset="UTF-8">
    <title>Document List</title>
    <link rel="stylesheet" href="/assets/css/documents.css">
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
                        <li><a href="/homepage" onclick="logout()">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>  
    </Header>

    <div class="document-page">
        <h1>Document List</h1>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Lot Number</th>
                        <th>Cad Number</th>
                        <th>Size of Area</th>
                        <th>Location</th>
                        <th>File Upload</th>
                        <th>View/Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>001</td>
                        <td>001-A-001</td>
                        <td>120 sqm</td>
                        <td>Quezon City</td>
                        <td><input type="file" name="file"></td>
                        <td>
                            <a href="#" class="view-link">View</a>
                            <a href="/update" class="edit-link">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>001-A-002</td>
                        <td>150 sqm</td>
                        <td>Makati City</td>
                        <td><input type="file" name="file"></td>
                        <td>
                            <a href="#" class="view-link">View</a>
                            <a href="/update" class="edit-link">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>001-A-003</td>
                        <td>200 sqm</td>
                        <td>Taguig City</td>
                        <td><input type="file" name="file"></td>
                        <td>
                            <a href="#" class="view-link">View</a>
                            <a href="/update" class="edit-link">Edit</a>
                        </td>
                    </tr> -->
                    
                    <?php foreach ($lots as $lot) { ?>
                        <tr>
                        <td><?= isset($lot['lot_no']) ? esc($lot['lot_no']) : '' ?></td>
                        <td><?= isset($lot['cad_no']) ? esc($lot['cad_no']) : '' ?></td>
                        <td><?= isset($lot['size_of_area']) ? esc($lot['size_of_area']) : '' ?></td>
                        <td><?= isset($lot['location']) ? esc($lot['location']) : '' ?></td>
                        <td><input type="file" name="file"></td>
                        <td>
                            <a href="#" class="view-link">View</a>
                            <a href="/land/update/<?= isset($lot['id']) ? esc($lot['id']) : '' ?>" class="edit-link">Edit</a>
                        </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

        <div class="button-container">
            <a href="land/add" class="button-link">Add Land Details</a>
        </div>

    </div>
  </body>
</html>