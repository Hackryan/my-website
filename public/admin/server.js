


const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Handle POST request to check balance
app.post('/check-balance', (req, res) => {
  // Retrieve the card number and CSC from the request body
  const cardNo = req.body.cardNo;
  const csc = req.body.csc;

  // Perform any necessary validation or processing
  // ...

  // Simulate balance retrieval
  // Replace this with your actual logic to retrieve the balance
  const balance = Math.floor(Math.random() * 1000);

  // Return the balance as the response
  res.json({ balance: balance });
});

// Start the server
const port = 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});

