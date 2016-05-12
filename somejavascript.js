window.submitdata = function (){
 
    // abort any pending request
        if (request) {
            console.log("msg: aborted");
            request.abort();
        }
 
     var serializedData = jQuery("#filterform").serialize();
 
         request = jQuery.ajax({
            type: 'POST',
            url: "/wp-content/plugins/wp-myplugin/handler.php",
            data: serializedData
        });
 
        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
            // log a message to the console
            jQuery("#productgrid").html(response);
            console.log("msg: it worked!");
        });
 
        // callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
            // log the error to the console
            console.error(
                "msg: The following error occured: "+
                    textStatus, errorThrown
            );
        });
 
        // callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
        });
    }
