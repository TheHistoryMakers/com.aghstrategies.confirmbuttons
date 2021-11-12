CRM.$(function($) {
  $('button.crm-form-submit.crm-button-type-next').text('Review Membership');
  $('#editrow-custom_19').hide();
  $('#custom_18_Other').click(function(){
    $('#editrow-custom_19').toggle();
  });
});
