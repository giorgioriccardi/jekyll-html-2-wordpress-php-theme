$(".formstack").submit(function(e) {
  e.preventDefault();

  var $form = $(this);
  $.post($form.attr("action"), $form.serialize()).then(function() {
    $('.formstack').fadeOut();
    $('.thanks').fadeIn();
  });
});

function validateForm(e) {
    var el = e.target;
    var emailReg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    // Check input fields
    if(e.value == null) {
        el.classList.add('required')
    } else {
        el.classList.remove('required')
    }

    // Check email fields
    if(el.type == 'email' && !emailReg.test(el.value)) {
        el.classList.add('required')
    }
    else {
        el.classList.remove('required')
    }

    // Toggle submit button
    if($('.fsField').hasClass('required')) {
        $('.submit').addClass('disabled')
    } else {
        $('.submit').removeClass('disabled')
    }

    // Clear if any empty fields
    if($('.fsField').val() == '') {
        $('.submit').addClass('disabled')
    }
}

$(document).ready(function(e) {
    $('.fsField').focus(function(e) {
        validateForm(e);
    })

    $('.fsField').blur(function(e) {
        validateForm(e);
    })
});
