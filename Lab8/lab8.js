
function getDataFromForm() {
  //Obtains the first name and last name from the form elements in index.html 
  //Calls runAjax and sends the two strings as arguments
  /* get the action attribute from the <form action=""> element */
  var $form = $(this),
    url = $form.attr('action');

  /* Send the data using post with element id name and name2*/
  var posting = $.post(url, {
    name: $('#name').val(),
    name2: $('#name2').val()
  });

  /* Alerts the results */
  posting.done(function(data) {
    $('#result').text('success');
  });
  posting.fail(function() {
    $('#result').text('failed');
  });

  //alert("it worked!");
  alert('name' + 'name2');
}

//Create a function titled runAjax(fname, lname) that: 
function runAjax(fname, lname) {
  //Makes an AJAX request to "./ajax.php" using the GET method.
  //The AJAX request should send the first and last names as a part of the request.

  //If the response from the AJAX call is # alert() the user with
  //the text "Error n Occurred" where n is the number received from the AJAX response.
  
  //If the response is a string, change the text of the paragraph element with the id "responseString".
}

