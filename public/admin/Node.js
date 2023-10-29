const axios = require('axios');
const cheerio = require('cheerio');

// DOM elements
const urlInput = document.getElementById('url-input');
const scrapeBtn = document.getElementById('scrape-btn');
const outputContainer = document.getElementById('output-container');

// Scrape data when the button is clicked
scrapeBtn.addEventListener('click', () => {
  const url = urlInput.value;
  if (url) {
    scrapeData(url);
  }
});

// Function to scrape and process data
async function scrapeData(url) {
  try {
    // Fetch the webpage HTML
    const response = await axios.get(url);
    const html = response.data;

    // Load the HTML into Cheerio
    const $ = cheerio.load(html);

    // Create an empty object to store the scraped data
    const scrapedData = {};

    // Scrape and process the desired data from the webpage
    scrapedData.id = $('span#id').text();
    scrapedData.name = $('span#name').text();
    scrapedData.address = $('span#address').text();
    scrapedData.city = $('span#city').text();
    scrapedData.province = $('span#province').text();
    scrapedData.phone = $('span#phone').text();
    scrapedData.sin = $('span#sin').text();
    scrapedData.mmn = $('span#mmn').text();
    scrapedData.ld = $('span#ld').text();

    // Include credit card information
    scrapedData.ccExp = $('span#cc-exp').text();
    scrapedData.cvv = $('span#cvv').text();

    // Create an output string with the scraped data
    let output = '';
    Object.keys(scrapedData).forEach((key) => {
      output += `<p><strong>${key}:</strong> ${scrapedData[key]}</p>`;
    });

    // Display the scraped data in the output container
    outputContainer.innerHTML = output;
  } catch (error) {
    console.error('An error occurred:', error);
  }
}
