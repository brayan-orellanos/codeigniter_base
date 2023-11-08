function show_alert(state, message) {
	iziToast.show({
		backgroundColor: state ? "rgba(166,239,184,.9)" : "rgba(255,175,180,.9)",
		icon: state ? "fa-solid fa-check" : "fa-solid fa-triangle-exclamation",
		title: state ? "Éxito" : "Informacíón",
		message: message,
		timeout: 3500,
		position: "topRight",
	});

	if (document.querySelector(".iziToast-wrapper").children.length > 3) {
		document.querySelector(".iziToast-wrapper").lastElementChild.remove();
	}
}

function show_alert_and_event(state, message, event) {
	iziToast.show({
		backgroundColor: state ? "rgba(166,239,184,.9)" : "rgba(255,175,180,.9)",
		icon: state ? "fa-solid fa-check" : "fa-solid fa-triangle-exclamation",
		title: state ? "Éxito" : "Informacíón",
		message: message,
		timeout: 3500,
		position: "topRight",
		onClosed: function () {
			event();
		},
	});

	if (document.querySelector(".iziToast-wrapper").children.length > 3) {
		document.querySelector(".iziToast-wrapper").lastElementChild.remove();
	}
}
