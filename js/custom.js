//Display data before submit

const input = document.getElementById('firstname');
const textElement = document.getElementById('displayText');

function updateValue(e) {
  textElement.textContent = e.target.value;
}
input.addEventListener('input', updateValue);

//Copyright
var date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;


// Your Code

const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}


// My Stuff

// Create an Empty Object
var the_data_obj = {};

// On change of input elements to update the object
$(".user_change").change(function(){
	var changed_field = $(this).attr("data-name");
  var changed_field_val = $(this).val();

   the_data_obj[changed_field] = changed_field_val;
  // Finally view the added stuff 
  $("#"+changed_field).text(changed_field_val);
  
  console.log(the_data_obj);
});