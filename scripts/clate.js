const stringToDate = function(dateString) {
    const [yyyy,mm,dd] = dateString.split("-");
    return new Date(`${yyyy}-${mm}-${dd}`);
};
var today = new Date();
if(String(today.getDate()).length==1){
    var date = today.getFullYear()+'-0'+(today.getMonth()+1)+'-0'+today.getDate();
}
else{
    var date = today.getFullYear()+'-0'+(today.getMonth()+1)+'-'+today.getDate();
}
var t = document.querySelectorAll("table")[0]
let rows = t.rows.length
let j = 4
for(let i = 1;i<rows;i++){
    let temp = document.querySelectorAll("td")[j].innerText
    console.log(stringToDate(temp), stringToDate(date))
    if(stringToDate(temp)<=stringToDate(date)){
        document.querySelectorAll("td")[j].style.backgroundColor = "red";
    }
    j+=6
}