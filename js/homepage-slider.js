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
      jQuery("#blueSlider").slider({  value: pos,
         animate: 1000
        });
      console.log(pos + "f");
       jQuery("#amount").val(jQuery("#blueSlider").slider("value"));
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

jQuery(document).ready(function ($){
 
 
var stepForm = $("#orderForm");
var fieldsetCount = $('#orderForm').children().length;
var current = 1;
console.log(fieldsetCount);
var stepsWidth = 0;
var widths = new Array();

$('#steps .step').each(function (i) {
    var step = $(this);
    widths[i] = stepsWidth;
    stepsWidth += step.width();
});

$('#steps').width(stepsWidth);
console.log(stepsWidth);

$('#navigation a').on('click', function (e) {
    var $this = $(this);
    var prev = current;
    $this.closest('ul').find('li').removeClass('selected');
    $this.parent().addClass('selected');

    current = $this.parent().index() + 1;

    $('#steps').stop().animate({
        marginLeft: '-' + widths[current - 1] + 'px'
    }, 500, function () {
        $('#formElem').children(':nth-child(' + parseInt(current) + ')');
    });
    e.preventDefault();
    console.log(e.type);
});


$('#orderForm > fieldset').each(function () {
    var $fieldset = $(this);
});
});

function getValue(o)
{
jQuery("#blueSlider").slider({value: o.value});
console.log(o.value);

}

jQuery(document).ready(function() {
jQuery('#amount').keypress(function(key) {
if(key.charCode < 48 || key.charCode > 57) return false;
});
});	
