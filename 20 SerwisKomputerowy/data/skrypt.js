//toggle class
//ajax - technologia php
const formularz = document.querySelector("form");
const rodzaj = document.getElementById("rodzaj");
const firma = document.getElementById("firma");
const problem1 = document.getElementById("problem");
const problem2 = document.getElementById("problem2");
const innyProblem = document.getElementById("InnyProblem");
const opcja = document.getElementsByClassName("inne");
const labele = document.querySelectorAll("label");
const marka = document.querySelectorAll("option");
const InnaMarka = document.getElementById("InnaMarka");
const obliczenie = document.getElementById("obliczenia");
const op1 = document.querySelectorAll("#problem option");
const op2 = document.querySelectorAll("#problem2 option");
const modelino = document.querySelector("#model");

function inneRzeczy() {
  if (problem1.style.display == "block" && opcja[0].selected)
    innyProblem.style.display = "block";
  else {
    innyProblem.style.display = "none";

    if (problem2.style.display == "block" && opcja[1].selected)
      innyProblem.style.display = "block";
    else innyProblem.style.display = "none";
  }
}

function inneMarki() {
  if (problem1.style.display == "block" && marka[6].selected)
    InnaMarka.style.display = "block";
  else InnaMarka.style.display = "none";
}

function laptop() {
  formularz.style.display = "block";
  rodzaj.value = "Laptop";
  firma.style.display = "block";
  problem1.style.display = "block";
  problem2.style.display = "none";
  labele[4].style.display = "block";
  modelino.style.display="block";
}

function komputer() {
  formularz.style.display = "block";
  rodzaj.value = "Komputer Stacjonarny";
  firma.style.display = "none";
  problem1.style.display = "none";
  problem2.style.display = "block";
  labele[4].style.display = "block";
  modelino.style.display="none";
}

function inne() {
  formularz.style.display = "block";
  rodzaj.value = "Inne Urządzenie";
  firma.style.display = "none";
  problem1.style.display = "none";
  problem2.style.display = "none";
  labele[4].style.display = "none";
  innyProblem.style.display = "block";
  modelino.style.display="none";
}

function oblicz() {
  let wynik = 0;
  let wynik2 = 150;
  let ext = document.querySelector("#extended");
  if (problem2.style.display == "block") {
    for (let i = 0; i < op2.length; i++) {
      if (op2[i].selected) wynik = parseInt(op2[i].value);
    }
  } else {
    for (let i = 0; i < op1.length; i++) {
      if (op1[i].selected) wynik = parseInt(op1[i].value);
    }
  }

  if (ext.checked) {
    wynik += parseInt(ext.value);
    wynik2 += parseInt(ext.value);
  }

  obliczenie.innerHTML = "Kwota całkowita: " + wynik + " zł";
  if (rodzaj.value == "Inne Urządzenie")
    obliczenie.innerHTML = "Kwota całkowita: " + wynik2 + " zł";
}
