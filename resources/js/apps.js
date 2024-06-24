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
databaseMonitoring.on("value", (snapshot) => {
  const data = snapshot.val();
  document.getElementById("concentrationCO1").textContent = data.concentrationCO1;
  document.getElementById("concentrationCO2").textContent = data.concentrationCO2;
  document.getElementById("concentrationNO2_1").textContent = data.concentrationNO2_1;
  document.getElementById("concentrationNO2_2").textContent = data.concentrationNO2_2;
  document.getElementById("waterLevelPercent").textContent = data.waterLevelPercent;

});