var serviceid;
var servicename;
var servicecontent;
/*   custom code */

function openserviceeditmodal(id) {

    //    alert(id);
    //    $("#myservices").modal('show');
    $("#firstserviceimage").val('');
    serviceid = id;


    $.ajax({
        type: "POST",
        url: "http://localhost/quickdev%20Solutions/getmodalcontent.php",
        data: 'id=' + serviceid,
        timeout: 10000,
        success: function (response) {

            if (response != 'false') {

                var userdata = $.parseJSON(response);

                $(userdata).each(function (index, element) {

                    $('#service_headingname').val(element.services_heading);
                    $('#service_maincontent').val(element.services_text);
                    //                    $('#abc').html("<img src='img/" + element.services_image + "'  width=30% />");
                    $("#serviceimageshow").attr('src', 'img/' + element.services_image);
                    servicename = element.services_heading;
                    servicecontent = element.services_text;
                })
                $("#myservices").modal('show');


            } else {
                alert('problem occured!!.. try again');

            }

        },
        error(x, t, r) {
            if (t == 'timeout') {
                alert('connection timeout');
            }
        },

    });

}



function submitmainheadings() {

    var maintagline = $('#maintagline').val();
    var offerheading = $('#offerheading').val();
    var offertext = $('#offertext').val();
    //            alert(maintagline + offerheading + offertext);
    $.ajax({
        type: "POST",
        url: "http://localhost/quickdev%20Solutions/addnewcontent.php",
        data: 'maintagline=' + maintagline + '&offerheading=' + offerheading + '&offertext=' + offertext,
        timeout: 10000,
        success: function (response) {

            if (response != 'false') {

                window.setTimeout(function () {
                    location.reload()
                }, 1000);

            } else {
                alert('problem occured!!.. try again');

            }

        },
        error(x, t, r) {
            if (t == 'timeout') {
                alert('connection timeout');
            }
        },

    });

}

 

function submitfirstservicesdetails() {
    alert(serviceid);
    var servicenamenew = $('#service_headingname').val();
    var servicecontentnew = $('#service_maincontent').val();

   
    if (servicenamenew == '' || servicecontentnew == '') {
        alert('Service header and content should not be blanked');

    }
    //    var file_data = $('#firstserviceimage').prop('files')[0];
    //    var form_data = new FormData();
    //    form_data.append('file', file_data);
    //    form_data.append("id", serviceid);
    //    form_data.append("service_heading", servicenamenew);
    //    form_data.append("service_content", servicecontentnew);
    //    //            alert(servicename_first + servicecontent_first + file_data);
    //    $.ajax({
    //        url: 'image_upload.php', // point to server-side PHP script 
    //        //        dataType: 'text', // what to expect back from the PHP script, if anything
    //        cache: false,
    //        contentType: false,
    //        processData: false,
    //        data: form_data,
    //        type: 'POST',
    //        success: function (output) {
    //            alert(output); // display response from the PHP script, if any
    //            $('#firstserviceimage').val(''); /* Clear the file container */
    //        }
    //    });


}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#serviceimageshow')
                .attr('src', e.target.result)
                .width('30%');
        };

        reader.readAsDataURL(input.files[0]);
    }
}
