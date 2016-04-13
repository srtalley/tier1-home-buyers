jQuery(function($) {

  // Show the infield label on forms
  $('.infield-label').infieldLabel();

  //Allow closing the lightbox by clicking outside the image
  $(document)
      .on('click touchend','#swipebox-slider .current img', function(e){
          return false;
      })
      .on('click touchend','#swipebox-slider .current', function(e){
          $('#swipebox-close').trigger('click');
      });

  //Contact Form 7 Events
  $('body').on('click', '.ui-widget-overlay', close);
  $(document).on('spam.wpcf7', function () {
    ShowStyledAlert("Unable to submit form", "There was an error sending your message. Please try again.");
  });
  $(document).on('mailfailed.wpcf7', function () {
      ShowStyledAlert("Unable to submit form", "There was an error sending your message. Please try again.");
    });
  $(document).on('invalid.wpcf7', function () {

     ShowStyledAlert("Invalid form input", "Please enter valid information in the form.");
     var $invalidFormElements = $('.wpcf7-not-valid-tip').parent().find('.wpcf7-not-valid');
     //outline the invalid elements
     $invalidFormElements.css({"outline": "2px solid #FF2922"});
     //hide any tips
     $('.wpcf7-not-valid-tip').css({"display": "none"});
    });

    $(document).on('mailsent.wpcf7', function () {
      ShowStyledAlert("Success!", "Thank you for your interest. Your form was submited successfully. We will be in touch with you soon.");
      SuccessfulSubmit();
    });

    //Listen for a submit
    // $(".tier1-contact").submit( function() {
    //   $('.submit').click(function(e) {
    //   console.log("hi");
    //   var $submitButton = $contactForm.closest('form').find(':submit');
    //   var $submitButtonTextOriginal = $submitButton.val();
    //   console.log($submitButtonTextOriginal);
    // });
  //Contact form 7 alert on submit
  function ShowStyledAlert( alertTitle, alertMessage) {
    var $contactForm = $(".tier1-contact");

    //hide the contact form 7 response
    $('.wpcf7-response-output').css({"display": "none"});
    $("#dialog").attr("title", alertTitle);
    $("#dialog").text(alertMessage);
    $( "#dialog" ).dialog({
      modal: true,
      closeOnEscape: true,
      dialogClass: 'wpcf7-form-alert',
      position: {
        my: 'center',
        at: 'center',
        of: $contactForm
      }
    });
  } //end function ShowStyledAlert( alertTitle, alertMessage)

  //Contact form 7 submit function
  function SuccessfulSubmit() {
    var $contactForm = $(".tier1-contact");
    var $contactFormWrap = $contactForm.find('.form-input-wrap');
    var $contactFormHeight = $($contactForm).css("height");
    $successMessage = '<h1>Thank you for contacting us!</h1><P><i class="fa fa-check-circle"></i></P>';
    $contactFormWrap.html($successMessage);
    $contactForm.css({ "height": $contactFormHeight });
    $contactForm.addClass('flex-line-center');
  } //end function SuccessfulSubmit()
});
