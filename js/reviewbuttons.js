CRM.$(function($) {
  $('button.crm-form-submit.crm-button-type-next').text('Create Membership');
  $('button.crm-form-submit.crm-button-type-upload').text('Create Membership');
  $('#editrow-custom_19').hide();
  $('#custom_18_Other').click(function(){
    $('#editrow-custom_19').toggle();
  });
});
