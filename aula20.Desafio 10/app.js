const input_range = document.querySelector("#input-range-porcetual");
const span_value_porcetual = document.querySelector("#value_porcetual");

span_value_porcetual.textContent = input_range.value

input_range.addEventListener("input", () => {
    span_value_porcetual.textContent = input_range.value
})