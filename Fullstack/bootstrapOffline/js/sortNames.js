var numbernames = 0;
var names = new Array();

function SortNames() {
  thename = document.theform.newname.value;
  names[numbernames] = thename;
  numbernames++;
  names.sort();

  document.theform.sorted.value = names.join("\n");

}
