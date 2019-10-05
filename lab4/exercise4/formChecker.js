function formChecker() {
  let input = document.getElementsByTagName("input");

  for(let i = 0; i < input.length; i++) {
    if(input[i].value == "") {
      alert("Some fields were left blank");
      return false;
    }
  }

  let flamethrower = document.getElementById("flamethrower").value;
  let brick = document.getElementById("brick").value;
  let hat = document.getElementById("hat").value;

  if(flamethrower < 0 || brick < 0 || hat < 0) {
    alert("Enter a valid number");
    return false;
  }
}
