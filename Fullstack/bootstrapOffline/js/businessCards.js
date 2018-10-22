function printCard(){
  var nameLine = "<strong>Name: </strong>" + this.name + "<br>";
  var emailLine = "<strong>email: </strong>" + this.email + "<br>";
  var addressLine = "<strong>address: </strong>" + this.address + "<br>";
  var phoneLine = "<strong>phone: </strong>" + this.phone + "<hr>";

  document.write(nameLine, emailLine, addressLine, phoneLine);
}

function Card(name, email, address, phone)
{
  this.name = name;
  this.email = email;
  this.address = address;
  this.phone = phone;
  this.printCard = printCard;
}

var sue = new Card("Sue Suthers", "sue@suthers.com", "123 Elm St, Yourtown St 99999", "555-555-5555");
var fred = new Card("Fred Suthers", "sue@suthers.com", "123 Elm St, Yourtown St 99999", "555-555-5555");
var jim = new Card("Jim Suthers", "sue@suthers.com", "123 Elm St, Yourtown St 99999", "555-555-5555");

sue.printCard();
fred.printCard();
jim.printCard();
