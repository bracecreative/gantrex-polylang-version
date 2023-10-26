// load more ajax for blog archive page
var ppp = 6; // Post per page
var pageNumber = 1;

function load_posts() {
  pageNumber++;
  var str =
    "&pageNumber=" + pageNumber + "&ppp=" + ppp + "&action=more_post_ajax";
  jQuery.ajax({
    type: "POST",
    dataType: "html",
    cache: false,
    url: ajax_posts.ajaxurl,
    data: str,
    // beforeSend: function () {
    //   jQuery(".loaderDiv").fadeIn("200");
    // },
    success: function (data) {
      var $data = jQuery(data);
      if ($data.length) {
        jQuery("#ajax-posts").append($data);
        jQuery(".no-posts-message").hide();
      } else {
        jQuery(".no-posts-message").show().delay(2000).fadeOut();
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(errorThrown);
    },
  });
  return false;
}
jQuery("#more_posts").on("click", function (e) {
  // When btn is pressed.
  e.preventDefault();
  load_posts();
});
