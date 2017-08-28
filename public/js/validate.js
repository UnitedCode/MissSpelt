function validateCreate() {
	var result = true;
	var errorMessage = "Oh snap! Looks like there are some mistakes in the form. Please make any necessary changes and try again.";
	var firstname = document.forms["create"]["firstname"].value;
	var lastname = document.forms["create"]["lastname"].value;
	var contactType = document.forms["create"]["contact"].value;
	var phone = document.forms["create"]["phone"].value;
	var email = document.forms["create"]["email"].value;
	var partyMembers = document.forms["create"]["party_members"].value;
	var location = document.forms["create"]["location"].value;
	var date = document.forms["create"]["date"].value;
	var time = document.forms["create"]["time"].value;

	if (firstname == null || firstname == "") {
		$("#firstName").addClass("error");
		result = false;
	}
	if (lastname == null || lastname == "") {
		$("#lastName").addClass("error");
		result = false;
	}
	if (contactType === "phone") {
		if (phone == null || phone == "") {
			$("#phoneInput").addClass("error");
			result = false;
		}
	} else if (contactType === "email") {
		if (email == null || email == "") {
			$("#emailInput").addClass("error");
			result = false;
		}
	} else {
		result = false;
	}
	if (partyMembers == null || partyMembers == "") {
		$("#partyMembers").addClass("error");
		result = false;
	}
	if (location == null || location == "none") {
		$("#location").addClass("error");
		result = false;
	}
	if (date == null || date == "") {
		$("#datetimepicker").addClass("error");
		result = false;
	}
	if (time == null || time == "none") {
		$("#time").addClass("error");
		result = false;
	}
	if (result === false) {
		document.getElementById("error_msg").innerHTML = '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><p><strong>' + errorMessage + '</strong></p></div>';
		$('html, body').animate({ scrollTop: 0 }, 'slow');
	}
	return result;
}

function validateCheck() {
	var result = true;
	var errorMessage = "Oh snap! Looks like there are some mistakes in the form. Please make any necessary changes and try again.";
	var firstname = document.forms["check"]["firstname"].value;
	var lastname = document.forms["check"]["lastname"].value;
	var contactType = document.forms["check"]["contact"].value;
	var phone = document.forms["check"]["phone"].value;
	var email = document.forms["check"]["email"].value;

	if (firstname == null || firstname == "") {
		$("#firstName").addClass("error");
		result = false;
	}
	if (lastname == null || lastname == "") {
		$("#lastName").addClass("error");
		result = false;
	}
	if (contactType === "phone") {
		if (phone == null || phone == "") {
			$("#phoneInput").addClass("error");
			result = false;
		}
	} else if (contactType === "email") {
		if (email == null || email == "") {
			$("#emailInput").addClass("error");
			result = false;
		}
	} else {
		result = false;
	}
	if (result === false) {
		document.getElementById("error_msg").innerHTML = '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><p style="font-size:14px;"><strong>' + errorMessage + '</strong></p></div>';
		$('html, body').animate({ scrollTop: 0 }, 'slow');
	}
	return result;
}

function validateReview() {
	var result = true;
	var errorMessage = "Oh snap! Looks like there are some mistakes in the form. Please make any necessary changes and try again.";
	var firstname = document.forms["reviews"]["firstname"].value;
	var lastname = document.forms["reviews"]["lastname"].value;
	var review = document.forms["reviews"]["review"].value;

	if (firstname == null || firstname == "") {
		$("#firstName").addClass("error");
		result = false;
	}
	if (lastname == null || lastname == "") {
		$("#lastName").addClass("error");
		result = false;
	}
  if (review == null || review == "") {
		$("#review").addClass("error");
		result = false;
	}

	if (result === false) {
		document.getElementById("error_msg").innerHTML = '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><p style="font-size:14px;"><strong>' + errorMessage + '</strong></p></div>';
	}
	return result;
}
