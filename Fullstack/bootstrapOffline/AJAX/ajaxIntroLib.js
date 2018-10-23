var ajaxreq=false;
var ajaxCallback;

function ajaxRequest(filename){
  try {
    ajaxreq = new XMLHttpRequest();
  } catch (e) {
    return false
  } finally {
  }

  ajaxreq.open("GET", filename);
  ajaxreq.onreadystatechange = ajaxResponse;
  ajaxreq.send(null);
}

function ajaxResponse(){
  if (ajaxreq.readyState != 4)
    return;

  if (ajaxreq.status == 200) //if the req succeeded
  {
    if (ajaxCallback)
      ajaxCallback();
  }

  else
    alert("Request failed " + ajaxreq.statusText);

  return true
}

function ajaxCallback(){
  document.log("ajaxCallback");
}
