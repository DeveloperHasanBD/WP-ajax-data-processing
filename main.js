$(".sub_category_menu ul li a").on('click', function (e) {
      var sub_cat_slug = $(this).attr('crzf_p_subcat');
      var url = action_url_ajax.ajax_url;
      $.ajax({
        url: url,
        data: {
          action: 'crzf_product_filter_as_subcat',
          sub_cat_slug: sub_cat_slug,
        },
        type: 'post',
        success: function (data) {
          $(".display_product_as_subcat").html(data);
        },
      });
      e.preventDefault();
    });
