function add() {
    let inputDate = document.getElementById('input').value;
    if(inputDate.length) {

        let url = "./server/addHoroscope.php"
        let method = "POST"
        
        let formData = new FormData()
        formData.set("date", inputDate) 
        makeRequest(url, method, formData, (result) => {
            console.log(result); 
            if(result) {
                getHoroscope();
            }
        });
    } else {
        console.log("Välj ett datum!")
    }

}

function update() {
    
    let inputDate = document.getElementById('input').value;

    let url = "./server/updateHoroscope.php"
    let method = "POST"
    
    let formData = new FormData()
    formData.set("date", inputDate) 
    makeRequest(url, method, formData, (result) => {
        console.log(result); 
        if(result) {
            getHoroscope();
        }
    });
}

function erase() {
    
    let inputDate = document.getElementById('input').value;

    let url = "./server/deleteHoroscope.php"
    let method = "DELETE"
    
    let formData = new FormData()
    formData.set("date", inputDate) 
    makeRequest(url, method, formData, (result) => {
        console.log(result); 
        if(result) {
            getHoroscope();
        }
    });
}

function makeRequest(url, method, formData, callback) {
    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        return response.json()
    }).then((result) => {
        callback(result);
    }).catch((err) => {
        console.log("Error: ", err)
    })
    
}

function getHoroscope() {
    makeRequest("./server/viewHoroscope.php", "GET", undefined, (result) => {
        if(result) {
            document.getElementById('printDiv').innerHTML = result;
        } else {
            document.getElementById('printDiv').innerHTML = " ";
            console.log(result);
        }
        
    });
}

getHoroscope();