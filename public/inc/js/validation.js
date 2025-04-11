function validateInput() {
    let input = document.getElementById("options").value;
    let options = input.split(",").map(option => option.trim());

    for (let option of options) {
        if (option.length > 50) {
            alert("Кожен варіант має містити не більше 50 символів!");
            return false;
        }
    }
    return true;
}