let buttons = document.querySelectorAll('button.delete-place');

buttons.forEach(button => {

    let id = button.getAttribute('data-id');

    button.addEventListener('click', function(e){
        e.preventDefault();

        let formData = new FormData();
        formData.append('ID', id);
        formData.append('delete', 'delete');

        let xhr = new XMLHttpRequest();
        xhr.open('POST', '');
        xhr.send(formData);


        // when we're done with the request
        xhr.addEventListener('readystatechange', function(){
            if(xhr.readyState == XMLHttpRequest.DONE){

                // get a reference to the row for the place
                let row = button.closest("tr");

                //delete row
                row.remove();
            }
        });


    });

});

//Google Map API
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 15,
  });
}

window.initMap = initMap;

//TODO Use loop to put all the pins on the map
