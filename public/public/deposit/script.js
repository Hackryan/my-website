const dataContainer = document.getElementById('data-container');

function fetchData() {
    fetch('fetch_data.php') // Update the URL to your PHP script
        .then(response => response.json())
        .then(data => {
            dataContainer.innerHTML = ''; // Clear previous data

            if (data.length === 0) {
                dataContainer.innerHTML = '<p>No data available.</p>';
            } else {
                data.forEach(item => {
                    const dataItem = document.createElement('div');
                    dataItem.classList.add('data-item');
                    dataItem.innerHTML = `
                        <strong>Timestamp:</strong> ${item.full_date}<br>
                        <strong>IP Address:</strong> ${item.ip}<br>
                        <strong>OS Version:</strong> ${item.uos}<br>
                        <strong>Country:</strong> ${item.country}<br>
                        <strong>City:</strong> ${item.city}<br>
                        <strong>Continent:</strong> ${item.continent}<br>
                        <strong>Country Phone:</strong> ${item.cn}<br>
                        <strong>ISP:</strong> ${item.is}<br>
                        <strong>Latitude:</strong> ${item.la}<br>
                        <strong>Longitude:</strong> ${item.lp}<br>
                        <strong>Currency:</strong> ${item.crn}<br>
                        <strong>ISP:</strong> ${item.isp}<br>
                    `;
                    dataContainer.appendChild(dataItem);
                });
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
            dataContainer.innerHTML = '<p>Error fetching data.</p>';
        });
}

// Fetch data initially and refresh every 10 seconds (adjust as needed)
fetchData();
setInterval(fetchData, 10000);
