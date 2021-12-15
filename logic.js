

function add() {
    let inputDate = document.getElementById('input').ariaValueMax;
    if(inputDate.lemght){

        let url = "./server/addHoroscope.php"
        let method = "POST"


        let formData =new FormData()
        formData.set("data", inputDate)
        makeRequest(url, method. formData, (result) => {
            console.log(result);
            if(result) {
                getHoroscope();
            }
        });
    }else{
        console.log("välj ett datum")
    }
}


function update() {
    let inputDate = document.getElementById("date").value;
    let url = "./server/updateHoroscope.php"
    let method = "POST"
    let formData = new FormData()
    formData.set("date", inputDate)
    makeRequest(url, method, formData, function(result){
        if(result == true){
            show();
        } 
            console.log(result);    
}); 
};





function getHoroscope() {
    makeRequest("./server/viewHoroscope.php", "GET", underfind, (result) => {
        if(result) {
            document.getElementById('btn').innerHTML = result;
        }else{
            document.getElementById('btn').innerHTML = " ";
            console.log(result);
        }
    });
}


