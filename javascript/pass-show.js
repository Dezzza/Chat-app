$(document).ready(function() {

  $("#icon-click").click(function() {

    var className = $("#icon").attr('class');
    className = className.indexOf('slash') !== -1 ? 'fa fa-eye' : 'fa fa-eye-slash'

    $("#icon").attr('class', className);
    var input = $("#pass");

    if (input.attr("type") == "text") {
      input.attr("type", "password");
    } else {
      input.attr("type", "text");
    }
  });

});


$(document).ready(function() {

  $("#icon-clicks").click(function() {

    var className = $("#icons").attr('class');
    className = className.indexOf('slash') !== -1 ? 'fa fa-eye' : 'fa fa-eye-slash'

    $("#icons").attr('class', className);
    var input = $("#passw");

    if (input.attr("type") == "text") {
      input.attr("type", "password");
    } else {
      input.attr("type", "text");
    }
  });

});
