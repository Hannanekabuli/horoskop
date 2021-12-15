

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


    let save = document.createElement("div")
    save.classList.add("btn")
    save.setAttribute("id", "save1")
    save.innerText = "Spara mitt horoskop"
    buttons.appendChild(save) 
    save.addEventListener("click", () => {
   makeRequest(addHoroscope,"./server/addHoroscope.php", "POST")
})



    let update = document.createElement("div")
    update.classList.add("btn")
    update.setAttribute("id", "update1")
    update.innerText = "Uppdatera mitt horoskop"
    buttons.appendChild(update) 
    update.addEventListener("click", updateH)



    let deleteBtn = document.createElement("div")
    deleteBtn.classList.add("btn")
    deleteBtn.setAttribute("id", "delete1")
    deleteBtn.innerText = "Radera mitt horoskop"
    buttons.appendChild(deleteBtn) 
    deleteBtn.addEventListener("click", () => {
    makeRequest(deleteHoroscope,"./server/deleteHoroscope.php", "DELETE")
})

    document.querySelector("#btn").addEventListener("click", getHoroscop)

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




