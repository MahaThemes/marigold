jQuery(document).ready(function () {

    /* If there are required actions, add an icon with the number of required actions in the About page -> Actions required tab */
    var maha_nr_actions_required = mahaWelcomeScreenObject.nr_actions_required;

    if ((typeof maha_nr_actions_required !== 'undefined') && (maha_nr_actions_required != '0')) {
        jQuery('li.maha-w-red-tab a').append('<span class="maha-actions-count">' + maha_nr_actions_required + '</span>');
    }

    /* Dismiss required actions */
    jQuery(".maha-dismiss-required-action").click(function () {

        var id = jQuery(this).attr('id');
        jQuery.ajax({
            type: "GET",
            data: {action: 'maha_dismiss_required_action', dismiss_id: id},
            dataType: "html",
            url: mahaWelcomeScreenObject.ajaxurl,
            beforeSend: function (data, settings) {
                jQuery('.maha-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + mahaWelcomeScreenObject.template_directory + '/inc/admin/welcome-screen/img/ajax-loader.gif" /></div>');
            },
            success: function (data) {
                location.reload();
                jQuery("#temp_load").remove();
                /* Remove loading gif */
                jQuery('#' + data).parent().slideToggle().remove();
                /* Remove required action box */
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    });
});
