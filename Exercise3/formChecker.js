document.addEventListener('submit', () => {
	if (conditions()) {
		console.log("true");
        document.forms['myform'].submit();
    }
	else {
		window.history.back();
	}
});

function conditions() {
	if (!checkEmail(document.getElementById('box1').value)) {
		alert('Not a valid email address.');
		return false;
	}
	if (document.getElementById('box1').value == '' || document.getElementById('box1').value == '') {
		alert('Email and/or password cannot be left blank.');
		return false;
	}
	arr = ['','','',''];
	arr[0] = document.getElementById('qt1').value
	arr[1] = document.getElementById('qt2').value
	arr[2] = document.getElementById('qt3').value
	arr[3] = document.getElementById('qt4').value

	if (arr[0] < 0 || arr[1] < 0 || arr[2] < 0 || arr[3] < 0) {
		alert('Quantities cannot be less than zero.');
		return false;
	}
	if (arr[0] == '' || arr[1] == '' || arr[2] == '' || arr[3] == '') {
		alert('Quantities cannot be blank.');
		return false;
	}
	if (document.getElementById('7day').checked == false && document.getElementById('3day').checked == false && document.getElementById('night').checked) {
		alert('You must choose a shipping method.');
		return false;
	}
	return true;
}

function checkEmail(email) {
	return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}