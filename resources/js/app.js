import "./bootstrap";

import Alpine from "alpinejs";
import { list } from "postcss";

window.Alpine = Alpine;

Alpine.start();

const basic = document.getElementById("basic");
const premium = document.getElementById("premium");
const eklusive = document.getElementById("eklusive");
const promo = document.getElementById("promo");
let promoCode ="GH123";
let total = document.getElementById("total");
let totalHarga =0;

promo.addEventListener("change", function () {
    if (totalHarga == 0) {
        return 0;
    }
    if (this.value == promoCode) {
        totalHarga = totalHarga - totalHarga / 10;
        total.value = "Rp. " + totalHarga;
    }
});
basic.addEventListener("click", function () {
    const harga = 500000;
    const name = "basic";
    addToCart(harga, name);
});
premium.addEventListener("click", function () {
    const harga = 850000;
    const name = "premium";
    addToCart(harga, name);
});
eklusive.addEventListener("click", function () {
    const harga = 1000000;
    const name = "eklusive";
    addToCart(harga, name);
});
function addToCart(harga, name) {
    const listTicket = document.createElement("li");
    listTicket.classList.add("flex");
    listTicket.classList.add("justify-between");
    const ticketName = document.createElement("h2");
    const ticketCost = document.createElement("p");
    ticketName.innerHTML = name;
    ticketCost.innerHTML = "Rp. " + harga;
    listTicket.appendChild(ticketName);
    listTicket.appendChild(ticketCost);
    const container = document.getElementById("container");
    container.appendChild(listTicket);
    totalHarga = totalHarga + harga;
    if (total.value == promoCode) {
        totalHarga = totalHarga - totalHarga / 10;
        total.value = "Rp. " + totalHarga;
    } else {
        total.value = "Rp. " + totalHarga;
    }
}
