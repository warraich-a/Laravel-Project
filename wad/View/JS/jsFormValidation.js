
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


function Validation()
{
  
    var x = document.forms["validationForm"]["name"].value;
    var y = document.forms["validationForm"]["email"].value;

    var p1 = document.forms["validationForm"]["password_1"].value;
    var p2 = document.forms["validationForm"]["password_2"].value;
    if (x == "") 
    {
    alert("Name must be filled out");
    return false;
    }
    if (y == "") 
    {
    alert("Email must be filled out");
    return false;
    }

    if(p1 != p2){
        alert("passwords must be same");
        return false;
    }

}


if(Validation() == false){
  $(document).ready(function(){
    $("button").click(function(){

      var basicTimeline = anime.timeline({
        autoplay: false
      });
      
      var pathEls = $(".check");
      for (var i = 0; i < pathEls.length; i++) {
        var pathEl = pathEls[i];
        var offset = anime.setDashoffset(pathEl);
        pathEl.setAttribute("stroke-dashoffset", offset);
      }
      
      basicTimeline
        .add({
          targets: ".text",
          duration: 1,
          opacity: "0"
        })
        .add({
          targets: "#btn_log",
          duration: 1300,
          width: 250,
          backgroundColor: "#FF6347",
          border: "0",
          borderRadius: 100
        })
        .add({
          targets: "button",
          duration: 2000,
          width: 300,
          easing: "linear"
        })
        .add({
          targets: "#btn_log",
          width: 0,
          duration: 1
        })
        .add({
          targets: "button",
          width: 250,
          duration: 750,
          borderRadius: 0,
          backgroundColor: "#FF6347"
        })
        .add({
          targets: pathEl,
          strokeDashoffset: [offset, 0],
          duration: 200,
          easing: "easeInOutSine"
        });
      
      $("#btn_log").click(function() {
        basicTimeline.play();
      });
      
      $(".text").click(function() {
        basicTimeline.play();
      });
      // $("#btn_log").css("background-color", "red").effect("shake");
    });
  });
}


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}