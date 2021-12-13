

function addContentToWebpage(){

    let logic = document.getElementsByTagName("logic")[0]
    let horoscope = document.querySelector(".horoscope")

    
    let container = document.createElement("div")
    container.classList.add("inputDiv")
    horoscope.appendChild(container)

    
    let date = document.createElement("h3")
    date.classList.add("date")
    container.appendChild(date)


    
    let buttons = document.createElement("div")
    buttons.classList.add("buttons")
    buttons.setAttribute("id", "buttons1")
    logic.appendChild(buttons) 



}


    






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


function add() {
    const saveHoroscope = document.getElementById("sparaHoroscope");
    saveHoroscope.onclick = send;
    const updateHoroscope = document.getElementById("updateraHoroskops");
    updateHoroscope.onclick = update;
    const deleteHoroscope = document.getElementById("raderaHoroscope");
    deleteHoroscope.onclick = deleteResult;
}; 


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




