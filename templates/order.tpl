<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cleanify Customer Order Form</title>
    <meta name="description" content="This is a one page order form.">
    <meta name="author" content="Anthoula Wojczak">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNODOLNfvTOLcs8vaXOwXOoXUW82qJsTU"></script>
    <script src="assets/js/app.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="three columns">
                    <img src="assets/imgs/cleanify-logo.png" width="107" height="53" alt="Cleanify">
                </div>
                <div class="nine columns">
                    <h3>Your Cleaning Order Details</h3>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="seven columns">
                <h5>Contact Information</h5>
                {$name|capitalize}<br/>
                {$phone}<br />
                {$email}<br /><br />
                <input type="text" id="street" class="full" value="{$street}" placeholder="Street Address" />
                <input type="text" id="city" class="half" value="{$city}" placeholder="City" />
                <input type="text" id="state" class="half" value="{$state}" placeholder="State" />
                <input type="text" id="zip" class="half" value="{$zip}" placeholder="Zip Code" />
                <input type="button" onclick="cleanify.updateLocation()" value="Update Location" />
            </div>
            <div class="five columns">
                <div id="map-canvas"></div>
            </div>
        </div>
        <div class="row" id="service">
            <div class="six columns">
                <h5>Service Information</h5>
                <h5>Your Extras</h5>
                <ul id="sortable1" class="connectedSortable">
                    <li data-price="0">Garden $0</li>
                    <li data-price="0">Musical Instrument $0</li>
                </ul>
                <h5>Add Extras</h5>
                <ul id="sortable2" class="connectedSortable">
                    <li class="add-extra" data-price="10">Extra A (+ $10)</li>
                    <li class="add-extra" data-price="24">Extra B (+ $24)</li>
                    <li class="add-extra" data-price="50">Extra C (+ $50)</li>
                </ul>
            </div>
            <div class="six columns">
                <h6>Date of Service:</h6>
                {$service_date|date_format:"%B %e, %Y"}
                <h6>Arrival Time:</h6>
                {$service_time}
                <h6>Service Type:</h6>
                Deep Clean
                <h6>Booking Notes:</h6>
                Enter from Taylor Street, walk down corridor, and find lock box with key. Key code is 4582. Beware of Doberman Pinscher. He doesn't like anyone cleaning his room. Good luck!<br />
                <div id="total-price">
                    <h5>Order Total: <span id="total">$100.00</span></h5>
                </div>
                <input type="button" onclick="cleanify.placeOrder()" value="Place Order" />
            </div>
        </div>
    </div>
</body>
</html>
