<?php global $url ?>
<style>
    .outer-main .dropdown {
        position: relative;
        display: inline-block;
    }

    .outer-main .dropdown-content {
        position: absolute;
        background-color: #f6f6f6;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
        width: auto;
        Min-width: 225px;
        top: 12px;
        right: 0px;
        z-index: 999 !important;
        max-height: 180px;
        overflow-y: auto;
    }

    .outer-main .dropdown-content a {
        color: black;
        padding: 7px 16px;
        text-decoration: none;
        display: block;
    }

    .outer-main .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
</style>

<form action="<?php echo $url . 'filter' ?>">
    <div class="bg-white pt-2 pb-2 pl-3 pr-3 rounded mobile-search-area">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="select-address brdrr-1">
                    <input id="autocomplete" type="text" onFocus="initializeAutocomplete()" class="form-control " name="address" placeholder="Select City or Zipcode" value="<?php $_GET['address'] != '' ? $_GET['address'] : '' ?>" style="width: 90%" required>
                    <input type="hidden" name="city" id="city" placeholder="City" value="<?php $_GET['city'] != '' ? $_GET['city'] : '' ?>">
                    <input type="hidden" name="latitude" id="latitude" placeholder="Latitude" value="<?php $_GET['latitude'] != '' ? $_GET['latitude'] : '' ?>">
                    <input type="hidden" name="longitude" id="longitude" placeholder="Longitude" value="<?php $_GET['longitude'] != '' ? $_GET['longitude'] : '' ?>">
                    <input type="hidden" name="place_id" id="location_id" placeholder="Location Ids" value="<?php $_GET['place_id'] != '' ? $_GET['place_id'] : '' ?>">
                    <img width="22" alt="Location" src="https://chefpost.com/wp-content/themes/ChefPost/assets/images/carbon_location.png">
                </div>
            </div>
            <div class="col-lg-3 brdrr-1">
                <div class="select-address">
                    <input type="input" autocomplete="off" id="inputDate" class="datepicker" name="date" placeholder="Select Date" value="<?php $_GET['date'] != '' ? $_GET['date'] : '' ?>">
                    <img width="22" height="22" alt="Calendar" src="https://chefpost.com/wp-content/themes/ChefPost/assets/images/uiw_date.png">
                </div>
            </div>


            <div class="col-lg-3 brdrr-1">
                <div class="select-address" style="padding-left: 6px;">
                    <select name="search" class="form-control time-select border-0">
                        <option value="">Services</option>
                        <option value="Meal Prep">Meal Prep</option>
                        <option value="Events">Special Occasion</option>
                    </select>
                    <img width="22" height="22" alt="Food" class="select-time" src="https://chefpost.com/wp-content/themes/ChefPost/assets/images/Food.png">
                </div>
            </div>
            <div class="col-lg-3">
                <button class="theme-search-button with-background float-right hover-ripple search-button d-none d-lg-block">Find A Chef</button>
            </div>
            <!--for mobile-->
            <div class="col-12 d-flex d-lg-none justify-content-center mt-4">
                <button class="theme-search-button with-background hover-ripple search-button md round">Find A Chef</button>
            </div>
        </div>
        <!-- <div class="or-section d-block d-lg-none">
            <div class="or py-4" style="font-weight: 600">OR</div>
            <div class="search-item">
                <img alt="search-icon" src="<?php echo get_template_directory_uri() .'/assets/images/searchIcon.png'?>">
                Search by <a class="text-uppercase" href="#"><u>Meal Prep</u></a>
            </div>
            <div class="search-item">
                <img alt="search-icon" src="<?php echo get_template_directory_uri() .'/assets/images/searchIcon.png'?>">
                Search by <a class="text-uppercase" href="#"><u>Special Occasion</u></a>
            </div>
        </div> -->
    </div>
</form>

