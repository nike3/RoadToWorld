var checkedValue = "No";
document.getElementById("guideCheck").addEventListener('change', function() {
    if(this.checked) {
        checkedValue = "Yes";
    } else {
        checkedValue = "No";
    }
});

$(function(){

  //$.getJSON('/api', update);

  

  $('.bookingForm').submit(function(e){
    e.preventDefault();
    
    $.post('/booking', {
      name: $('#name').val(),
      tour: $('#tourName').text(),
      email: $('#email').val(),
      phone: intlNumber,
      date: $('#date').val(),
      person: $('#person').val(),
      guide: checkedValue,
      message: $('#message-text').val(),
      _token: $('meta[name="csrf-token"]').attr('content')
    }, update);
  });

  function update(data){
    
    $('#messageModal').modal('hide');
    $('#successMessage').modal('show');
  }


});
