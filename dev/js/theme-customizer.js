jQuery(function () {
    // if our data block is not available, don't do anything
    var $myData = jQuery('#myData');
    if (!$myData.length)
        return;

    // attempt to parse the content of our data block
    try {
        $myData = JSON.parse(jQuery.myData.text());
    } catch (err) { // invalid json
        return;
    }

    // if parsing was successful, you should see the data in your console
    console.log($myData);
});