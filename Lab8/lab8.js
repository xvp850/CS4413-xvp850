
function getDataFromForm() {
  /* Obtains the first name and last name from the form elements in index.html
  * index.html was missing the Ids so I created a node list then parsed it
  * Another option was to use [].map.call */
 
  var inputList = document.querySelectorAll('input');
  var nameArray = [];
  for(var i = 0; i <= inputList.length-1; i++){
    nameArray.push(inputList[i].value);
  }

  runAjax(nameArray[0], nameArray[1])
}

function runAjax(fname, lname) {
  
  const xhttp = new XMLHttpRequest();

  //xhttp.onload = function() {
  //edit this
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajaxCall").innerHTML = this.responseText;
      } else {
        alert("Error " + this.readyState + " Occurred");
      }
  }
  /* Makes an AJAX request to "./ajax.php" using the GET method. */
  //xhttp.open('GET', "ajax.php?fname=" + fname + "&lname=" + lname, true);
  xhttp.open('GET', "ajax.php", true);
  xhttp.send();
  if((typeof(responseString) == 'string')) {
    //xhttp.send(responseString);
  }
}

