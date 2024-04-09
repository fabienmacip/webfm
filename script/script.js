window.addEventListener("load", function () {
  if (
    typeof $("#toaster-decouverte-form") != "undefined" &&
    $("#toaster-decouverte-form").is(":visible")
  ) {
    alert(
      "Votre message a bien été envoyé. Nous vous recontactons dès que possible."
    );
  }

  localStorage.setItem("currentImgActiform", "1");
  localStorage.setItem("currentImgAppartementRentable", "1");
  localStorage.setItem("currentImgCustHomeBike", "1");
  localStorage.setItem("currentImgFatabien", "1");
  localStorage.setItem("currentImgImmoCashFlow", "1");
  localStorage.setItem("currentImgLmh", "1");
  localStorage.setItem("currentImgMacipCourtage", "1");
  localStorage.setItem("currentImgMontsEtLacs", "1");
  localStorage.setItem("currentImgMsr34", "1");
  localStorage.setItem("currentImgPcfLcf", "1");
});

function previousRealisationImg(cardName) {
  let currentImg = parseInt(localStorage.getItem("currentImg" + cardName));
  let nextImg = 0;

  let currentDivImages = $("#realisations-card-img-" + cardName + " img");

  if (currentImg === 1) {
    nextImg = currentDivImages.length;
  } else {
    nextImg = currentImg - 1;
  }

  localStorage.setItem("currentImg" + cardName, nextImg);
  currentDivImages.addClass("none");
  $("#realisations-card-img-" + cardName + "-" + nextImg).removeClass("none");
}

function nextRealisationImg(cardName) {
  let currentImg = parseInt(localStorage.getItem("currentImg" + cardName));
  let nextImg = 0;

  let currentDivImages = $("#realisations-card-img-" + cardName + " img");

  if (currentImg === currentDivImages.length) {
    nextImg = 1;
  } else {
    nextImg = currentImg + 1;
  }

  localStorage.setItem("currentImg" + cardName, nextImg);
  currentDivImages.addClass("none");
  $("#realisations-card-img-" + cardName + "-" + nextImg).removeClass("none");
}

function toggleUlDescriptionCommerciale(cardName) {
  if ($("#real-desc-comm-" + cardName).hasClass("none")) {
    $("#real-desc-comm-" + cardName).removeClass("none");
    $("#real-toggle-btn-comm-" + cardName).text("-");
  } else {
    $("#real-desc-comm-" + cardName).addClass("none");
    $("#real-toggle-btn-comm-" + cardName).text("+");
  }
}

function toggleUlDescriptionTechnique(cardName) {
  if ($("#real-desc-tech-" + cardName).hasClass("none")) {
    $("#real-desc-tech-" + cardName).removeClass("none");
    $("#real-toggle-btn-tech-" + cardName).text("-");
  } else {
    $("#real-desc-tech-" + cardName).addClass("none");
    $("#real-toggle-btn-tech-" + cardName).text("+");
  }
}

function closeContactFormToaster() {
  $("#toaster-decouverte-form").hide();
}

function checkContactFormField(field) {
  let error = false;

  if (field == "fsm-tel") {
    const regexPhone = /^(0)[1-9](\d{2}){4}$/;
    error =
      ($("#fsm-tel").val().length > 0 &&
        !regexPhone.test($("#fsm-tel").val())) ||
      $("#fsm-tel").val().trim().length < 1;
  } else {
    error =
      $("#" + field)
        .val()
        .trim().length < 3;
  }

  if (error) {
    $("#error-" + field).show();
  } else {
    $("#error-" + field).hide();
  }

  validFormRdv();
}

function validFormRdv() {
  let formOK = true;
  const regexPhone = /^(0)[1-9](\d{2}){4}$/;

  if ($("#fsm-prenom").val().length < 3) {
    formOK = false;
  }

  if ($("#fsm-tel").val().length > 0 && !regexPhone.test($("#fsm-tel").val())) {
    formOK = false;
  }

  if (!$("#fsm-conditions").prop("checked")) {
    formOK = false;
  }

  if (formOK) {
    $("#btn-envoyer-short-mail").addClass("btn-active");
    $("#btn-envoyer-short-mail").removeClass("btn-inactive");
    $("#btn-envoyer-short-mail").prop("disabled", false);
  } else {
    $("#btn-envoyer-short-mail").removeClass("btn-active");
    $("#btn-envoyer-short-mail").addClass("btn-inactive");
    $("#btn-envoyer-short-mail").prop("disabled", true);
  }
}
