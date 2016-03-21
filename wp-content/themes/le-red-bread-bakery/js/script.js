

jQuery(function() {
  jQuery('#close-comments').on('click', function(event) {
    event.preventDefault();

    jQuery.ajax({
      method: 'post',
      url: lrb_vars.rest_url + 'wp/v2/posts/' + lrb_vars.post_id,
      data: {
        comment_status: 'closed'
      },
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', lrb_vars.comment_nonce);
      }
    }).done(function(response){
      alert('Success! Comments were closed.');

    });

  });
});
