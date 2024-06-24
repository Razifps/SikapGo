// convert epochtime to JavaScripte Date object
function epochToJsDate(epochTime) {
  return new Date(epochTime * 1000);
}

// convert time to human-readable format YYYY/MM/DD HH:MM:SS

function epochToDateTime(epochTime) {
  var epochDate = new Date(epochToJsDate(epochTime));

  var dateTime =
    epochDate.getDate() +
    "/" +
    ("00" + (epochDate.getMonth() + 1)).slice(-2) +
    "/" +
    ("00" + epochDate.getFullYear()).slice(-4) +
    " " +
    ("00" + epochDate.getHours()).slice(-2) +
    ":" +
    ("00" + epochDate.getMinutes()).slice(-2) +
    ":" +
    ("00" + epochDate.getSeconds()).slice(-2);

  return dateTime;
}


const firebaseConfig = {
  apiKey: "AIzaSyBtiZPtt9PM2vTXFYae0xLPLAIAdNLvPZs",
  authDomain: "sikapgo-336a9.firebaseapp.com",
  databaseURL: "https://sikapgo-336a9-default-rtdb.firebaseio.com",
  projectId: "sikapgo-336a9",
  storageBucket: "sikapgo-336a9.appspot.com",
  messagingSenderId: "445949035047",
  appId: "1:445949035047:web:ca07b63111e8b7796bc402",
  measurementId: "G-W312SH2WHZ"
};

firebase.initializeApp(firebaseConfig);

var database = firebase.database();

const databaseMonitoring = firebase.database().ref("Data/Monitoring");
const databaseLogs = firebase.database().ref("Data/Logs");
databaseMonitoring.on("value", (snapshot) => {
  const data = snapshot.val();
  document.getElementById("concentrationCO1").textContent = data.concentrationCO1;
  document.getElementById("concentrationCO2").textContent = data.concentrationCO2;
  document.getElementById("concentrationNO2_1").textContent = data.concentrationNO2_1;
  document.getElementById("concentrationNO2_2").textContent = data.concentrationNO2_2;
  document.getElementById("waterLevelPercent").textContent = data.waterLevelPercent;

});

databaseLogs.orderByKey()
    .limitToLast(100)
    .on("child_added", function (snapshot) {
      if (snapshot.exists()) {
        var jsonData = snapshot.toJSON();

        var timestamp = jsonData.timestamp;

        var data = timestamp - 25200;

        var statusPakan;

        var table = $("#data-table").DataTable();

        // Menambahkan data baru ke dalam tabel

        table.row
          .add([
            epochToDateTime(data),
            jsonData.concentrationCO1,
            jsonData.concentrationCO2,
            jsonData.concentrationNO2_1,
            jsonData.concentrationNO2_2,
            jsonData.waterLevelPercent
          ])
          .draw();
      }
    });
