// Function that triggers when the "Predict Water Quality" button is clicked
document.getElementById("predict-button").addEventListener("click", predictWaterQuality);

// Function to get current water parameters from <span> elements
function getTemperature() {
    return parseFloat(document.getElementById('temp-value').textContent.replace('°C', '').trim());  // Remove the °C and return the numeric value
}

function getPHLevel() {
    return parseFloat(document.getElementById('ph-value').textContent.replace('pH', '').trim());  // Remove "pH" and return the numeric value
}

function getOxygenLevel() {
    return parseFloat(document.getElementById('oxygen-value').textContent.replace('mg/L', '').trim());  // Remove "mg/L" and return the numeric value
}

function getAmmoniaLevel() {
    return parseFloat(document.getElementById('ammonia-value').textContent.replace('ppm', '').trim());  // Remove "ppm" and return the numeric value
}

// Function to call Flask API and predict water quality
function predictWaterQuality() {
    // Collect the water parameters from the <span> elements
    const temperature = getTemperature();  // Get the temperature value
    const pH = getPHLevel();  // Get the pH level
    const oxygen = getOxygenLevel();  // Get the oxygen level
    const ammonia = getAmmoniaLevel();  // Get the ammonia level

    // Log the parameters to the console for debugging
    console.log(`Temperature: ${temperature}, pH: ${pH}, Oxygen: ${oxygen}, Ammonia: ${ammonia}`);

    // Prepare the data to send to Flask (backend)
    const requestData = {
        Temperature: temperature,
        "pH Level": pH,
        "Ammonia Level": ammonia,
        "Dissolved Oxygen": oxygen
    };

    // Show a temporary message in the Recommendations tab
    createMessage('ai-monitor', "AI: Checking the water quality...", 'monitor');

    // Send the water quality prediction request to Flask backend
    fetch('http://localhost:5001/predict', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(requestData)
    })
    .then(response => response.json())
    .then(data => {
        // Check if the response contains a water quality result
        if (data.water_quality) {
            createMessage('ai-monitor', `AI: The water quality is ${data.water_quality}.`, 'monitor');
        } else if (data.error) {
            createMessage('ai-monitor', `AI: Error: ${data.error}`, 'monitor');
        }
    })
    .catch(error => {
        // If there’s an error with the fetch request, display it
        createMessage('ai-monitor', `AI: Something went wrong: ${error}`, 'monitor');
    });
}

// Function to create a new message in the specified tab's message area
function createMessage(tabId, message) {
    const tab = document.getElementById(`${tabId}-messages`);
    const newMessage = document.createElement('p');
    newMessage.textContent = message;
    tab.appendChild(newMessage);
    tab.scrollTop = tab.scrollHeight;  // Auto-scroll to the bottom
}
