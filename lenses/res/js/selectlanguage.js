$(document).ready(function(){
  $('form').on('submit', function (e) {
    $.post('select_language.php', $('form').serialize())
    .done(function(response) {
      $('#lang_container').html(response);
    })
    .fail(function() {
      alert( "error" );
    })
  e.preventDefault();});
});
