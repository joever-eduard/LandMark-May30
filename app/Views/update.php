<html>
    <head>
        <title>
            Update Land Details
        </title>
        <link rel="stylesheet" href="/assets/css/update.css">
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
            
        <div class="wrapper" style="background-color: 0054A5;">
            <h1>Update Land Details</h1>
            <form action="/land/update/<?= $lotId ?>" method="post">
                <div class="form-group">
                    <label for="lot_no">Lot No.:</label>
                    <input type="text" id="lot_no" name="lot_no" value="<?= set_value('lot_no', isset($lot['lot_no']) ? $lot['lot_no'] : '') ?>">
                </div>     
                <div class="form-group">
                    <label for="size_of_area">Size of Area:</label>
                    <input type="text" id="size_of_area" name="size_of_area" value="<?= set_value('size_of_area', isset($lot['size_of_area']) ? $lot['size_of_area'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="cad_no">Cad No.:</label>
                    <input type="text" id="cad_no" name="cad_no" value="<?= set_value('cad_no', isset($lot['cad_no']) ? $lot['cad_no'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" value="<?= set_value('location', isset($lot['location']) ? $lot['location'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="phase">Phase:</label>
                    <input type="text" id="phase" name="phase" value="<?= set_value('phase', isset($lot['phase']) ? $lot['phase'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="land_owner">Land Owner:</label>
                    <input type="text" id="land_owner" name="land_owner" value="<?= set_value('land_owner', isset($lot['land_owner']) ? $lot['land_owner'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" id="status" name="status" value="<?= set_value('status', isset($lot['status']) ? $lot['status'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="bllm">BLLM:</label>
                    <input type="text" id="bllm" name="bllm" value="<?= set_value('bllm', isset($propertyDistance['bllm']) ? $propertyDistance['bllm'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="distance_to_point1">Distance to Point 1:</label>
                    <input type="text" id="distance_to_point1" name="distance_to_point1" value="<?= set_value('distance_to_point1', isset($propertyDistance['distance_to_point1']) ? $propertyDistance['distance_to_point1'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="valuation_amount">Lot Valuation Amount:</label>
                    <input type="text" id="valuation_amount" name="valuation_amount" value="<?= set_value('valuation_amount', isset($propertyValuation['valuation_amount']) ? $propertyValuation['valuation_amount'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="tree_valuation_amount">Tree Valuation Amount:</label>
                    <input type="text" id="tree_valuation_amount" name="tree_valuation_amount" value="<?= set_value('tree_valuation_amount', isset($propertyValuation['tree_valuation_amount']) ? $propertyValuation['tree_valuation_amount'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="disturbance_amount">Disturbance Amount:</label>
                    <input type="text" id="disturbance_amount" name="disturbance_amount" value="<?= set_value('disturbance_amount', isset($propertyValuation['disturbance_amount']) ? $propertyValuation['disturbance_amount'] : '') ?>">
                </div>
                <div class="form-group">
                    <label for="house_structure_amount">House Structure Amount:</label>
                    <input type="text" id="house_structure_amount" name="house_structure_amount" value="<?= set_value('house_structure_amount', isset($propertyValuation['house_structure_amount']) ? $propertyValuation['house_structure_amount'] : '') ?>">
                </div>
                <button type="submit">Update</button>
            </form>

        </div>
        
    </body>
