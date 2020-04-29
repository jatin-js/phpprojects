studentBtn = document.querySelector(".studentBtn");
facultyBtn = document.querySelector(".facultyBtn");
wardenBtn = document.querySelector(".wardenBtn");

studentF = document.querySelector(".studentL");
facultyF = document.querySelector(".facultyL");
wardenF = document.querySelector(".wardenL");

// console.log(studentF);
studentBtn.addEventListener("click", studentForm);
facultyBtn.addEventListener("click", facultyForm);
wardenBtn.addEventListener("click", wardenForm);

function studentForm() {
  studentF.style.display = "block";
  facultyF.style.display = "none";
  wardenF.style.display = "none";
}

function facultyForm() {
  facultyF.style.display = "block";
  studentF.style.display = "none";
  wardenF.style.display = "none";
}

function wardenForm() {
  wardenF.style.display = "block";
  studentF.style.display = "none";
  facultyF.style.display = "none";
}
