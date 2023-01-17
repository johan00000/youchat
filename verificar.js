function sendRequest() {

    var theObject = new XMLHttpRequest();
    theObject.open('POST', 'crud.php', true);
    theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    theObject.onreadystatechange = function() {
      if(theObject.readyState === 4 & theObject.status === 200) {
        document.getElementById('container').innerHTML = theObject.responseText;
      }
    }

    theObject.send('username=Fazt&password=secret');
  }