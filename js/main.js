window.onload = function () {
	DB.getData().then((res) => {
		controlPage(res);
	});
};

let inputSearch = document.querySelector("[type='search']");
let paymentsBody = document.querySelector("#payments-body");
let totalPayments = document.querySelector("#total-payments");
let findBtns = document.querySelectorAll(".find-btn");
let infoBtns = document.querySelectorAll(".info-btn");
let modalHeading = document.querySelector("#modal-heading");
let modalBody = document.querySelector(".modal-body");

const modal = new bootstrap.Modal("#staticBackdrop");

infoBtns.forEach((el) => {
	el.addEventListener("click", function() {
		DB.findStudent(this.getAttribute("data-email")).then(student => {
			modalHeading.innerText = student.email;
			modalBody.innerText = student.info;
		});
		modal.show();
	})
})


function controlPage(payments) {
	let pays = [...payments];

	inputSearch.addEventListener("input", function () {
		let searchTerm = this.value;
		let filtered = pays.filter((el) => el.email.includes(searchTerm));
		refreshTable(filtered);
	});

	findBtns.forEach((el) => {
		el.addEventListener("click", function() {
			let email = this.getAttribute("data-email");
			let filtered = pays.filter((el) => el.email.includes(email));
			refreshTable(filtered);
		})
	})
}

function refreshTable(filtered) {
	let total = 0;
	let tablePayments = "";
		filtered.forEach((el) => {
			tablePayments += `<tr>
                                <td>${el.email}</td>
                                <td>${el.created_at}</td>
                                <td class="text-end">${el.amount}</td>
                            </tr>`.trim();
			total += el.amount;
		});
		paymentsBody.innerHTML = tablePayments;
		totalPayments.innerHTML = total;
}
