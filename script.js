
//brisanje forme
function brisanje() {
    document.getElementById("myForm").reset();
}
document.getElementById("submitBtn").addEventListener("click", function objekat() {
    let object = document.querySelector("#myForm");
    for (let i = 0; i < object.length; i++) {
        let a = {
            name: object[i].id,
            value: object[i].placeholder
        }
        console.log(a);
    }
});