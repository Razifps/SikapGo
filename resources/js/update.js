function updateDeviceAndStatus() {
    var deviceCheckbox = document.getElementById('deviceToggle');
    var status = deviceCheckbox.checked ? 'ON' : 'OFF';
    var isOn = status === 'ON';

    document.getElementById('statusText').innerHTML = `Status: ${status}`;
    document.getElementById('fanInStatus').innerHTML = `Status: ${status}`;
    document.getElementById('fanOutStatus').innerHTML = `Status: ${status}`;
    document.getElementById('waterPumpStatus').innerHTML = `Status: ${status}`;

    // Set the slider enabled or disabled based on the device status
    document.getElementById('fanInSpeed').disabled = !isOn;
    document.getElementById('fanOutSpeed').disabled = !isOn;
    document.getElementById('waterPumpSpeed').disabled = !isOn;
}

function updateFanInSpeed(value) {
    if (!document.getElementById('fanInSpeed').disabled) {
        document.getElementById('fanInSpeedValue').innerText = value;
    }
}

function updateFanOutSpeed(value) {
    if (!document.getElementById('fanOutSpeed').disabled) {
        document.getElementById('fanOutSpeedValue').innerText = value;
    }
}

function updateWaterPumpSpeed(value) {
    if (!document.getElementById('waterPumpSpeed').disabled) {
        document.getElementById('waterPumpSpeedValue').innerText = value;
    }
}
