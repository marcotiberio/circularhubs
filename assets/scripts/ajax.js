import $ from 'jquery'

function load_more_posts() {
  var page = 1;

  $(document).on('click', '#load-more-news', function(e) {
    e.preventDefault();
    page++;

    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'get_posts',
        get_page: page,
        get_category: $(this).data('category')
      },
      success: function(data) {
        if($('<div></div>').html(data).find('.archive__item.ended').size() > 0) $('#load-more-news').parents('.cta').remove();
        else $('#load-more-news').parents('.cta').show();
        $('#archive__list').append(data);
      },
      error: function(data) {
        console.log(data);
      }
    });
  });
}
