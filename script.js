
function showAlert() {
    var myText = "Do you really want to submit data!";
    alert (myText);
  }

function showAlertreset() {
    var myText = "Do you really want to reset data!";
    alert (myText);
  }

  function validateForm() {
    var x = document.forms["form"]["name"]["phn_nmber"].value;
    if (x == "") {
      alert("Data must be filled out");
      return false;
    }
  }