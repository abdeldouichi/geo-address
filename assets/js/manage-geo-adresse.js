import $ from 'jquery';

var find_geo = function () {

    $(document).ready(function () {
        $("#find-geo").click(function () {
            var adresse = $('#address').val();
            console.log("success function test  : "+adresse);



        });
    });
};

export default find_geo;