var t;

//start a timeout with each keypress to allow time for key to appear (200ms)
function startSearch(){
  if (t)
    window.clearTimeout(t);

    t = window.setTimeout("liveSearch()", 200);
}

function liveSearch() {
  query = document.getElementById("searchlive").value;
  filename = "ajaxSearch.php?query=" + query;
  ajaxCallback = displayResults;
  ajaxRequest(filename);
}

function displayResults() {
  //remove old list
  ul = document.getElementById("list");
  div = document.getElementById("results");
  div.removeChild(ul);

  //make new list
  ul = document.createElement("ul");
  ul.id = "list";
  names = ajaxreq.responseXML.getElementsByTagName("name");
  for (i = 0; i < names.length; i++)
  {
    li = document.createElement("li");
    name = names[i].firstChild.nodeValue;
    text = document.createTextNode(name);
    li.appendChild(text);
    ul.appendChild(li);
  }

  if (names.length == 0) {
    li = document.createElement("li");
    li.appendChild(document.createTextNode("No results"));
    ul.appendChild(li);
  }

  //display the new list
  div.appendChild(ul);
}

obj = document.getElementById("searchlive");
obj.onkeydown = startSearch;
