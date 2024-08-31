
let district_array_data = [];

// --------------------- main frame ---------------------------

var map = L.map("map").setView([23.7806207, 90.3492859], 8);

const tileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

const attribution =
  "© OpenStreetMap contributors ♥ Make a Donation. Website and API terms";

const tiles = L.tileLayer(tileUrl, {
  attribution,
});

tiles.addTo(map);

// --------------------- main frame ---------------------------

// ------------------- Leaf Icon  --------------------------------
var greenIcon = L.icon({
  iconUrl: "./map_and_list_view/images/leaf-green.png",
  shadowUrl: "leaf-shadow.png",

  iconSize: [35, 95], // size of the icon
  //shadowSize:   [50, 64], // size of the shadow
  iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
  shadowAnchor: [4, 62], // the same for the shadow
  popupAnchor: [-3, -76], // point from which the popup should open relative to the iconAnchor
});

// ----------------- loop here -----------------------------


L.marker([22.6953793, 90.3187849], { icon: greenIcon })
  .addTo(map)
  .bindPopup(
    "<h4>District: Barishal</h4>No. of studies : 10<br> <a>Refine for this search</a>"
  );

// ----------------- loop here -----------------------------

// ------------------- Leaf Icon  --------------------------------


// --------------------------------------------------------------------------- bd district api -----------------------------------------------------

// axios.get('https://bdapis.herokuapp.com/api/v1.1/districts').then(el => {
//     el.data.data.forEach(el => {
//         if(el.district == "Barguna"){
//             console.log(el.coordinates);
//         }
//     });
// });


// --------------------------------------------------------------------------- bd district api -------------------------------------------------------

// -------------------------------------------------------------------------- distrcit array data ----------------------------------------------------




// -------------------------------------------------------------------------- distrcit array data ----------------------------------------------------
