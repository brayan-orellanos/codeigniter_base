$(function() {
  $("#roles").validate({
    rules: {
      name: {
        required: true
      }
    },
    message: {
      name: 'El campo nombre es requerido'
    },
    errorPlacement: function (error, element) {
      $(".invalid-feedback").remove();
      error.addClass("invalid-feedback");
      error.insertAfter(element.parent());
    }
  })

  $("#roles").ajaxForm({
    dataType: "json",
    success: add
  })
})

function add(response) {
  show_alert_and_event(response.value, response.message, function() {
    if(response.value) {
      window.location.href = $index
    }
  })
}