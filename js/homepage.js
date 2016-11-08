jQuery(document).ready(function () {
  jQuery("#blueSlider").slider({
    orientation: "horizontal",
    range: "min",
    value: 1200,
    animate: true,
    min: 1200,
    max: 6000,
    step: 1200,
    slide: function (event, ui) {
      jQuery("#amount").val(ui.value);
    }
  });
  jQuery("#amount").val(jQuery("#blueSlider").slider("value"));

  jQuery("#blueSlider").slider({
    change: function (event, ui) {
      var pos = jQuery('#blueSlider').slider('value'),
        active = "-active";
      console.log(pos);

      jQuery(".itemPerson").each(function (index) {
        var child = jQuery(this).children();
        if ((pos >= child.data("value")) && (index > 0)) {
          if (child.hasClass('family' + index + active) != true) {
            child.addClass('family' + index + active);
          }
        } else {
          child.removeClass('family' + index + active);
        }

      });
    }
  });

  jQuery(".itemPerson").each(function (index) {
    var child = jQuery(this).children();
    child.click(function () {
      var pos = child.data("value");
      jQuery("#blueSlider").slider({value: pos});
      console.log(pos + "f");
    });
  });
});

    jQuery(function(){
            jQuery('#check-yes').click(function(){
                jQuery('#check-yes').addClass('check-active');
                 jQuery('#check-no').removeClass('check-active');
                 

            });
             jQuery('#check-no').click(function(){
                jQuery('#check-no').addClass('check-active');
                 jQuery('#check-yes').removeClass('check-active'); });
        });

