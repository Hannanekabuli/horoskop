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

function addHoroscope(){

    console.log("Du kom in i addHoroscope")

}

function update() {
    let inputDate = document.getElementById('input').value;
    let url = "./server/updateHoroscope.php"
    let method = "POST"

    let formData = new FormData()
    formData.set("date", inputDate)
    makeRequest(url, method, formData, (result) => {
        cosole.log(result);
        if(result) {
            getHoroscope();
        }
    });
}



function update() {
    let inputDate = document.getElementById('input').value;
    let url = "./server/viewHoroscope.php"
    let method = "GET"

    let formData = new FormData()
    formData.set("date", inputDate)
    makeRequest(url, method, formData, (result) => {
        cosole.log(result);
        if(result) {
            getHoroscope();
        }
    });
}


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



function deleteResult() {
    let url = "./server/deleteHoroscope.php"
    let method = "DELETE"
    let formData = new FormData()
    formData.set("date", 0)
    makeRequest(url, method, formData, function(result){
        if(result){
            document.getElementById("resultText").innerText = "radera mitt horoskop";
        
            }; 
}


function makeRequest(url, method, formData, callback){
 
    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        return response.json()
    }).then((result) => {
        console.log(result)
        callback(result)
    }).catch((err) => {
        console.log("Error : ",err); 
    })
}


