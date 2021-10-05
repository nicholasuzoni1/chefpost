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
    <div class="bg-white  pt-2 pb-2 pl-3 pr-3 rounded">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="select-address brdrr-1">
                    <input id="autocomplete" type="text" onFocus="initializeAutocomplete()" class="form-control "
                           name="address" placeholder="City or Zip Code"
                           value="<?php $_GET['address'] != '' ? $_GET['address'] : '' ?>"
                           style="width: 90%" required>

                    <input type="hidden" name="city" id="city" placeholder="City"
                           value="<?php $_GET['city'] != '' ? $_GET['city'] : '' ?>">
                    <input type="hidden" name="latitude" id="latitude" placeholder="Latitude"
                           value="<?php $_GET['latitude'] != '' ? $_GET['latitude'] : '' ?>">
                    <input type="hidden" name="longitude" id="longitude" placeholder="Longitude"
                           value="<?php $_GET['longitude'] != '' ? $_GET['longitude'] : '' ?>">
                    <input type="hidden" name="place_id" id="location_id" placeholder="Location Ids"
                           value="<?php $_GET['place_id'] != '' ? $_GET['place_id'] : '' ?>">


                    <img src="<?php echo get_template_directory_uri() . '/assets/images/ic_location.png' ?>">
                </div>
            </div>
            <div class="col-lg-2 pl-lg-0 border-0 brdrr-1">
                <div class="select-address">
                    <input type="input" autocomplete="off" id="inputDate" class="datepicker" name="date"
                           placeholder="Select Date" value="<?php $_GET['date'] != '' ? $_GET['date'] : '' ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/ic_date.png' ?>">
                </div>
            </div>


            <div class="col-lg-2  brdrr-1">
                <div class="select-address" style="padding-left: 6px;">
                    <?php echo do_shortcode("[show-time]"); ?>
                    <img class="select-time"
                         src="<?php echo get_template_directory_uri() . '/assets/images/ic_time.png' ?>">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="input-btn d-flex">
                    <div class="outer-main">
                        <input type="" id="search_input" name="search" placeholder="Types of service, cuisines, chefs…"
                               value="<?php $_GET['search'] != '' ? $_GET['search'] : '' ?>" style="font-size: 18px;"
                               autocomplete="off">
<!--                        <div class="dropdown">-->
<!--                            <div id="myDIV">-->
<!--                                <div id="relatedSearchProduct" class="dropdown-content" style="display: none"></div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <button class="theme-search-button with-background float-right hover-ripple search-button">Find A
                        Chef
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">


</script>
