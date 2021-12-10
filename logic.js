function add() {
    let inputDate = document.getElementById('card').ariaValueMax;
    if(inputDate.lemght){

        let url = "./server/ahhHoroscope.php"
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






